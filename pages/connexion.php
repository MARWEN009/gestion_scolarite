<?php 
try{
    $pdo=new PDO("mysql:host=127.0.0.1;dbname=systemscolarite","root","");
}
catch(Exception $e){
    die('Erreur de connexion :'.$e->getMessage());
}
?>