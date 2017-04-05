<?php
	include ("../Models/Modele.php");
	include ("../Models/Modele_extend.php");
	include ('Controleurs_Class/Controleur_Class_Utilisateur.php');

	$unModel = new Modele("localhost", "LuxOrg", "root", "");
	$Erreur = null;
	$Notif = null;


		if(isset($_POST['suivant']))
			{	
				$unModel->renseigner("Utilisateur","id_utilisateur");												
				$unUser = new Utilisateur(); 					
				$unUser->renseigner($_POST);
				$tab = $unUser->serialiser();
				$unModel->insert($tab);
			}				
		include ('../Vues/Vue_souscription.php');



	
?>