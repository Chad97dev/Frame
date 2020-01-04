<!DOCTYPE html>
<html>
    <?php include "../templates/header.php" ?>
    <link rel="stylesheet" href="../css/login.css">
    
    <style>

body { 
    background-color: white;
}


</style>

    <body class="text-center">
    <form id='form-login' class="form-signin" method="post" action="../config/session.php">
    <img class="mb-3" src="../images/perso.png" width="400" height="200">
      <h2 class=" mb-3  font-weight-normal ">Identification </h2>
      <span class='text-danger hide js-error'>Veuillez renseigner login et mot de passe !</span>
      <label for="login" class="sr-only">Login</label>
      <input type="text" id="login" name="login" class="form-control" placeholder="Login" autocomplete="off" autofocus  >
      <div class="checkbox mb-2">

</div>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete='off'>

  <div class="checkbox mb-3">

  </div>
  <button class="btn-lg btn-primary  btn-block "  type="submit">Connexion</button>

  <p class="mt-5 mb-3 text-muted ">&copy; 2017-2019</p>
  Si vous ne possédez pas de compte, veuillez vous <a href="../config/inscription.php">Inscrire</a><br />  
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
        url: '../php/session.php',
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
   
</script>
 
    
    </body>
</html>

