<?php 
session_start();
if(!$_SESSION['nom']){
  header('Location:../pages/login.php');
}
?>


<!DOCTYPE html>
<html>
    <?php include "../templates/header.php" ?>
   <link rel="stylesheet" href="../css/login.css">
    
      

    <body>
    <div class="container">
        <?php  include '../templates/navbar.php' ?>
</div class='content m-b-100'>


<h1 id='alert-ok' class="alert alert-primary mt-5"></h1>
    <img id='img-form'  src="../images/perso.png" width="400" height="200">
    <form id='form-inscription' class="form-signin col-lg-12" method="post">
  
   
      <h2 class="h3 mb-4 font-weight-normal text-center">Inscrivez-vous </h2>

      
      <span class='text-danger hide js-error'>Veuillez renseigner login et mot de passe !</span>

      
      <label for="login" class="sr-only">Login</label>
      <input type="text" id="login" name="login" class="form-control" placeholder="Login" autocomplete="off" autofocus  >
      
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" autocomplete='off'>

      <label for="password2" class="sr-only"></label>
      <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirmer le mot de passe" autocomplete='off'>
     
   
     
      <label for="Nom" class="sr-only">Nom</label>
      <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" autocomplete="off" autofocus  >
   
      
      <label for="Prenom" class="sr-only">Prenom</label>
      <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom" autocomplete="off" autofocus  >
    
     
  <button class="btn-lg btn-outline-info btn-block pull-left"  type="submit">S'inscrire</button>
  <button class='btn-lg btn-warning btn-block' type='reset'>RAZ</button>

  <p class="mt-5 mb-3 text-muted pull-left">&copy; 2025-2022</p>
</form>
        
 <?php include "../templates/footer.php" ?>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript">
      
      $('#form-login').on('submit',function(event){
    event.preventDefault();
  
    var login = $('#login').val();
    var password = $('#password').val();
    $('#login').val('');
    $('#password').val('');
    var valid = true;
    if (login === '' || password === ''){
      $('.js-error').fadeIn(700);
      valid = false;
    }
    if(valid === true){
      $.ajax({
        url: '../config/session.php',
        type: 'post',
        dataType: 'text',
        data: {login:login,password:password}
      }).done(function(message){
        if(message === 'ok'){
          window.location = '../pages/home.php';
        }
        else{
          $('span.js-error').html('Erreur dans vos identifiants').css('display','block');

        }
      });
      
    }
    
    });
    $('#login,#password').on('keyup',function(){
      $('.js-error').fadeOut();
    });

    $('#form-inscription').on('submit',function(event){
      event.preventDefault();
      var valid = true;
      var login = $('#login').val();
      var password = $('#password').val();
      var password2 = $('#password2').val();
      var nom = $('#nom').val();
      var prenom = $('#prenom').val();
      if(login === '' || password === '' || password2 === '' || nom === ''|| prenom === ''){
        valid = false;
        $('span.js-error').html('Tous les champs doivent être renseignés !').css('display','block');
      }
      if(password !== password2 && valid === true){
        valid = false;
        $('span.js-error').html('La confirmation de votre mot de passe a échouée !').css('display','block');

      }
      if(valid === true){
        $.ajax({
        url: '../php/subscribe.php',
        type: 'post',
        dataType: 'text',
        data: {login:login,password:password,nom:nom,prenom:prenom}
      }).done(function(message){
        if(message === 'ok'){
        $('#alert-ok').css('visibility','visible').html("Utilisateur "+nom+" est actif !");
        $('#form-inscription').reset();
        }
        else{
          $('span.js-error').html('Erreur dans vos identifiants').css('display','block',);

        }
      });
      }
     

    });
   
</script>
 
    
    </body>
</html>