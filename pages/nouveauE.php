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
       
        
        <div class="container"> 
             <div class="panel panel-primary margetop60">
                             <div class="panel-heading">Les infos du nouveau etudiants</div>                                                   
                                   <div class="panel-body">
                                       <form method="post" action="insertE.php">
                                          
                                                <div class="form-group col-md-3">
                                                      <label>Matricule</label>
                                                      <input type="text" name="matricule" placeholder="matricule" class="form-control"/>
                                                 </div>
                                                 
                                                <div class="form-group col-md-3">
                                                      <label>CIN</label>
                                                      <input type="text" name="cin" placeholder="cin" class="form-control"/>
                                                </div>
                                               <div class="form-group col-md-3">
                                                    <label for="nom">Nom</label>
                                                    <input type="text" name="nom" placeholder="nom" class="form-control"/>
                                                 </div>
                                                <div class="form-group col-md-3">
                                                    <label for="nom">Prénom</label>
                                                    <input type="text" name="prenom" placeholder="prénom" class="form-control"/>
                                                 </div>
                                                <div class="form-group col-md-6">
                                                   <label for="inputAddress">Address</label>
                                                   <input type="text" class="form-control" name="addr" placeholder="1234 Main St">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                   <label >N°tel</label>
                                                   <input type="text" class="form-control" name="tel">
                                                </div>
                                               

                                               <div class="form-group">
                                                 <label for="start">date de naissance</label>
                                                 <input type="date"  name="daten" value="2000-07-22"min="1986-01-01" max="2002-12-31">
                                                </div>

                                               
                                          
                                          <div class="form-group ">
  				                                    <input type="submit" value="Sauvegarder" class="btn btn-success "name="save">
                                              <input type="submit" value="Annuler" class="btn btn-success "name="annuler">
                                              </div>
				                            	</form>
                                     </div>
                                 </div>   
                          </div>
                    </div>      
    </body>
</HTML>