<?php require_once('identifier.php')?>
<?php
// Récupérer toutes les données de l'étudiant à modifier
if(isset($_POST['modifier1'])){
   
$_matricule = $_POST['matricule'];
$_nom = $_POST['nom'];
$_prenom = $_POST['prenom'];
$_addr = $_POST['addr'];
$_tel=$_POST['tel'];
$_daten=$_POST['daten'];
$_cin=$_POST['cin'];
// Connexion à la bdd
include("connexion.php");
// Exécuter la requête SQL de mise à jour
$pdo->exec("UPDATE `etudiants` SET `matricule`=$_matricule,`nom`=$_nom,`prenom`=$_prenom,`addr`=$_addr,`cin`=$_cin
,`tel`=$_tel,`daten`=$_date
WHERE idetutiants=$_id");
 
// Redirection à la page principale
header("location:modif_etudiant.php?success=Modification success");
}
if(isset($_POST['annuler'])){
    header("location:gestionE.php");
}?>