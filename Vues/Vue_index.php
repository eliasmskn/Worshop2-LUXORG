
<!-- **************************************** -->
<?php
  include("Template_header.html");
?>
<!-- **************************************** -->


<div id= "accueil" class="jumbotron text-center">
<br>
  <h1>LUXORG</h1> 
  <p>L'organisation de luxe, pour votre bien etre quotidien !! </p> <br>  
</div>

<div id="about" class="container-fluid">
  <div class="row">
    
     <center> <h1>A PROPOS DE LUXORG</h1><br></center>
      <h4>Castellane-auto est présente sur le marché de l’apprentissage de la conduite auto, moto depuis 1986 et connue en sa qualité d’être l’une des auto-écoles les plus préstigieuse en France.
Nos apprentissages s’appuient sur le programme de formation, REMC , (matrice GDE) qui intègre les aspects comportementaux dans la pédagogie de l’enseignement de la conduite et de la sécurité routière.
Disposant de technologies de pointe (simulateur de conduite, boitier digi-quiz …) et des dernières gammes de véhicules Peugeot, Renault, Ford et Yamaha, nous proposons aux particuliers comme aux entreprises l’acquisition d’une expérience personnelle et réfléchie de la conduite.
Nos équipes pédagogiques compétentes et sympathiques mettront tout en œuvre pour satisfaire vos obligations, vous aider à préparer vos projets et conduire un véhicule de façon autonome et apaisé.</h4><br>
  </div>
</div>

<div id="services" class="container-fluid bg-grey text-center">
  <h1>NOS SERVICES</h1>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
     <span class="glyphicon glyphicon-ok logo-small"></span>
      <h4></h4>
      <p>Fiabilité assurée</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4></h4>
      <p>Reconnue et certifiée</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-eur logo-small"></span>
      <h4></h4>
      <p>Tarifs abordable / plusieurs moyens de paiement</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo-small"></span>
      <h4></h4>
      <p>Efficacité assurée</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-time logo-small"></span>
      <h4></h4>
      <p>Gain de temps important</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;"></h4>
      <p>Assistance aux utilisateurs</p>
    </div>
  </div>
</div>

<div id="pricing" class="container-fluid text-center">
  <h1>Nos Tarifs</h1>
    <h4>Choisissez un plan de paiement qui vous convient.</h4>
  </div>

  <div class="col-sm-2 col-xs-6">
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Mensuel</h1>
        </div>
        <div class="panel-body">
          <p><strong class="badge">10</strong> Objets connectés</p>
          <p><strong class="badge">2</strong> Alarmes différentes / semaine</p>
          <p><strong class="badge">5</strong> taches / jour</p>
          <p><strong class="badge">1</strong> ordre d'éxecution </p>
          <p><strong class="badge">Assistance</strong> par télephone / en fonction de la demande </p>
        </div>
        <div class="panel-footer">
          <h3>1,90€ / mois</h3>
          
          <button class="btn btn-lg" onclick="window.location.href='Controleur_souscription.php ';">Souscrire</button>
        </div>
      </div>      
    </div>     
    
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>A Vie</h1>
        </div>
        <div class="panel-body">
        </br>
        </br>
          <p>Tous les services en <strong class="badge"> illimité</strong></p>
          <p><strong class="badge">Assistance</strong> priorisé par Télephone / Chat / Domicile </p>
          </br>
          </br>
        </div>
        <div class="panel-footer">
          <h3>299€</h3>
          
          <button class="btn btn-lg" onclick="window.location.href='Controleur_souscription.php ';">Souscrire</button>
        </div>
      </div>      
    </div>   
<div class="col-sm-2 col-xs-6">
  </div>

</div>

<div id="contact" class="container-fluid bg-grey">
  <h1 class="text-center">CONTACT</h1></br>
  <div class="row">
    <div class="col-sm-5">
      <p>Contacter nous, et nous reviendrons vers vous sous 24h.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Toulon, France</p>
      <p><span class="glyphicon glyphicon-phone"></span> 0142659324</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contact.luxorg@gmail.com</p>     
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      <form role="form" method="post" action="../Controleurs/Controleur_accueil.php">
      <input class="form-control" id="idcomm" name="id_comm" type="hidden">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="nom" placeholder="Nom" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Votre message" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" name="envoyer" value="Envoyer" type="submit">
        </div>
        </form>
      </div>  

    </div>
  </div>
</div>


<!-- //***************************************// -->
<?php
  include("Template_Footer.html");
?>
<!-- //***************************************// -->