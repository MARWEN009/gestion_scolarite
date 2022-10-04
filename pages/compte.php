<?php require_once('identifier.php')?>

<!DOCTYPE html>
<head>
  <title>Modifier votre compte</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>

<div class="container col-md-4 col-md-offset-3" >                
  
<h2 class="text-center">Modifier votre mot de passe</h2>
        
        <div class="form-rows">
        <form method="POST" action="action_compte.php" >
        
        <div class="form-group ">
           <input type="password" name="m" class="form-control"  placeholder="Ancien mot de passe"/>
           </div>

           <div class="form-group ">
                 <input type="password" name="m1"  class="form-control" placeholder="Nouveau mot de passe"/>
           </div>

      
           <div class="form-group ">
     
           <input type="password" name="m2"  class="form-control" placeholder="Confirmer Nouveau mot de passe"/>
           </div>
                                             <div class="form-group ">
  				                                    <input type="submit" value="Sauvegarder" class="btn btn-success "name="save">
                                              <input type="submit" value="Annuler" class="btn btn-success "name="annuler">
                                              </div>
                                              <?php if(isset($_GET["mess"])){?>
                                                <div class="alert alert-danger"><?php echo $_GET['mess'];?></div>
                                                 <?php }?>
                                                 <?php if(isset($_GET["mess1"])){?>
                                                <div class="alert alert-success"><?php echo $_GET['mess1'];?></div>
                                                 <?php }?>
</form>
       </div>
    </div>
  
</body>
</html>