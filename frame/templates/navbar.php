<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark ">
<?php include "../config/modal-information.php" ?>
  <a class="navbar-brand mr-auto mr-lg-0" href="#"></a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <img src='../images/perso.png' alt='perso.png' width="70px" >
      <li class="nav-item active m-l-50px">      
        <a class="navbar-brand" href="../pages/home.php">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li  class="nav-item m-l-50px">
        <a class="navbar-brand" href="../pages/prog.php">Programmes</a>
      </li>

      <li  class="nav-item m-l-50px">
        <a class="navbar-brand" href="live.php">Direct</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="navbar-brand dropdown-toggle m-l-50px" href="#" id="dropdown01" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Settings</a>
        <div class="dropdown-menu " aria-labelledby="dropdown01">
          <a class="dropdown-item" href="../pages/admin.php">Admin</a>
          <a class="dropdown-item" href="../php/logout.php">Déconnexion</a>
          <a class="dropdown-item" href="../config/inscription.php">Inscription</a>
        </div>
      </li>
    </ul>
   

    
    <div id="user-nav">
    <i  class=' fa fa-user text-info m-r-20'>
    <?php if ($_SESSION['nom']!== '' && $_SESSION['prenom']!==''): ?>
      <a class="text-white font 13"><?=   $_SESSION['nom'].' '.$_SESSION['prenom'] ?></a>       
</i>
              <?php endif ?>
              
</div>
  <script>
   
   $('#user-nav').click(function(){
    
    $('#modal-information-user').modal('show');
    
  });
  </script>
   </div>
</nav>

