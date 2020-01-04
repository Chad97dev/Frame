
<?php


$bdd = new PDO('mysql:host=localhost;dbname=frame','frame','frame');

if(!empty($_POST)){


    //extraction des données tableau post dans des variables
    extract($_POST);

    // Réception des variables
  /*  $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];*/

    //-----------------
    // Fixer la variable pour
    // la date de mise à jour
    //------------------
    $updated_at = date('Y-m-d');

    $req = $bdd->prepare('UPDATE users SET nom = :nom, prenom =:prenom,role=:role,updated_at=:updated_at WHERE id = :id');
    $req->execute(array(':nom'=>"$nom",':prenom'=>"$prenom",':role'=>"$role",':id'=>$id,':updated_at'=>"$updated_at"));
    $req->closeCursor();

    echo 'ok';

}
?>


