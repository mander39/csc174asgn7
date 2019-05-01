<?php session_start(); 
  $logged = true;
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ $logged = false; }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Example using surveyjs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/jquery"></script>
        <script src="https://surveyjs.azureedge.net/1.0.81/survey.jquery.js"></script>
        <link href="https://surveyjs.azureedge.net/1.0.81/survey.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        
        <header>
            <h1><a href="index.php" id="logo"><img src="images/logo.jpg" alt="Disney World Logo"></a></h1>
            <a href="survey.php" id="survey">Take Our Disney Survey!</a>
        </header>
        <div style="margin-top: 50px; padding-bottom: 20px; border-radius: 10px; max-width: 800px;" class="container">
            <h1 style="color: #67badb;"> Walt Disney World Parks Survey </h1>
            <div id="surveyElement"></div>
            <div id="surveyResult"></div>
            <script type="text/javascript" src="js/survey.js"></script>
        </div>
        <?php include('inc/nav.inc') ?>
    </body>
</html>