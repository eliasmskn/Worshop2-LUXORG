
<!-- **************************************** -->
<?php
  include("Template_header.html");
?>
<!-- **************************************** -->


<div id= "accueil" class="jumbotron text-center">
  <br>
  <h1>Espace souscription</h1> 
 </div> 

 <div class="container-fluide" id="connexion">
  <h2>Formulaire 2/3</h2>
   <div class = "row " >
   <br><br>
   <div class="col-sm-1">
      </div>
   <div class="col-sm-2">
        <span class="glyphicon glyphicon-pencil logo slideanim"></span>
      </div>
    <div class="col-sm-9">
        <form class="form-horizontal"  role="form" method="post" action="Controleur_Souscription_2.php">
    <div class="col-sm-2">
    </div>
         
    <div class="form-group">
      <input type="hidden" name="id_obj"class="form-control" id="id_objet">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="libelle">Objet :</label>
     <div class="col-sm-4">
      <select class="form-control" id="libelle" name="libelle">
        <option>Réveil</option>
        <option>Cafetière</option>
        <option>Grille-pain</option>
        <option>Machine à laver</option>
        <option>Voiture</option>
        <option>Rideaux</option>
        <option>Store</option>
        <option>TV</option>
        <option>Radio</option>
        <option>Luminosité</option>
        <option>Chauffage / Climatisation</option>
        <option>Autres ..</option>
      </select>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Code Objet :</label>
      <div class="col-sm-4">
       <input pattern="[A-Za-z]{2,20}" type="text" name="code" class="form-control" id="code" placeholder="Entrez le code objet" required>
      </div>
      </div>
      <div class="col-sm-2">
      </div>
      <div class="form-group">
      <input type="hidden" name="id_user"class="form-control" id="id_utilisateur">
    </div>
      
        <div class="col-sm-5">
      </div>
      <button type="submit" name="suivant" class="btn btn-default">Objet suivant</button>
      <button type="submit" name="suite" class="btn btn-default">Suite souscription</button>
      <button type="reset" name="annuler" class="btn btn-default">Annuler</button></br>
      </div>
    </form>  
    </div>
    </div><br><br>
    <!-- <?php  
          if($Erreur)
          {
            ?>
            <div class="alert alert-warning">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center>
                  <?php echo $Erreur; ?>
                </center> 
            </div> 
            <?php
              if($Notif)
            {
              ?>
              <div class="alert alert-warning">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center>
                  <?php echo $Notif; ?>
                </center> 
            </div>
             <?php
          }
        }
      ?> -->
</div>

<!-- //***************************************// -->
<?php
  include("Template_Footer.html");
?>
<!-- //***************************************// -->