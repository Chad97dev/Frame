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

     <h1 class='alert alert-danger text-center prog'>Programmations</h1>
</div>
</div>
<div class="container m-t-100 right">
    <table id='table-prog' class="table " >
<span >
    <thead>
<tr> 
    
    <th> Lundi  </th> 
    <th> Mardi  </th> 
    <th>Mercredi</th> 
    <th> Jeudi  </th> 
    <th>Vendredi</th> 
    <th> Samedi </th> 
    <th>Dimanche</th> 
    <th>Horaires</th>
</tr>
</thead>


<tbody>
<tr>
    <td>TFou</td>
    <td>TFou</td>
    <td>TFou</td>
    <td>TFou</td>
    <td>TFou</td>
    <td>TFou</td>
    <td>TFou</td>
    <td>8 Heures</td>

</tr>
<tr>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td>Les douze <br>  coups de midi</td>
    <td> 12 Heures </td>
</tr>
<tr>
    <td>4 mariages <br> pour une lune de miel</td>
    <td>4 mariages <br> pour une lune de miel</td>
    <td>4 mariages <br> pour une lune de miel</td>
    <td>4 mariages <br> pour une lune de miel</td>
    <td>4 mariages <br> pour une lune de miel</td>
    <td>4 mariages <br> pour une lune de miel Replay</td>
    <td>4 mariages <br> pour une lune de miel Replay</td>
    <td> <br>16 Heures </td>
</tr>
<tr>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td>   Le Journal <br>de 20 heures   </td>
    <td> <br>20 Heures </td>

</tr>
<tr>
  <td>Les experts Manhattan</td>
  <td>Les experts Parisiens</td>
  <td>Les experts de la RATP</td>
  <td>20 minutes de découvertes</td>
  <td>Nos chomeurs ont du talents</td>
  <td>Teddy Riner cuisine </td>
  <td>Découverte de chad chomeur</td>
  <td>23 Heures</td>
</tr>


</tbody>
</span>

</div>



    </body>
    <?php include "../templates/footer.php" ?>
</html>