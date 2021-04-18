<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header( "location: login.php");
    }
?>

<?php
$sql = "SELECT * FROM category";
$result = $conn->query($sql);
?>

  <br>

  <div class="container">
    <div class="row">
      <?php 
      while ($row = $result->fetch_assoc()) {
        ?>

        <div class="col-md-3">
          <div class="profile-card-2">
            <img src="<?php echo $row["image"] ?>" class="img img-responsive" height="200px" width="100%">
            <div class="profile-name"><?php echo $row["name"] ?></div>
            <div class="profile-username"></div>
            <div class="profile-icons"><a href="books.php?category_id=<?php echo $row["id"] ?>" class="book_link">Get Books</a></div>
          </div>
        </div>

        <?php 
          }
        ?>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>