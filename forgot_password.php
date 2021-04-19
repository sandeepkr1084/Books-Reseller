<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<br><br><br>

<div class="container">
	<div style="width: 400px; margin: auto;">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="form-group">
				<label for="email">Enter Your Email Address: </label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter email to forgot">
				
			</div>
			
			<input type="submit" class="btn btn-primary" style="width: 100%" name="getcode" value="Get Code">
		</form>

		<?php 
			session_start();
		if(isset($_POST["getcode"])){
			
			
			$email = $_POST["email"];

			$sql = "SELECT * FROM user where mail='$email'";
      		$result = $conn->query($sql);
			$row = $result->fetch_assoc();

			if($result->num_rows>0){
			$_SESSION["user"] = $row["id"];
			$_SESSION["key"] = random_int(100000, 999999);
			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPSecure = "ssl";
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = 'dummyfornyself@gmail.com';
			$mail->Password = 'Admin#123';
			$mail->setFrom('dummyfornyself@gmail.com','Books Reseller');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject = 'OTP verification';

			$mail->Body = "your otp is <h2> ".$_SESSION["key"]."</h2>";


			if($mail->send()){
				echo"<h2 style='color:blue; font-size: 12px;'>otp is send to your mail id</h2>";
			?>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div class="form-group">
						<label for="code">Enter Sended Code: </label>
						<input type="number" name="code" class="form-control" id="code" placeholder="Enter your code">
					</div>

					<input type="submit" class="btn btn-primary" style="width: 100%" name="confirm" value="Confirm Code">
				</form>

			<?php
			}
			else{
				echo "<h2 style='color:red; font-size: 12px;'>somthing went wrong!!!</h2>";
			}


		}
		else{
			echo "<br><h2 style='color:red; font-size: 12px;'>$email is not registered in our server.</h2>";
		}

		}

		 ?>

		<?php 
			if(isset($_POST["confirm"])){

				if($_SESSION["key"] == $_POST['code']){
					echo"<h2 style='color:blue; font-size: 12px;'>Code successfully verified...Now you can set your password</h2>";
					?>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div class="form-group">
						<label for="password">Enter Your Password: </label>
						<input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
					</div>

					<input type="submit" class="btn btn-primary" style="width: 100%" name="forgot" value="Set Password">
				</form>


			<?php

				}

			}
			if(isset($_POST["forgot"])){
				$password = $_POST["password"];
				$id = $_SESSION["user"];
				$sql = "UPDATE user SET password='$password' WHERE id=$id";
				if ($conn->query($sql) === TRUE) {
					echo "<div class='alert alert-success' role='alert'>Your password successfully updated...</div>";
         			session_destroy();

      				header('Refresh: 5; URL=index.php');
    			} 
    			else {
      				echo "<div class='alert alert-danger' role='alert'>There was an error updating your password!!</div>";
    			}
			}

		?>

	</div>
</div>

</body>
</html>





