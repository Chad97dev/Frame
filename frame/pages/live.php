<?php
session_start();
if(!$_SESSION['nom']){
    header('Location:../pages/login.php');
  }
?>
<!DOCTYPE html>
<html>
    <?php include "../templates/header.php" ?>
    <body>
        <div class="container">
        <?php  include '../templates/navbar.php' ?>
        <div class='content m-t-100'>
</div>
</div>
     <h1 class='alert alert-info text-center '>Direct</h1>

 
    </body>
    <?php include "../templates/footer.php" ?>
</html>
