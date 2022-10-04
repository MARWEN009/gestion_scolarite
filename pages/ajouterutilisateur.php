<?php require_once('identifier.php')?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Nouveau stagiaire</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
             
        <div class="container col-md-4 col-md-offset-3" >
                      
                             <h2 class="text-center">Nouveau utilisateur</h2>                                                   
                                         <?php if(isset($_GET["erreur"])){?>
<div class="alert alert-danger"><?php echo $_GET['erreur'];?></div>
<?php }?>

                                       <form method="post" action="insertU.php">
                                       
                                           <div class="form-row">
                                                                                           
                                                    <div class="form-group ">
                                                      <input type="text" name="login" placeholder="Taper votre nom d'utilisateur"
                                                        minlength="4" class="form-control"/>
                                                    </div>
                                                   
                                                     <div class="form-group ">
                                                      
                                                       <input type="password" name="mdp" 
                                                       placeholder=" Tapper votre mot de passe" 
                                                       minlength="4" class="form-control"/>
                                                     </div>  
                                                     <div class="form-group ">
                                                       
                                                       <input type="password" name="mdp1"
                                                        placeholder="Rataper votre mot de passe pour la confirmer" 
                                                       minlength="4" class="form-control"/>
                                                     </div>       
                                                    
                                              <input type="submit" value="Eenregister" class="btn btn-primary "name="save">
                                              <input type="submit" value="Annuler" class="btn btn-primary "name="annuler">
                                            </div>
                      
				                    	</form>
                                     
                               </div>
          </div>      
    </body>
</HTML>