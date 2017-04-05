<?php
	include ("../Models/Modele.php");
	include ("../Models/Modele_extend.php");
	include ('Controleurs_Class/Controleur_Class_Utilisateur.php');
	include ('Controleurs_Class/Controleur_Class_tache.php');

	$unModel = new Modele("localhost", "LuxOrg", "root", "");
	$Erreur = null;
	$Notif = null;
	$id = $_COOKIE["id_utilisateur"];
	$id_u = $id["id_utilisateur"];

			if(isset($_POST['suite']))
			{	
				$unModel->renseigner("Objet_Connectes","id_obj");												
				$unObj = new Objet_Connectes(); 					
				$unObj->renseigner($_POST);
				$tab = $unObj->serialiser();
				$tab["id_user"] = $id_u;
				$unModel->insert($tab);
				header('Location: Controleur_souscription_3.php');
			}		

			if(isset($_POST['suivant']))
			{	
				$unModel->renseigner("Objet_Connectes","id_obj");												
				$unObj = new Objet_Connectes(); 					
				$unObj->renseigner($_POST);
				$tab = $unObj->serialiser();
				$tab["id_user"] = $id_u;
				$unModel->insert($tab);
				header('Location: Controleur_souscription_2.php');
			}				

	

	include("../Vues/Vue_souscription_2.php");
?>