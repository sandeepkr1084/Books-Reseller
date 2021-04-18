<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 
    if(!isset($_GET["category_id"])){
        header( "location: login.php");
    }
    $category_id = $_GET['category_id']
?>

<?php
  
  $sql = "SELECT b.name as book_name, b.image as book_image, b.price as book_price, c.name as category_name, u.name as user_name, u.image as user_image, u.phone as user_phone FROM products b INNER JOIN category c on b.category_id = c.id INNER JOIN user u on b.user_id = u.id where b.category_id = $category_id";

  $result = $conn->query($sql);
?>

  <br>

  <div class="container">
    <div class="row">
      <?php 
      while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-6">
          <div class="row" style="background-color: #eba134; padding: 10px;">
            <div class="col-6">
              Book Details: 
                <img src="<?php echo $row["book_image"] ?>" height="200px" width="100%">
                <div>Book Name:  <?php echo $row["book_name"] ?></div>
                <div>Price:  Rs<?php echo $row["book_price"] ?></div>
                <div>Book Category: <?php echo $row["category_name"] ?></div>
            </div>
            <div class="col-6">
              Seller Details: 
                <img src="<?php echo $row["user_image"] ?>" height="200px" width="100%">
                <div>Seller Name:  <?php echo $row["user_name"] ?></div>
                <div>Phone:  <?php echo $row["user_phone"] ?></div>
                <div>Book Category: <?php echo $row["category_name"] ?></div>
            </div>
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