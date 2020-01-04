<?php 
session_start();
if(!$_SESSION['nom']){
  header('Location:../pages/login.php');
}
?>

<!DOCTYPE html>

<html> 
<?php include '../templates/header.php' ?>
            


    <body>


            <?php include '../templates/navbar.php' ?>

            <h2 class='m-b-40'>Utilisateurs</h2>

    <?php 
     $req = $bdd->prepare("SELECT id,login,password,nom,prenom,role,attachement,DATE_FORMAT(created_at,'%d-%m-%Y') as created_at,DATE_FORMAT(updated_at,'%d-%m-%Y') as updated_at from users ORDER BY id desc");
     $req->execute();
     $res = $req->fetchAll(PDO::FETCH_OBJ);
     
    ?>
<div class="container">
<h1 class="alert secondary m-t30 gest" >Gestion des utilisateurs</h1>
<button id='btn-insert-user' class="btn-outline-primary js-insert-user btn-ins btn-lg" >Inscription</button>
</div>
<div class="container use">

<table id='table-users' class="table  " style ='m-b-60'>
<thead>
<tr> 
    <th>Id</th> 
    <th>Nom</th> 
    <th>Prenom</th> 
    <th>Role</th>
    <th>Creation</th> 
    <th>Active</th> 
    <th>Modification</th>
</tr>
</thead>
<tbody>
<?php

foreach($res as $data):?>
<tr> 
            <td><?= $data->id ?></td>
            <td><?= $data->nom ?></td>
            <td><?= $data->prenom ?></td>
            <td><?= $data->role ?></td>
            <td><?= $data->created_at ?></td>
            <td><?= $data->updated_at ?></td>
            <td> <button id="<?= $data->id ?>" class="btn-outline-success js-update-user btn-modif mb-1" type="submit" style="width:200px height=20px" >Modification</button>
            <button class="btn-outline-danger js-delete-user btn-suppr mb-1" type="submit" style="width:200px height=20px" >Supprimer</button>
           
            </td>
</tr>
</tbody>
<?php endforeach  ?>
       </table>
</div>
    <?php include "../config/users-new.php" ?>
    <?php include "../config/delete-bye.php" ?>
    <?php include "../config/modal-inscription.php" ?>
    

    <script>

    //-------------
    // Ecoute sur le bouton modification
    // afin d'ouvrir la fenêtre modale en relation
    // avec l'enregistrement du tableau (voire ID)
    // Récupération des varibles sur le tableau
    // Puis insertion de ces variables dans le formulaire
    //-------------
    $('button.js-update-user').on('click',function(){
       var id = $(this).parent().parent().parent().find('td').eq(0).html();
       var nom = $(this).parent().parent().parent().find('td').eq(1).html();
       var prenom = $(this).parent().parent().parent().find('td').eq(2).html();
       var role = $(this).parent().parent().parent().find('td').eq(3).html();
       $('#modal-update-user #nom').val(nom);
       $('#modal-update-user #prenom').val(prenom);
       $('#modal-update-user #role').val(role);000
       $('#modal-update-user #id').val(id);
       $('#modal-update-user').modal('show').draggable();
    
    });



    //-------------------
    // Ecoute du formulaire
    // afin de valider et d'envoyer
    // les données au script PHP
    // en attente de la réponse
    //------------------
    $('form#form-update').on('submit',function(event){
     event.preventDefault();
    var valid = true;
     var nom = $('#nom').val();
     var prenom = $('#prenom').val();
     var role = $('#role').val();
     var id = $('#id').val();
     if(nom === '' || prenom === '' || role === ''){
        $('.js-error').html('Vous devez  remplir tous les champs !').show();
         valid = false;
     } 

     if(valid === true){

     // Requête ajax afin de communiquer
     // via le script php en mode asynchrone
     $.ajax({

         url: 'http://localhost/frame/php/update-user.php',
         datatype: 'text',
         type: 'POST',
         data:{nom:nom,prenom:prenom,role:role,id:id},

     }).done(function(message){
         if(message.trim() === 'ok'){
           
            $('#modal-update-user').modal('hide');
                location.reload();
         }

     });
     }
    

    });

    //-------------------
    // Permet de faire disparaitre le message
    // lorsque qu'on commence à renseigner les champs vides
    //-------------------
    $('#form-update #nom,#form-update #prenom,#form-update #role').on('keyup',function(){
        $('.js-error').fadeOut();

    });


    </script>

    <script>
    $('.js-delete-user').on('click',function(){
       var id = $(this).parent().parent().parent().find('td').eq(0).html();
     
    
       $('#modal-delete-user #form-delete #id').val(id);
    
       $('#modal-delete-user').modal('show');
    
    });

    $('#modal-delete-user #respYes').on('click',function(event){
        event.preventDefault();
        var id = $('#form-delete #id').val();
        $.ajax({

url: 'http://localhost/frame/php/delete-user.php',
datatype: 'text',
type: 'POST',
data:{id:id},

}).done(function(message){
    if(message.trim() === 'ok'){
        $('#modal-delete-user').modal('hide');
       location.reload();
    }
})

      
       

    });

    
$('#btn-insert-user').on('click',function(event){
window.location = '../config/inscription.php';
});

  

    
    
     </script>
    </body>
    <?php include '../templates/footer.php' ?>
</html>