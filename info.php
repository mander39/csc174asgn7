<?php session_start(); 

  $logged = true;

  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ $logged = false; }

?>



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

      if($logged == true){ include('inc/scripts.inc'); }

    ?>

  </head>

  <body>

    <?php include('inc/nav.inc') ?>

    <div class="container">



    <?php

      // connect to the database

      include 'inc/connect-db.php';

      // get results from database

      $result = mysqli_query($connection, "SELECT * FROM survey2");

    ?>



    <h2 class="titleh2">AJAX DATABASE</h2>

    <table id="data_table" class="table table-striped table-bordered">

        <thead class="thead-dark">

        <tr>

          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Has Been</th>
          <th scope="col">Would Go</th>
          <th scope="col">Favorite</th>
          <th scope="col">Comment</th>


          <?php if(isset($_SESSION['username'])) { ?>

            <th class="table-fit" colspan="2">Delete</th>

          <?php } ?>

        </tr>

      </thead>

      <?php

        // loop through results of database query, displaying them in the table

        while($row = mysqli_fetch_array( $result )) {

      ?>

      <tr id="row<?php echo $row['id'];?>">

        <td><?php echo $row['id']; ?></td>

        <td id="first_val<?php echo $row['id'];?>"><?php echo $row['first'];?></td>
        <td id="last_val<?php echo $row['id'];?>"><?php echo $row['last']; ?></td>
        <td id="choice_val<?php echo $row['id'];?>"><?php echo $row['email']; ?></td>
        <td id="email_val<?php echo $row['id'];?>"><?php echo $row['city']; ?></td>
        <td id="first_val<?php echo $row['id'];?>"><?php echo $row['state'];?></td>
        <td id="last_val<?php echo $row['id'];?>"><?php echo $row['hasbeen']; ?></td>
        <td id="choice_val<?php echo $row['id'];?>"><?php echo $row['wouldgo']; ?></td>
        <td id="email_val<?php echo $row['id'];?>"><?php echo $row['favorite']; ?></td>
        <td id="email_val<?php echo $row['id'];?>"><?php echo $row['comment']; ?></td>

        <?php if(isset($_SESSION['username'])) { ?>

        <td class="table-fit"><a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["id"]; ?>?')" href="dbphp/delete.php?id=<?php echo $row['id']; ?>">🗙</a></td>

      </tr>

      <?php } ?>

      <?php

      } ?>

    </table>

    <div>

      <br>

      <?php if(isset($_SESSION['username'])) { ?>

      <a class="btn btn-info a" href="dbphp/new.php">NEW ROW</a>

      <?php } ?>

    </div>

    </div>

  </body>

</html>

<?php

mysqli_free_result($result);

mysqli_close($connection);

?>