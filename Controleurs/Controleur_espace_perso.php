<?php
	include ("../Models/Modele.php");
	include ("../Models/Modele_extend.php");
	include ('Controleurs_Class/Controleur_Class_Utilisateur.php');
	include ('Controleurs_Class/Controleur_Class_tache.php');
	include ('Controleurs_Class/Controleur_Class_Objet_Connectes.php');
	include ('Controleurs_Class/Controleur_Class_Alarme.php');

	
	

	$mail = $_COOKIE["mail"];
	$_SESSION["mail"] =$mail ;

	include("../Vues/Vue_espace_perso.php");
?>