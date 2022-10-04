
<?php require_once('identifier.php')?>
<?php

require_once('connexion.php');
$id=$_SESSION['user']['iduser'];
        if(isset($_POST['save'])){
            if(empty($_POST['m'])||empty($_POST['m1'])||empty($_POST['m2']))
            {
                header("location:compte.php?mess=Remplissez tous les champs");
            }else{
        $actuel=$_POST['m'];
        $nmdp=$_POST['m1'];
        $vmdp=$_POST['m2'];
        
         
                if ($actuel==$_SESSION['user']['pwd']){
                    if($nmdp==$vmdp){
                    $sql="UPDATE `utilisateur` SET `pwd`=$nmdp WHERE 1;";
                    $result=exec($sql);
                    $_SESSION['pwd']=$nmdp;
                    header('location:compte.php?mess1=Modification terminer!!');
                   
                
           
        }else { header("location:compte.php?mess=Nouveau mot passe incorrect");}
        } else { header("location:compte.php?mess=mot de passe Actuel incorrect");}
     }}
         if(isset($_POST['annuler'])){   

            header("location:acceuil.php");
        }
    ?>