
<?php
session_start();
require_once('connexion.php');
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$requete="select * from utilisateur where login='$login' and pwd='$pwd'";
$resultat=$pdo->query($requete);
if($user=$resultat->fetch()){
$_SESSION['user']=$user;
header('location:acceuil.php');
}else
{
    $_SESSION['erreurLogin']="<strong>Erreur!!</strong> Login ou mot de passe incorrecte!!!";
    header('location:login.php');
}

?>
    