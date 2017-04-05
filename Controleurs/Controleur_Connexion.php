<?php
session_start();
include ("../Models/Modele.php");
include ("../Models/Modele_extend.php");
include ('Controleurs_Class/Controleur_Class_Utilisateur.php');

$unModel = new Modele("localhost", "LuxOrg", "root", "");
$Erreur = null;
$Notif = null;
	if(isset($_POST['connexion']))
		{	
			$mail = $_POST['email'];		
			$mdp = $_POST['mdp'];

			$unModel->renseigner("utilisateur","id_utilisateur");
			$resultat = $unModel->selectwhereconnexion($mail, $mdp);			
			if($resultat["nb"] == "1")
			{
				foreach ($resultat as $key => $value)
				{
					if($value == 1)
					{
						$Notif = "je marche";
						$_SESSION['mail'] = $mail;
						header('Location: Controleur_index.php');	
					}							
				}	
			}	
			else
			{
				$Erreur = "Erreur Vérifier vos identifiants !!<br/>";
			}
		}				
					
	include ('../Vues/Vue_connexion.php');
?>