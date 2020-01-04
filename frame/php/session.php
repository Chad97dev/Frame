<?php
session_start();

include 'connexion.php';

if(!empty($_POST)){

$login = $_POST['login'];
$password = sha1($_POST['password']);


$req = $bdd->prepare('SELECT * FROM users WHERE login = :login AND password = :password');
$req->execute(array(':login'=>"$login",':password'=>"$password"));
$res = $req->fetchAll(PDO::FETCH_OBJ);
foreach($res as $data){

}
if($req->rowCount() > 0){
    $_SESSION['nom'] = $data->nom;
    $_SESSION['prenom'] = $data->prenom;
    
    echo 'ok';
}





}