<?php
  $_SESSION_start();

  if(!isset($_SESSION['userdata'])){
    header("location: ../")
  }
?>

<html> 
    <head>
        <tile></title>

        <link rel = "stylesheet" href ="style.css"
    </head>
    <body>
        <div id ="headersection">

        <button id ="backtn">Back</button>
        <button id = "logoutbtn">Log Out</button>
        <h1>Online Voting System</h1>
        </div>
        
        <hr>
        <div id="profile"></div>
        <div id="Group"></div>
        
    </body>
</html>