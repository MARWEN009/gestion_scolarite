<?php require_once('identifier.php')?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<div class="container">

	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  topnav">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Gestion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="gestionE.php">Gestion des Etudiants</a>
                        <a class="dropdown-item" href="#">Gestion des Salles</a>
                        <a class="dropdown-item" href="#">Gestion des matieres</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Traitement des notes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Carfax</a>
                        <a class="dropdown-item" href="#">Carproof</a>
                        <a class="dropdown-item" href="#">Omnivic</a>
                    </div>
                </li>
                <?php if($_SESSION['user']['role']=='adminstrateur'){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gestion des utilisateurs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Gérer les utilisateurs</a>
                        <a class="dropdown-item" href="#">Affecter une tâche</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
            
        </div>
          <div class="navbar navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                   <li><a href="compte.php"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION['user'] ['role']  ?> </a></li>
                   
                  
                   <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i>Déconnexion</a></li>
                </ul>
          </div>
         

    
            

    </nav>
</div>