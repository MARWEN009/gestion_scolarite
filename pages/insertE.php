<?php require_once('identifier.php')?>
<?php
   if(isset($_POST['save'])){
   if(empty($_POST['matricule']) ||  empty($_POST['cin']) || empty($_POST['nom'])||
   empty($_POST['prenom'])||empty($_POST['addr'])||
   empty($_POST['tel'])||empty($_POST['addr']) ) {header("location:gestionE.php?erreur1=Remplissez tous les champs");}
   else  {
    
    $_matricule=$_POST['matricule'];
    $_cin=$_POST['cin'];
    $_nom=$_POST['nom'];
    $_prenom=$_POST['prenom'];
    $_address=$_POST['addr'];
    $_tel=$_POST['tel'];
    $_datenaiss=$_POST['daten'];
   
    include('connexion.php');
    $pdo->exec("INSERT INTO `etudiants`(`idetutiants`, `matricule`, `nom`, `prenom`, `addr`, `cin`, `tel`, `daten`)
     VALUES (NULL,'$_matricule','$_nom','$_prenom','$_address','$_cin','$_tel','$_datenaiss')");
     header("location:gestionE.php?ajouter=ajouter avec succés");
   }}
   if(isset($_POST['annuler']))
   header("location:gestionE.php?");
 
?>