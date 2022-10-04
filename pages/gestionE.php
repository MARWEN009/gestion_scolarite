<?php require_once('connexion.php');?>
<!DOCTYPE html>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Gestion des Etudiants</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        
        </head>
    <body>
    <?php include("menu.php");?>
    <div class="container">
            <div class="panel panel-success margetop60">
				<div class="panel-heading">Rechercher des Etudiants</div>
				<div class="panel-body">
 
				<form method="POST"  class="form-inline">
						<div class="form-group">
                            <input type="text" name="rechercher" 
                                   placeholder="Matricule"
                                   class="form-control"
                                  />
                        </div>
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            Chercher
                        </button> 
                        <a href="nouveauE.php"><span class="glyphicon glyphicon-plus"></span>
                        Nouveau Etudiant</a>
                 
 
					</form>
                    
                   <?php
                   /*
                      $rech=$_POST['t_rechercher'];
                       if (isset($_POST['rechercher']))
                             {
	                        $res=$cn->query("SELECT * FROM etudiants where matricule='$rech'");
                              $enrg=$res->fetch();
                               if ($enrg[0] == $rech){
        echo "<table class='table table-striped'>";
        echo "<thead><tr><th>matricule</th><th>Nom</th><th>Prénom</th></tr></thead><tbody>";
        echo "<tr><td>". $enrg[1] . "</td><td>" . $enrg[2]."</td><td>" .$enrg[3]."</td><td>";
        echo "</tbody></table>";}*/
	?>
    

             </div>
			</div>
                                   
<?php if(isset($_GET["ajouter"])){?>
<div class="alert alert-success"><?php echo $_GET['ajouter'];?></div>
<?php }?>
<?php if(isset($_GET["sup"])){?>
<div class="alert alert-danger"><?php echo $_GET['sup'];?></div>
<?php }?>
<?php if(isset($_GET["erreur"])){?>
<div class="alert alert-danger"><?php echo $_GET['erreur'];?></div>
<?php }?>
<?php if(isset($_GET["erreur1"])){?>
<div class="alert alert-danger"><?php echo $_GET['erreur1'];?></div>
<?php }?>
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des Etudiants </div>
                <div class="panel-body">

                <?php
                include('connexion.php');
                 // Récupérer les notes depuis la BdD :
                 $res_etudiant = $pdo->query("SELECT * from etudiants");
                 // Extraire (fetch) toutes les lignes (enregistrement, rows)
                 $les_etudiants = $res_etudiant->fetchAll(); // Ceci est un tableau de tableaux associatifs
                 // Calculer le nombre d'étudiants
                  $nbr_etudiants = count($les_etudiants);

                  if( $nbr_etudiants==0){
                  // Afficher un message si la liste est vide
                  echo "<b>Aucune Etudiant pour le moment !</b>"; }
                   else{
                     // Afficher la liste des étudiant/note sous forme de liste ordonnée
                   echo "Il y a $nbr_etudiants étudiants ";
                   echo "<table class='table table-striped'>";
                   echo "<thead><tr><th>matricule</th><th>Nom</th><th>Prénom</th></tr></thead><tbody>";
                   foreach ($les_etudiants as $item) {
                       
                   echo "<tr><td>". $item[1] . "</td><td>" . $item[2]."</td><td>" .$item[3]."</td><td>
                   <a class ='btn btn-info' href='voir.php?dd=$item[0]'> Voir </a>
                   <a class ='btn btn-info' href='modif_etudiant.php?dd=$item[0]'> Modifier </a>
                   <a class ='btn btn-danger' href='supp_etudiant.php?add=$item[0]'> supprimer </a></td></tr>" ;}
                   echo "</tbody></table>";}?>

                </div>
            </div>
        </div>
    </body>
</HTML>