<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" width="35" height="35" alt="">
         Survey Land
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['username'])) { ?>
          <li class="nav-item d">
              <a class="btn btn-info" href="index.php">SURVEY</a>
          </li>
          <li class="nav-item d">
              <a class="btn btn-primary" href="info.php">DATA</a>
          </li>
            <?php } ?>
          <li class="nav-item">
            <?php if(isset($_SESSION['username'])) { ?>
              <a class="btn btn-danger" href="dbphp/logout.php">LOGOUT</a>
            <?php } else { ?>
              <a class="btn btn-info" href="login.php">ADMIN LOGIN</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>