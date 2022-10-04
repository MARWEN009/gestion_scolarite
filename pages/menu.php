<?php require_once('identifier.php')?>

<?php include('connexion.php');
  $_lestaches = $pdo->query("SELECT * FROM `user-tache` ;");
  $res_taches = $_lestaches->fetchAll();
   foreach ($res_taches as $item) ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">
     <div class="navbar-header">
       <a href="acceuil.php" class="navbar-brand"> <span class="glyphicon glyphicon-th-list"></span>Acceuil</a>
     </div>
  
     <ul class="nav navbar-nav">
     <?php if(($_SESSION['user']['role']=='adminstrateur')||(($_SESSION['user']['iduser']==$item[0])&&($item[1]==11))){?>
      
       <li><a href="gestionE.php"><span class="glyphicon glyphicon-briefcase"></span>Gestion des Etudiants</a></li>
       <?php } ?>

       <?php if(($_SESSION['user']['role']=='adminstrateur')||(($_SESSION['user']['iduser']==$item[0])&&($item[1]==22))){?>
       <li><a href="traitment_note.php"><span class="glyphicon glyphicon-list-alt"></span>Traitement des notes</a></li>
       <?php } ?>

       <?php if(($_SESSION['user']['role']=='adminstrateur')){?>
       <li><a href="gestionU.php"><span class="glyphicon glyphicon-briefcase"></span>Gestion des utilisateurs</a></li>
       <li><a href="tache.php"><span class="glyphicon glyphicon-pencil"></span>Gestion des Taches</a></li>
       <?php } ?>
       
     </ul>
     <div class="navbar navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                   <li><a href="compte.php"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['user'] ['role']  ?> </a></li>
                   <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i>Déconnexion</a></li>
                </ul>
     </div>
    </div>
   </div>
          
</nav>
