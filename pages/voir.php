<?php require_once('identifier.php')?>
<?php
// Récupérer l'id à modifier (depuis la page précédente)
$id =$_REQUEST['dd'];
// Connexion à la bdd
include("connexion.php");
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$res = $pdo->query("SELECT * FROM `etudiants` WHERE `idetutiants`=$id");
$etd = $res->fetch(); ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un étudiant</title>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
 
 <div class="container"> 
             <div class="panel panel-primary margetop60">
                             <div class="panel-heading">Fiche étudiant</div>                                                   
                                   <div class="panel-body">
 
                                          
                                          <div class="form-group">
                                                <label>Matricule :</label>
                                                   <?php echo $etd[1] ?>
                                           </div>
                                           <div class="form-group">
                                                <label>CIN:</label>
                                                   <?php echo $etd[5] ?>
                                                
                                           </div>
                                           
                                           <div class="form-group">
                                                <label>Nom :</label>
                                                   <?php echo $etd[2] ?>
                                           </div>
                                           <div class="form-group">
                                                <label>Prénom :</label>
                                                   <?php echo $etd[3] ?>
                                           </div>
                                           <div class="form-group">
                                                <label>Address :</label>
                                                   <?php echo $etd[4] ?>
                                           </div>
                                           <div class="form-group">
                                                <label>date de naissance :</label>
                                                   <?php echo $etd[7] ?>
                                           </div>
                                         
                                           <div class="form-group">
                                                <label>N°telephone :</label>
                                                   <?php echo $etd[6] ?>
                                           </div>
                                    <div class="form-group ">
                                   
                                     <a class ='btn btn-info' href='gestionE.php'> Annuler</a>
                                        </div>
                                         
                                          </div>
                                 </div>   
                          </div>
                          </div>
</body>
</html>