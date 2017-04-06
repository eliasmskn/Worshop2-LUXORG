<?php
session_start();
include ("../Models/Modele.php");
include ("../Models/Modele_extend.php");
include ('Controleurs_Class/Controleur_Class_Utilisateur.php');


$unModel = new Modele("localhost", "Luxorg", "root", "");

$Erreur = null;
$Notif = null;
	if(isset($_POST['connexion']))
		{	
			$mail = $_POST['email'];		
			$mdp = $_POST['mdp'];

			$unModel->renseigner("utilisateur","id_utilisateur");
			$resultat = $unModel->selectwhereconnexion($mail, $mdp);	
			var_dump($resultat);		
			if($resultat["nb"] == "1")
			{
				foreach ($resultat as $key => $value)
				{
					if($value == 1)
					{
						$Notif = "je marche";
						/*$_SESSION['mail'] = $mail;*/
						setcookie("mail",$_POST["email"]);
						header('Location: Controleur_espace_perso.php');	
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