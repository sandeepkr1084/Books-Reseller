<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 
    if(!isset($_GET["category_id"])){
        header( "location: login.php");
    }
    $category_id = $_GET['category_id']
?>

<?php
  
  $sql = "SELECT b.name as book_name, b.image as book_image, b.price as book_price, c.name as category_name, u.name as user_name, u.image as user_image, u.phone as user_phone, u.mail as user_email FROM products b INNER JOIN category c on b.category_id = c.id INNER JOIN user u on b.user_id = u.id where b.category_id = $category_id";

  $result = $conn->query($sql);
?>

  <br>

  <div class="container">
    <div class="row">
      <?php 
      while ($row = $result->fetch_assoc()) {
        ?>
          <div class="col-3">
              <h3>Seller Details</h3> 
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $row["user_image"] ?>" class="rounded-circle align-center" width="130px" height="130px">
                <div><b class="text-primary">Seller Name:</b> <b> <?php echo $row["user_name"] ?></b></div>
                <div><b class="text-primary">Phone:</b> <b> <?php echo $row["user_phone"] ?></b></div>
                <div><b class="text-primary">Email:</b> <b> <?php echo $row["user_email"] ?></b></div>
            </div>
            <div class="col-9">
            <h3 class="text-center">Book Details</h3>
            <div class="container-fluid">
                    <div class="row">
                          <div class="col-sm-4">
                          <img src="<?php echo $row["book_image"] ?>" height="200px" width="100%">
                          </div>
                          <div class="col-sm-4">
                                  <hr>
                                  <div><b class="text-danger">Book Name:</b><b> <?php echo $row["book_name"] ?></b></div>
                                  <hr>
                                  <div><b class="text-danger">Price:</b><b> <?php echo $row["book_price"] ?></b></div>
                                  <hr>
                                  <div><b class="text-danger">Category:</b><b> <?php echo $row["category_name"] ?></b></div>
                          </div>
                          <div class="col-sm-1"></div>
                          <div class="col-sm-3">
                            <h6>Chat With Seller</h6>
                            <br>
                          <a href="https://api.whatsapp.com/send? phone=<?php echo $row["user_phone"] ?>&text=Hello%21%20<?php echo $row["user_name"] ?>" class="float" target="_blank">
                                <i class="fa fa-whatsapp my-float">
                                <img src="./assets/images/user/w.png" alt="Girl in a jacket" width="80" height="80">
                                </i>
                            </a>
                          </div>
                    </div>
            </div>
            
                
            <br>
            </div>
            
          <br>
          <hr>
        
        <?php 
          }
        ?>

    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>