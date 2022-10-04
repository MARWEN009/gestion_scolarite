<?php require_once('identifier.php')?>

<?php
$id=$_REQUEST['dd'];
include("connexion.php");
$res = $pdo->query("SELECT * FROM `etudiants` WHERE `idetutiants`= $id ;");
$etd = $res->fetch();
 ?>
 <!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Modifier un étudiant</title>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
 
 <div class="container"> 
             <div class="panel panel-primary margetop60">
                             <div class="panel-heading">Modifier une fiche étudiant</div>                                                   
                                   <div class="panel-body">
                                       <form method="post" action="modif_etudiant_action.php">
                                       
                                           <div class="form-group col-md-3">
                                                <label>Matricule</label>
                                                <input type="text" name="matricule"  class="form-control" value="<?php echo $etd[1] ?>"/>
                                           </div>
                                           
                                          <div class="form-group col-md-3">
                                                <label>CIN</label>
                                                <input type="text" name="cin" value="<?php echo $etd['cin'] ?>"class="form-control"/>
                                          </div>
                                         <div class="form-group col-md-3">
                                              <label for="nom">Nom</label>
                                              <input type="text" name="nom" value="<?php echo $etd['nom'] ?>" class="form-control"/>
                                           </div>
                                          <div class="form-group col-md-3">
                                              <label for="nom">Prénom</label>
                                              <input type="text" name="prenom" value="<?php echo $etd['prenom'] ?>" class="form-control"/>
                                           </div>
                                          <div class="form-group col-md-6">
                                             <label for="inputAddress">Address</label>
                                             <input type="text" class="form-control" name="addr" value="<?php echo $etd['addr'] ?>">
                                          </div>
                                           <div class="form-group col-md-6">
                                             <label >N°tel</label>
                                             <input type="text" class="form-control" name="tel" value="<?php echo $etd['tel'] ?>">
                                          </div>
                                         
                                         <div class="form-group">
                                           <label for="start">date de naissance</label>
                                           <input type="date"  name="daten" value="<?php echo $etd['daten'] ?>"min="1986-01-01" max="2002-12-31">
                                          </div>

                                        <div class="form-group ">
                                        <input type="submit" value="Modifier" name="modifier1" class="btn btn-success ">
                                        <input type="submit" value="Annuler" class="btn btn-success "name="annuler">
                                        </div>
                                   </form>
                             </div>
                          </div>   
                         </div>
                      </div>
                     
</body>
</html>