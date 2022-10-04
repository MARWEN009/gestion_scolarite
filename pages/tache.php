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

                       
                       
  
    <div class="container">
              <div class="panel panel-primary margetop60 ">
                <div class="panel-heading">Affectation de programme aux utilisateurs </div>
                   <div class="panel-body">


                   <form method="post" action="action_tache.php">
                        <label for="pet-select">utilisateurs:</label>

                    <select name="user">
                        <?php
                         include('connexion.php');
                        
                         $res_utilisateur = $pdo->query("SELECT * from utilisateur");
                      
                         $les_utilisateur = $res_utilisateur->fetchAll();
                         foreach ($les_utilisateur as $item) {
                           if($item[2]!="adminstrateur"){
                          ?>
                        <option value="<?php echo $itm[0]?>"><?php echo $item[1];?></option>
                         <?php }} ?>
                        </select>
                        
                            
                     
                               
               
                    <label for="pet-select">Taches:</label>

                    <select name="tache">
                        <?php
                         include('connexion.php');
                        
                      $_lestaches = $pdo->query("SELECT * from tache");
                      
                      $res_taches = $_lestaches->fetchAll(); 
                         foreach($res_taches as $item){
                          ?>
                        <option value="<?php echo $itm[0]?>"><?php echo $item[1];?></option>
                         <?php } ?>
                        </select>
                    
                      <div>       
                    <input type="submit" value="Affecter" class="btn btn-success "name="affecter">
                    <input type="submit" value="Annuler" class="btn btn-success "name="annuler">
                    </div>

                             </from>                                                                       
                             
                              <?php if(isset($_GET["erreur"])){?>
                               <div class="alert alert-danger"><?php echo $_GET['erreur'];?></div>
                              <?php }?>
                         
                             <?php if(isset($_GET["ajouter"])){?>
                             <div class="alert alert-success"><?php echo $_GET['ajouter'];?></div>
                             <?php }?>
                                <hr>  
                         <div> <h3>les Taches</h3> </div>
                <?php
                 $res_UT = $pdo->query("SELECT * FROM `user-tache` ;");
                 $les_UT = $res_UT->fetchAll(); 
            
                   echo "<table class='table table-striped'>";
                   echo "<thead><tr><th>Utilisateur</th><th>Tache</th></tr></thead><tbody>";
                   foreach ($les_UT as $item) {
                   echo "<tr><td>". $item[0]. "</td><td>" . $item[1]."</td><td>
                  
                   
                   <a class ='btn btn-danger' href='supp_tache.php?add=$item[0]'> supprimer </a></td></tr>" ;}
                   echo "</tbody></table>";?>
                
                    
                     </div>
                 </div>
             </div>

             
       </body>
</HTML>