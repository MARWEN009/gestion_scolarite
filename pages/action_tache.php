<?php require_once('identifier.php')?>
<?php 
include("connexion.php");

if(isset($_POST['affecter'])){
$_user= $_POST["user"];
$_tache=$_POST["tache"];
$_req="INSERT INTO `user-tache` (`id_user`, `id_tache`) VALUES ('$_user', '$_tache');";
$__res=$pdo->exec($_req);
if($__res){
    header('location:tache.php?ajouter=ajouter avec succés');
}else  header('location:tache.php?erreur=Erreur!');
}
if(isset($_POST['annuler'])){
    header("location:acceuil.php");
}?>