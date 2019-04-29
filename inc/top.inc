<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php
      if($logged == true){ include('scripts.inc'); }
    ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="35" height="35" alt="">
         Survey Land
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?php if(isset($_SESSION['username'])) { ?>
              <a class="btn btn-danger" href="data.php">LOGOUT</a>
            <?php } else { ?>
              <a class="btn btn-info" href="login.php">ADMIN LOGIN</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>