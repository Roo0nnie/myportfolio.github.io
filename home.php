<?php
session_start();


if(isset($_SESSION['id']) && isset($_SESSION['name'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>




        <h2>Home</h2>
        <p>hello <?php 
        echo $_SESSION['name'] 
         ?> </p>
        <a href="logout.php">Logout</a>
    </body>
    </html>

    <?php 
} else {
        header("Location: loginForm.php");
        exit();
   }
   
    
    ?>

