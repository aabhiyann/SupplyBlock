<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light white" style="position:fixed; width: 100vw; z-index: 20;">
  <a class="navbar-brand" href="checkproduct.php">
  <img src="images/SupplyBlock.png" style="width: 60px;"> &nbsp
  </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: #4287f5;"></span>
    </button>

    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav mr-auto">

      <?php
      if ( isset( $_SESSION['role'] ) ){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="checkproduct.php">Check Products</a>
        </li>
      <?php
      if ( $_SESSION['role']==0 ){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="addproduct.php">Add Products</a>
        </li>
      <?php
          }if ( $_SESSION['role']==1 || $_SESSION['role']==0 ){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="scanshipment.php">Scan Shipment</a>
        </li>
      <?php
      }
      }
      ?>
        <li class="nav-item">
          <a class="nav-link" id="aboutbtn" href ="about.php"> About </a>
        </li>
      </ul>

      <form class="form-inline">
        <div class="md-form my-0">
          <a class="nav-link" href="logout.php" style="padding-left:5px;padding-right:5px;margin-left:0px;"> Logout </a>
        </div>
      </form>
    </div>
  </nav>
</body>
</html>





