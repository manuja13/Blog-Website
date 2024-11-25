<!doctype html>
<?php

if(isset($_GET["page"])){
  $page = $_GET["page"];
}else{
  $page = "home";
}

?>



<html lang="en">
  <head>
    <link rel="stylesheet" href="resources\css\style.css">
   <?php require_once (__DIR__.'/app/head/_01h.php'); ?>
  </head>
  <body>
    <?php require_once (__DIR__.'/app/navbar/_01n.php'); ?>
    
    <!-- Button trigger modal -->




    <?php require_once (__DIR__.'/pages/_'.$page.'.php'); ?>

   
   
    <?php require_once (__DIR__.'/app/footer/_01f.php'); ?>
    <?php require_once (__DIR__.'\app\db\_login_user.php'); ?>
    <?php require_once (__DIR__.'\app\db\_register_user.php'); ?>
    <?php require_once (__DIR__.'/resources\JS\js.php'); ?>


  </body>
</html>