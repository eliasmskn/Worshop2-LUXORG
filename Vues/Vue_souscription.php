
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
  <center><h2>Formulaire 1/2</h2></center>
   <div class = "row " >
   <br><br>
   <div class="col-sm-1">
      </div>
   <div class="col-sm-2">
        <span class="glyphicon glyphicon-pencil logo slideanim"></span>
      </div>
    <div class="col-sm-9">
        <form class="form-horizontal"  role="form" method="post" action="Controleur_Souscription.php">
    <div class="col-sm-2">
    </div>
         
    <div class="form-group">
      <input type="hidden" name="id_utilisateur"class="form-control" id="id_utilisateur">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom">Nom :</label>
     <div class="col-sm-4">
      <input pattern="[A-Za-z]{2,20}" type="text" name="nom"class="form-control" id="nom" placeholder="Entrez votre nom" required>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom">Prenom :</label>
      <div class="col-sm-4">
       <input pattern="[A-Za-z]{2,20}" type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrez votre Prenom" required>
      </div>
      </div>
      <div class="col-sm-2">
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="adresse">Adresse :</label>
         <div class="col-sm-4">
          <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Enter votre adresse" required>
        </div>
      </div>
      <div class="col-sm-2">
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="code_postal">Code postal :</label>
         <div class="col-sm-4">
           <input pattern="[0-9]{5}" type="text" name="code_postal" class="form-control" id="code_postal" placeholder="Entrer votre code postal" required></div>       
         </div>
      <div class="col-sm-2">
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="telephone">N° Telephone :</label>
           <div class="col-sm-4">
            <input pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" type="tel"    name="telephone" class="form-control" id="telephone" placeholder="Entrer votre N° tel" required>
      </div></div>
      <div class="col-sm-2">
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="mail">Adresse Mail :</label>
          <div class="col-sm-4">
            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="mail" name="mail" class="form-control" id="mail" placeholder="Enter votre mail" required>
      </div></div>

      <div class="col-sm-2">
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
          <div class="col-sm-4">
           <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Enter votre mot de passe" required>
          </div>
      </div>

        <div class="col-sm-5">
      </div>
      <button type="submit" name="suivant" class="btn btn-default">Suivant</button>
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