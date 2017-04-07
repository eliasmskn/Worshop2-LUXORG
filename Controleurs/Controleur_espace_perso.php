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



			$alarme ="  <center><h1>LuxOrg Timer</h1></center>
						<button onclick='start()'>Lancer l' Alarme</button>
						<div class='row2'>
							<div class='col-sss-3'>
								<div id='bip' class='display'>00:00:00</div>
						    		<div id='précedente'>    
						    			<h3><div class='tacheprecedente'>La dernière tâche: <span class='value'>Aucune</span>	 </div>
						        		</h3>
						    		</div>
						        	<h3>
						        		<div class='content'>Execution de la prochaine tâche dans : <span class='value'></span>secondes</div>
						        	</h3>
						    	<div class='tachesuivante'>Nom de la  tâche: <span class='value'>Aucune</span></div>

								</div>
							</div>
						</div>";

	
			

		include("../Vues/Vue_espace_perso.php");
?>