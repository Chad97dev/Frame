<?php


$bdd = new PDO('mysql:host=localhost;dbname=frame','frame','frame');

if(!empty($_POST)){

    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = sha1($_POST['password']);
    $created_at = date('Y-m-d');
    $updated_at = date('Y-m-d');



    $req = $bdd->prepare ('INSERT INTO users (nom,prenom,login,password,created_at,updated_at) VALUES (:nom,:prenom, :login, :password,:created_at,:updated_at)');
    $req->execute (array(':nom'=>"$nom",':prenom'=>"$prenom",':login'=>"$login", ':password'=>"$password", ':created_at'=>"$created_at",':updated_at'=>"$updated_at"));

    echo 'ok';

}





