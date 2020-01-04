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
        <div class="container m-l-50pm">
        <?php  include '../templates/navbar.php' ?>
        <div class='content m-t-100 '>

     <div class='col-lg-2 bg '>   
     <a  href="../pages/utilisateurs.php"><span><i class='fa fa-users fa-9x btn-size3 text-info '></i></span>
     <span class='text-btn btn toxt'>Utilisateurs</span></a>
     
     </div>
     <div class='col-lg-2 bg '>
     <span><i class='fa fa-key fa-9x btn-admin text-warning '></i></span>
     <span class='text-btn btn toxt'>Administrateur</span>
    
     </div>
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-ban fa-9x btn-admin text-danger '></i></span>
     <span class='text-btn btn toxt'>Banni</span>
    
     </div> 
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-bell fa-9x btn-size2 text-success m-t30 m-r-20 '></i></span>
     <span class='text-btn btn toxt'>Notifications</span>
    
     </div>
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-envelope fa-9x btn-admin text-danger m-t30'></i></span>
     <span class='text-btn btn toxt'>Mail</span>
    
     </div>
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-flag fa-9x btn-admin text-info m-t30 '></i></span>
     <span class='text-btn btn toxt'>Lieu</span>
    
     </div>
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-euro-sign fa-9x btn-size text-warning m-t30 m-r-20'></i></span>
     <span class='text-btn btn toxt'>Don</span>
    
     </div>
     <div class='col-lg-2 bg'>
     <span><i class='fa fa-hamburger fa-9x btn-admin m-t30 '></i></span>
     <span class='text-btn btn toxt'>Nourriture</span>


     </div>
        <div class='col-lg-2 bg'>
     <span><i class='fa fa-chess fa-9x btn-admin m-t30'></i></span>
     <span class='text-btn btn toxt'>Jeux</span>
    
     </div>
     
  


  
 <?php include "../templates/footer.php" ?>
    </body>
</html>
