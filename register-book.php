<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php ob_start(); ?>
<?php 

    if(!isset($_SESSION["user"])){
        header( "location: login.php");
    }
?>

<?php
    
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
?>

<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Book Name</label>
						<input type="name" class="form-control" name="name" id="name"  placeholder="Enter book name">
					</div>
					<div class="form-group">
						<label for="price">Price</label>
						<input type="number" class="form-control" name="price" id="price"  placeholder="Enter book price">
					</div>
					<div class="form-group">
						<label for="category"> Select Category</label>
						<select class="form-select" name="category">
							<option value="" disabled> Select Category </option>
							<?php 
							while($row = $result->fetch_assoc()){
								$id = $row["id"];
								echo "<option value=$id>". $row["name"] ."</option>";
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="book">Book Image</label>
						<input type="file" name="image" class="form-control" id="book"  placeholder="book Image">
					</div>
					<br>
					<input type="submit" class="btn btn-primary" style="width: 100%" name="sell" value="Sell">
					
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<?php
if(isset($_POST["sell"])){
	
	$name = $_POST["name"];
	$price = $_POST["price"];
	$category = $_POST["category"];
	
	print_r($_FILES['image']);
	print_r($_POST);
	if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){

		$target_dir = "assets/images/books/";
		$target_file = $target_dir . date("Y-m-d-H-i-s") . basename($_FILES["image"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
			echo "<div class='alert alert-success' role='alert'>Successfuly uploaded your file!!</div>";
		}
		else {
			echo "<div class='alert alert-danger' role='alert'>Sorry, there was an error uploading your file.</div>";
		}
		$user_id =  $_SESSION["user"];

		$sql = "INSERT INTO products (name, price, image, category_id, user_id) VALUES ('$name', $price, '$target_file', $category, $user_id)";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			header( "location: book_category.php", true, 303);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	
}

?>