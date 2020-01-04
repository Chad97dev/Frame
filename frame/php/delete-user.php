<?php


$bdd = new PDO('mysql:host=localhost;dbname=frame','frame','frame');

if(!empty($_POST)){

       
        extract($_POST);

      

    $req = $bdd->prepare('DELETE FROM users WHERE  id =:id');
    $req->execute(array(':id'=>$id));
    $req->closeCursor();

    echo "ok";
   

}


