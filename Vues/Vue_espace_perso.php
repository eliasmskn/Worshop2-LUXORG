
<!-- **************************************** -->
<?php
  include("Template_header.html");
?>
<!-- **************************************** -->


<div id="about" class="jumbotron text-center">
  <h1>Espace Client</h1> 
  <p>Bonjour <?php echo $_SESSION['mail'];?></p> 
</div>


   


<div id="alarme" class="container-fluid text-center">
  <h2> Alarme </h2></br>
    <div class="panel-group">
       <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-list"></span> Mes Alarmes </a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <!-- <?php echo $ChaineAlarme;?> -->
          </div>
        </div> 
    </div>
</div>

<div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse5"><span class="glyphicon glyphicon-plus"></span>  Ajout d'un candidat</a>
          </h4>
        </div>
        
        <div id="collapse5" class="panel-collapse collapse">
          <div class="row">
            <form class="form-horizontal"  role="form" method="post" action="Controleur_espace_admin.php">
              <div class="col-sm-2">
         </div>
          <div class="form-group">
               <input type="hidden" name="numclient"class="form-control" id="numcandidat">
            </div>
            <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="nom">Nom :</label>
            <div class="col-sm-4">
            <input pattern="[A-Za-z]{2,20}" type="text" name="nomclient"class="form-control" id="nomcandidat" placeholder="Nom du candidat" required>
            </div>
          </div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="prenom">Prenom :</label>
            <div class="col-sm-4">
            <input pattern="[A-Za-z]{2,20}" type="text" name="prenomclient" class="form-control" id="prenom" placeholder="Prenom du candidat" required>
            </div>
          </div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="adresse">Adresse :</label>
            <div class="col-sm-4">
            <input type="text" name="adresseclient" class="form-control" id="adresse" placeholder="Enter l'adresse du candidat" required>
            </div>
          </div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="datedenaissanceclient">Date de naissance :</label>
            <div class="col-sm-4">
            <input pattern="(0[1-9]|[12][0-9]|3[01])[\/](0[1-9]|1[012])[\/](19|20)\d\d" type="date" name="datedenaissanceclient" class="form-control" id="datedenaissanceclient" placeholder="Enter la date de naissance du candidat" required></div>       
          </div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="telephoneclient">N° Telephone :</label>
            <div class="col-sm-4">
            <input pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" type="tel"    name="telephoneclient" class="form-control" id="telephoneclient" placeholder="Entrer le N° tel du candidat" required>
          </div></div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="mailclient">Adresse Mail :</label>
            <div class="col-sm-4">
            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="mail" name="mailclient" class="form-control" id="mailclient" placeholder="Enter le mail du candidat" required>
          </div></div>

          <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="mdp">Mot de passe :</label>
            <div class="col-sm-4">
            <input type="text" name="mdpcandiat" class="form-control" id="mdp" placeholder="Enter le mot de passe du candidat" required>
            </div>
          </div>

           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="dateinscriptionclient"</label>
            <div class="col-sm-4">
            <input type="hidden" name="dateinscriptionclient" class="form-control" id="dateinscriptionclient" required>
          </div></div>
           <div class="col-sm-2">
         </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="sel1">Mode de facturation :</label>
            <div class="col-sm-4">
            <select class="form-control" name="modefacturation" id="modefacturation" required>
           <option value="cb"> Carte bancaire</option>
           <option value="esp"> Espèce</option>
           <option value="chq" selected> Chèque</option>
            </select>
        </div></div>
         <div class="col-sm-2">
         </div>
          <div class="form-group">
          <label class="control-label col-sm-2" for="typecandidat"> Type du candidat:</label>
          <div class="col-sm-4">
          <select class="form-control" id="typecandidat" name="typecandidat" required>
            <option value="etudiant"> Etudiant</option>
          <option value="salarier"> Salarier</option>         
          </select>
        </div></div>
         <div class="col-sm-2">
         </div></br>  
          <button type="submit" name="inserer" class="btn btn-default">Inserer</button>
          <button type="reset" name="annuler" class="btn btn-default">Annuler</button></br>
        </form>
      </div>  

          </div>
        </div>
      </div>


<div id="tache" class="container-fluid text-center bg-grey">
  <h2>Ajout de tâches</h2></br>
    <div class="panel-group">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2"><span class="glyphicon glyphicon-calendar"></span> Formulaire d'ajout des tâches</a>
            </h4>
          </div>
        
          <div id="collapse2" class="panel-collapse collapse">

            <form role="'form'" method="'post'" action="'Controleur_espace_perso.php'">
              <div class="form-group">
                <input type="hidden" name="id_Tache"class="form-control" id="id_Tache">
              </div>

              <div class="'form-group'">
                <label for="'email'">Tache :</label>
                <input type="'text'" name="'libelle'"class="'form-control'" id="'libelle'" placeholder="'Enter le libelle de votre tache'">
              </div><br>

              <div class="'form-group'">
                <label for="'pwd'">Durée :</label>
                <input type="'time'" name="'duree'" class="'form-control'" id="'duree'">
              </div><br>

              <div class="'form-group'">
                <label for="'pwd'">Ordre priorité :</label>
                <select class="'form-control'" id="'numero_tache'" name="'numero_tache'">
                  <option>Première</option>
                  <option> entre deux </option>
                  <option>Dérnière</option>
                </select>
              </div></br>

              <button type="'submit'" name="'connexion'" class="'btn btn-default'">Connexion</button>
              <button type="'reset'" name="'annuler'" class="'btn btn-default'">Annuler</button>
              <br><br>
            </form>
            <br><br>
          </div>
      </div>
    </div>
</div>   


<div id="planning" class="container-fluid text-center ">
  <h2>Planification des tâches</h2></br>
     <div class="panel-group">
      <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse3"><span class="glyphicon glyphicon-list"></span> Mes taches</a>
            </h4>
          </div>
        
          <div id="collapse3" class="panel-collapse collapse">

            <?php echo $chainetaches; ?>

          </div>
        </div>
    </div>
</div>   

      <!-- <?php  
          if($info)
          {
            if($etat == 1)
            {
              ?><div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                    <?php echo $info; ?>
                  </center> 
              </div> <?php
            }
            else if($etat == 0)
            {
              ?><div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                    <?php echo $info; ?>
                  </center> 
              </div> <?php
            }  
          }
      ?> -->
<!-- //***************************************// -->
<?php
  include("Template_Footer.html");
?>
<!-- //***************************************// -->














