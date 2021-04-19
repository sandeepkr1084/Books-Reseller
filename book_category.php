<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<?php 
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
          <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo $row["image"] ?>" alt="Card image cap" height="300px" width="300px">
          <div class="card-body">
              <h4 class="card-title text-center"><?php echo $row["name"] ?></h4>
              <a href="books.php?category_id=<?php echo $row["id"] ?>" class="btn btn-danger btn-block">Click</a>
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