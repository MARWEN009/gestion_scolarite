<?php require_once('identifier.php')?>
<?php 
if(isset($_REQUEST['add'])){
// Récupérer l'id à supprimer
$id = $_REQUEST['add'];
// Connexion à la bdd
include("connexion.php");
// Supprimer l'enregistrement
$pdo->exec(" DELETE FROM `etudiants` WHERE `idetutiants`=$id");
// Redirection à la page principale
header("location:gestionE.php?sup=Supprimer terminer!!");}?>