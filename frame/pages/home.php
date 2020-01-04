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
        <div class='content m-t-100 '>

     <h1 class='alert  text-center prst'>Présentation</h1>
</div>
</div>
    <marquee scrollamount ="12" class="font-30 m-t-100" >Préparation d'une interface afin de pouvoir l'intégrer ultérieurement  dans un framework dans le cadre d'un projet applicatif</marquee>
<div class="container m-t-100">
    <table id='table-tache' class="table left " >
<thead>
<tr> 
    <th>Technologie</th> 
    <th>Taches</th> 
    
</tr>
</thead>


<tbody>
<tr>
    <td>CSS</td>
    <td>Integration Boostrap4</td>
</tr>
<tr>
    <td>MariaDB,SQL</td>
    <td>Parametrage base de données</td>
</tr>
<tr>
    <td>HTML5,CSS,PHP7,JavaScript et AJAX</td>
    <td>Interface de connexion et d'administration</td>
</tr>
<tr>
    <td>PHP7</td>
    <td>Gestion des sessions</td>
</tr>
<tr>
  <td>JavaScript,PHP7</td>
  <td>Gestion des utilisateurs</td>
</tr>

</tbody>

</div>
<?php include "../templates/footer.php" ?>
    </body>
    
</html>
