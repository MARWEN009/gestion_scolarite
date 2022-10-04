<?php require_once('identifier.php')?>
<?php   
session_start(); 
session_destroy();
header("location:login.php"); 
exit ();
?>