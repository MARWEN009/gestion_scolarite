<?php require_once('identifier.php')?>
<?php
     if(isset($_POST['save']))
   {
    if(empty($_POST['mdp']) ||  empty($_POST['mdp1']) || empty($_POST['login'])
     ) {header("location:gestionU.php?erreur1=Remplissez tous les champs");}
    else{
   
    $mdp=$_POST['mdp'];
    $mdp1=$_POST['mdp1'];
    if($mdp==$mdp1){
      $_login=$_POST['login'];
    include('connexion.php');
    $pdo->exec("INSERT INTO utilisateur(iduser,login,role,pwd) 
    VALUES(NULL,'$_login','utilisateur','$mdp')");
    header("location:gestionU.php?ajouter=Ajouter avec succés");
   }else{header("location:ajouterutilisateur.php?erreur=les deux mot de passe ne sont pas identiques");}}}
if(isset($_POST['annuler']))
    header("location:gestionU.php");
?>