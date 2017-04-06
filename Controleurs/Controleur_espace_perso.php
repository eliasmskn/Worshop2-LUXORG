<?php
	include ("../Models/Modele.php");
	include ("../Models/Modele_extend.php");
	include ('Controleurs_Class/Controleur_Class_Utilisateur.php');
	include ('Controleurs_Class/Controleur_Class_tache.php');
	include ('Controleurs_Class/Controleur_Class_Objet_Connectes.php');
	include ('Controleurs_Class/Controleur_Class_Alarme.php');

			
	/*$unModele->renseigner("taches", "id_Tache");
			$listeTaches = $unModele->selectwhere();*/
			$chainetaches = "<table class='table table-striped'>
			<tr><td>Ordre de priorité </td><td> Libelle tache </td><td> Durée tache </td><td>Actions</td></tr>";				
			/*foreach ($listeTaches as $key => $value) 
			{				
				
				$uneViewDemandeClient->renseigner($value);

				if($uneViewDemandeClient->getetat() == "disponible")
				{
					$style ="style='color: blue'" ;
				}
				else if ($uneViewDemandeClient->getetat() == "occupé")
				{
					$style ="style='color: red'";
				}
				else if ($uneViewDemandeClient->getetat() == "validé")
				{
					$style ="style='color: green'";
				}
				else if ($uneViewDemandeClient->getetat() == "annulé")
				{
					$style ="style='color: darkorange'";
				}
				else 
				{
					$style ="";
				}*/

				/*$chaineLeçon .= "<tr ".$style.">".$uneViewDemandeClient->afficherTache();*/
				$chainetaches .=	"<tr><td>"
					// ."<a href='Controleur_espace_admin.php?action=4&id=".$uneViewDemandeClient->getid_demande()."' data-toggle='tooltip' data-placement='bottom' title='Vérifier Disponibilité '><span class='glyphicon glyphicon-check'></span>"
					// ."<a href='Controleur_espace_admin.php?action=5&id=".$uneViewDemandeClient->getid_demande()."' data-toggle='tooltip' data-placement='bottom' title='Valider '><span class='glyphicon glyphicon-ok'></span>"
					// ."<a href='Controleur_espace_admin.php?action=6&id="/*.$uneViewDemandeClient->getid_demande().*/"' data-toggle='tooltip' data-placement='bottom' title='Annuler '><span class='glyphicon glyphicon-remove'></span>"
					// ."<a href='Controleur_espace_admin.php?action=7&id="/*.$uneViewDemandeClient->getid_demande().*/"'><span class='glyphicon glyphicon-save' data-toggle='tooltip' data-placement='bottom' title='Archiver '></span>"
					// ."<a href='Controleur_espace_admin.php?action=8&id="/*.$uneViewDemandeClient->getid_demande().*/"' data-toggle='tooltip' data-placement='bottom' title='Affectation planning '><span class='glyphicon glyphicon-share-alt'></span>"
					."</td></tr>";
			// }	
			$chainetaches .= "</table>";

	
	

	$mail = $_COOKIE["mail"];
	$_SESSION["mail"] =$mail ;

	include("../Vues/Vue_espace_perso.php");
?>