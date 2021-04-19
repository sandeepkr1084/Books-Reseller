
<?php include 'connection.php' ?>

<?php 
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<link rel="stylesheet" href="./login.css">
	<title>Login</title>
</head>
<body>

	<br>
	<h1 class="text-center text-danger">Join With Us</h1>

	<?php 

	if(isset($_POST["signup"])){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$dob = $_POST["dob"];
		$gender = $_POST["gender"];

		$address = $_POST["address"];

		$password = $_POST["password"];

		if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){

			$target_dir = "assets/images/user/";
			$target_file = $target_dir . date("Y-m-d-H-i-s") . basename($_FILES["image"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
				echo "<div></div>";
			}
			else {
				echo "<div class='alert alert-danger' role='alert'>Sorry, there was an error uploading your file.</div>";
			}


			$sql = "INSERT INTO user (name, mail, phone, dob, gender, image, address, password) VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$target_file', '$address', '$password')";
			if ($conn->query($sql) === TRUE) {
				echo "<div class='alert alert-success' role='alert'>You are successfully registered. Now login to continue</div>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}


	}

	if(isset($_POST["signin"])){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM user where mail='$email' and password='$password'";
		$result = $conn->query($sql);


		$row = $result->fetch_assoc();
		if($result->num_rows>0){
			if($email==$row["mail"] && $password==$row["password"]){
				$_SESSION["user"] = $row["id"];
				echo("logged In");

				header( "location: index.php", true, 303);
			}
		}
		else{
			echo "<div class='alert alert-danger' role='alert'>incorect email or password!!</div>";
		}
	}


	?>


	<br><br>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				<h2>Create Account</h2>
				<input type="text" name="name" placeholder="Name" />

				<input type="email" name="email" placeholder="Email" />
				<input type="text" name="phone" placeholder="phone number" />
				<input type="date" name="dob" placeholder="Date Of birth" />
				<select class="input" name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="Other">Other</option>
				</select>

				<input type="file" name="image">
				<input type="text" name="address" placeholder="address" />
				<input type="password" name="password" placeholder="Password" />

				<input type="submit" name="signup" value="Sign Up" class="button">
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<a href="forgot_password.php">Forgot your password?</a>
				<input type="submit" name="signin" value="Sign In" class="button">
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost button" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost button" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<br><br>
</body>
<script src="./login.js"></script>
</html>




