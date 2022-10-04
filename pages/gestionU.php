<?php require_once('identifier.php')?>
<!DOCTYPE html>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Gestion des utilisateurs</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>

<body>
  <?php include("menu.php");?>
    <div class="container">
          <div class="panel panel-success margetop60">
				<div class="panel-body">   
                  <a href="ajouterutilisateur.php"><span class="glyphicon glyphicon-plus"></span>
                          Nouveau utilisateur</a>  
                </div>
	    	</div>
        <?php if(isset($_GET["erreur"])){?>
<div class="alert alert-danger"><?php echo $_GET['erreur'];?></div>
<?php }?>
<?php if(isset($_GET["ajouter"])){?>
<div class="alert alert-success"><?php echo $_GET['ajouter'];?></div>
<?php }?>
<?php if(isset($_GET["erreur1"])){?>
<div class="alert alert-danger"><?php echo $_GET['erreur1'];?></div>
<?php }?>
             <div class="panel panel-primary">
                <div class="panel-heading">Liste des Utilisateurs </div>
                   <div class="panel-body">
                   <?php
                      include('connexion.php');
                        // Récupérer les notes depuis la BdD :
                        $res_utilisateur = $pdo->query("SELECT * from utilisateur");
                        // Extraire (fetch) toutes les lignes (enregistrement, rows)
                        $les_utilisateur = $res_utilisateur->fetchAll(); // Ceci est un tableau de tableaux associatifs
                        // Calculer le nombre d'étudiants
                         $nbr_utilisateur = count($les_utilisateur)-1;
                         if( $nbr_utilisateur==0){
                           // Afficher un message si la liste est vide
                           echo  "<b>Aucune utilisateur pour le moment !</b>";}
                          else{
                          // Afficher la liste des étudiant/note sous forme de liste ordonnée
                           echo "Il y a $nbr_utilisateur utilisateur ";
                           echo "<table class='table table-striped'>";
                           echo "<thead><tr><th>id</th><th>login</th><th>Role</th></thead><tbody>";
                           foreach ($les_utilisateur as $item) {
                            if($item[2]!="adminstrateur"){
                            echo "<tr><td>". $item[0] . "</td><td>" . $item[1]."</td><td>" .$item[2]."</td><td>
                           
                            <a class ='btn btn-danger' href='supp-sql.php?add=$item[0]'> supprimer </a>
                          </td></tr>" ;}}
                            echo "</tbody></table>";}?>
                     </div>
                 </div>
             </div>
       </body>
</HTML>