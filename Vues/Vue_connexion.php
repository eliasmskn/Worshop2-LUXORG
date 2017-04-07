
<!-- **************************************** -->
<!-- **************************************** -->
<?php
  include("Template_header_Connexion.html");
?>
<!-- **************************************** -->
<!-- **************************************** -->


<div id= "accueil1" class="jumbotron text-center">
  <br>
  <h1>Espace connexion</h1> 
 </div> 

 <div class="container-fluide" id="connexion">
   <div class = "row " >
   <br><br>
   <div class="col-sm-4">
        <span class="glyphicon glyphicon-user logo slideanim"></span>
      </div>
    <div class="col-sm-8">
        <form role="form" method="post" action="Controleur_Connexion.php">
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="mail" name="email"class="form-control" id="email" placeholder="Enter votre email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div><br>
          <div class="form-group">
            <label for="pwd">Mot de passe :</label>
            <input type="password" name="mdp" class="form-control" id="pwd" placeholder="Enter votre Mot de passe">
          </div><br>
          <div class="checkbox">
            <label><input type="checkbox"> Se souvenir de moi</label>
          </div><br>
          <button type="submit" name="connexion" class="btn btn-default">Connexion</button>
          <button type="reset" name="annuler" class="btn btn-default">Annuler</button>
          <br><br>
        </form>    
    </div>
    </div><br><br>
    <?php  
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
      ?>
</div>

<!-- //***************************************// -->
<?php
  include("Template_Footer.html");
?>
<!-- //***************************************// -->