<?php

	include ("../Models/Modele.php");
	include ("../Models/Modele_extend.php");
	include ('Controleurs_Class/Controleur_Class_Utilisateur.php');
	include ('Controleurs_Class/Controleur_Class_tache.php');
	include ('Controleurs_Class/Controleur_Class_Objet_Connectes.php');
	include ('Controleurs_Class/Controleur_Class_Alarme.php');

	$unModel = new Modele("localhost", "LuxOrg", "root", "");
	$uneTache = new Tache();

	$mail = $_COOKIE["mail"];
	$_SESSION['mail'] = $mail;
	$id_u = $unModel->selectwheremail($mail);
	$id_user = $id_u["id_utilisateur"];


			if(isset($_GET['deconnexion']) &&$_GET['deconnexion'] == 1)
			{
				session_destroy();
				header('Location: Controleur_index.php');
			}

			if(isset($_POST['Ajouter']))
			{
				$unModel->renseigner("Tache","id_Tache");												
				$uneTache = new Tache();	
				$_POST["id_objet"] = 1;
				$_POST["id_user"] = $id_user;	

				$tab = array(
						      'id_Tache' => $_POST["id_Tache"], 
						      'id_user' => $id_user, 
						      'id_objet' => $_POST["id_objet"], 
						      'numero_tache' => $_POST["numero_tache"],
						      'duree' => $_POST["duree"],
						      'libelle' => $_POST["libelle"]
						  );	

				$uneTache->renseigner($tab);	
				$res = $uneTache->serialiser();
				$unModel->insert($res);
				header('Location: Controleur_espace_perso.php');

			}	


			if(isset($_GET['action']))
			{
				$action = $_GET['action'];
				$id = $_GET['id'];
	
				switch ($action) 
				{	
			/******************************Suppression tache*************************************/				
					case 1:						
						$tab1 = $unModel->selectwhere($id);												
						$uneTache->renseigner($tab1);
						$tab2 = $uneTache->serialiser();

						$unModel->renseigner("Tache","id_Tache");
						$unModel->delete($id);

						$notifsupp = "La tache a été supprimée avec succès !!";

						break;
			/***********************************************************************************/

			/******************************Modification tache************************************/
					case 2:						
						$unResultat = $unModele->selectwhere($id);						
						$uneTache->renseigner($unResultat);
						$modif ="<h2>Modidfication de tache</h2></br>
								<form class='form-horizontal' role='form' method='post' action='Controleur_espace_admin.php'>
								<div class='col-sm-2'>
									</div>		
									<div class='form-group'>
							      <div class='col-sm-4'>
							      <input type='hidden' name='id_Tache' class='form-control' id='id_Tache' value='".$uneTache->getIdtache()."'>
							    </div></div>
							    <div class='col-sm-2'>
									</div>										
							    <div class='form-group'>
							      <div class='col-sm-4'>
							      <input type='hidden' name='id_user' class='form-control' id='id_user' value='".$uneTache->getIdUser()."'>
							    </div></div>
							    <div class='col-sm-2'>
									</div>								
							    <div class='form-group'>
							      <div class='col-sm-4'>
							      <input type='hidden' name='id_objet' class='form-control' id='id_objet' value='".$uneTache->getIdObjet()."'>
							    </div></div>
							    <div class='col-sm-2'>
									</div>								
							    <div class='form-group'>
							      <label class='control-label col-sm-2' for='adresse'>Ordre priorité :</label>
							      <div class='col-sm-4'>
							      <select class='form-control' id='numero_tache'name='numero_tache' value='".$uneTache->getNumeroTache()."'>
							        <option>Première</option>
					                 <option> entre deux </option>
					                 <option>Dérnière</option>
							      </select>
							    </div></div>
							    <div class='col-sm-2'>
									</div>								
							    <div class='form-group'>
							      <label class='control-label col-sm-2' for='duree'>Durée :</label>
							      <div class='col-sm-4'>
							      <input type='time' name='duree' class='form-control' id='duree' value='".$uneTache->getDuree()."'>
							    </div></div>
							    <div class='col-sm-2'>
									</div>								
							    <div class='form-group'>
							      <label class='control-label col-sm-2' for='libelle'> Tache :</label>
							      <div class='col-sm-4'>
							      <input type='text' name='libelle' class='form-control' id='libelle' value='".$uneTache->getLibelle()."'>
							    </div></div>
							    <div class='col-sm-2'>
									</div>								
							    
							    <button type='submit' name='modifier' class='btn btn-default'>Modifier</button>
							    <button type='reset' name='annuler' class='btn btn-default'>Annuler</button>
							  </form>";
					
						break;	
			/***********************************************************************************/

					/*case 3:						
						$tab1 = $unModele->selectwhere($id);												
						$unCandidat->renseigner($tab1);
						$tab2 = $unCandidat->serialiser();

						$unModele->renseigner("archivecandidat","numcandidat");
						$unModele->insert($tab2);

						$unModele->renseigner("candidat","numclient");
						$unModele->delete($id);

						$notifsupp = "Le candidat a été supprimé avec succès !!";

						break;*/
				}
			}

			$unModel->renseigner("tache", "id_Tache");
			$listeTaches = $unModel->selectwhereTache($id_user);
			$chainetaches = "<table class='table table-striped'>
			<tr><td>Id_tache</td><td>Id_user</td><td>id_objet</td><td>Ordre de priorité </td><td> Libelle tache </td><td> Durée tache </td><td>Actions</td></tr>";	

			foreach ($listeTaches as $key => $value) 
			{				
				
				$uneTache->renseigner($value);


				$chainetaches .= "<tr>".$uneTache->afficher();
				$chainetaches .= "<td>"
					."<a href='Controleur_espace_perso.php?action=1&id=".$uneTache->getIdtache()."' data-toggle='tooltip' data-placement='bottom' title='Vérifier Disponibilité '><span class='glyphicon glyphicon-check'></span>"
					."<a href='Controleur_espace_perso.php?action=2&id=".$uneTache->getIdUser()."' data-toggle='tooltip' data-placement='bottom' title='Valider '><span class='glyphicon glyphicon-ok'></span>"
					/*."<a href='Controleur_espace_perso.php?action=3id=".$uneTache->getIdtache()."' data-toggle='tooltip' data-placement='bottom' title='Annuler '><span class='glyphicon glyphicon-remove'></span>"
					."<a href='Controleur_espace_perso.php?action=7&id=".$uneTache->getIdtache()."'><span class='glyphicon glyphicon-save' data-toggle='tooltip' data-placement='bottom' title='Archiver '></span>"
					."<a href='Controleur_espace_perso.php?action=8&id=".$uneTache->getIdtache()."' data-toggle='tooltip' data-placement='bottom' title='Affectation planning '><span class='glyphicon glyphicon-share-alt'></span>"*/
					."</td></tr>";
			 }	
			$chainetaches .= "</table>";



			$alarme ="  <div class='container-fluid'>
						<center><h1>LuxOrg Timer</h1></center>
						<button onclick='start()'>Lancer l' Alarme</button>
						<div class='row2'>
							<div class='col-sss-3'>
								<div id='bip' class='display'>00:00:00</div>
							</div>
						</div>";

			$alarme .="	<div class='row3'>
							<div class='col-sm-3'></div>
								<div class='col-sm-6'>
									<div id='précedente'>    
								    			<h3><div class='tacheprecedente'>Tâche Précedente: <span class='value'>Aucune</span>	 </div>
								        		</h3>
								    		</div>
								        	</h3>
								        	<h3>
								        		<div class='content'>Prochaine Execution dans : <span class='value'></span>s</div><br>
								        	</h3>
								    <div class='tachesuivante'>Prochaine Tâche: <span class='value'>Aucune</span></div>
							    </div>
							</div>
							<div class='col-sm-3'></div>
						</div>
						</div>";

		
			

		include("../Vues/Vue_espace_perso.php");
?>


<script>
    var k=0;
    var counter = 0;
    var intervalId = null;
    var items = [
        ["cafe", 3],

        ["Alarme", 5],
         ["Stores", 10],
         ["Rideaux", 15],
         ["Café", 20],
         ["Voiture", 25],

    ];

        	
               $(".content .value").html(items[0][1]);
               $(".tachesuivante .value").html(items[0][0]);
        	

    for (var i = 0; i < items.length; i++) {
        var dureetime = items[i][1];
        var libelle = items[i][0];

    }
    function action()
    {

    }
    function dateHMS(time) {
        var addZero = function(v) { return v<10 ? '0' + v : v; };
        var d = new Date(time * 1000); // js fonctionne en milisecondes
        var t = [];
        t.push(addZero(d.getHours())-1);
        t.push(addZero(d.getMinutes()));
        t.push(addZero(d.getSeconds()));
        return t.join(':');
    }
    function bip()
    {


        for (var i = 0; i < items.length; i++) {
        

            var dureetime = items[i][1];
            var libelle = items[i][0];
            $("#bip").html(dateHMS(counter));
           if(counter==dureetime)
           {
               console.log(libelle);
               var j=i+1;

               var calc=items[j][1]-items[i][1];

               $(".content .value").html(calc);
               $(".tacheprecedente .value").html(items[i][0]);
               $(".tachesuivante .value").html(items[j][0]);
               alert(libelle);
           }
        }

        counter++;
        console.log(counter);

    }
    function start()
    {
        intervalId = setInterval(bip, 1000);
        setTimeout(action, counter * 1000);

    }
</script>
<style>
    #bip{
        background-color:#656363;
        color: white;
        display:inline;
        font-size:9em;
        padding:10px;
        border: 3px solid #696969;
    }
    #précedente
    {

        float: right;
    }
</style>