<?php
class Candidat
{
	protected $id_utilisateur;
	protected $nom_utilisateur; 
	protected $prenom_utilisateur;
	protected $adresse_utilisateur;
	protected $cp_utilisateur;
	protected $telephone_utilisateur;
	protected $mail_utilisateur;   
	protected $mdp_utilisateur;

	public function __construct()
	{	
		$this->id_utilisateur = 0;	
		$this->nom_utilisateur = "";
		$this->prenom_utilisateur = "";
		$this->adresse_utilisateur = "";
		$this->cp_utilisateur = 0;
		$this->telephone_utilisateur = "";
		$this->mail_utilisateur = "";
		$this->mdp_utilisateur = "";
	}

	public function renseigner($tab)
	{	

		$this->id_utilisateur = $tab['id_utilisateur'];
		$this->nom_utilisateur = $tab['nom_utilisateur'];
		$this->prenom_utilisateur = $tab['prenom_utilisateur'];
		$this->adresse_utilisateur = $tab['adresse_utilisateur'];
		$this->cp_utilisateur = $tab['cp_utilisateur'];
		$this->telephone_utilisateur = $tab['telephone_utilisateur'];
		$this->mail_utilisateur = $tab['mail_utilisateur'];
		$this->mdp_utilisateur = $tab['mdp_utilisateur'];
	}
	
	public function serialiser()
	{	
		$tab['id_utilisateur'] = $this->id_utilisateur;	
		$tab['nom_utilisateur'] = $this->nom_utilisateur;
		$tab['prenom_utilisateur'] = $this->prenom_utilisateur;
		$tab['adresse_utilisateur'] = $this->adresse_utilisateur;
		$tab['cp_utilisateur'] = $this->cp_utilisateur;
		$tab['telephone_utilisateur'] = $this->telephone_utilisateur;
		$tab['mail_utilisateur'] = $this->mail_utilisateur;
		$tab['mdp_utilisateur'] = $this->mdp_utilisateur;
			
		return $tab;
	}

	public function afficher()
	{
		return "<td>".$this->id_utilisateur."</td>
				.<td>".$this->nom_utilisateur."</td>
				.<td>".$this->prenom_utilisateur."</td>
				.<td>".$this->adresse_utilisateur."</td>
				.<td>".$this->cp_utilisateur."</td>
				.<td>".$this->telephone_utilisateur."</td>
				.<td>".$this->mail_utilisateur."</td>
				.<td>".$this->mdp_utilisateur."</td>";		
	}

	public function lister(){
			$tab = $this->serialiser();
			$chaine="";
			foreach ($tab as $cle => $valeur) {
				$chaine .= "<br/>".$cle." : ".$valeur;
			}
			return $chaine;
		}
	
	public function getid_utilisateur()
	{
		return $this->id_utilisateur;
	}

	public function setid_utilisateur($id_utilisateur)
	{
		$this->id_utilisateur = $id_utilisateur;
	}

	public function getnom_utilisateur()
	{
		return $this->nom_utilisateur;
	}

	public function setnom_utilisateur($nom_utilisateur)
	{
		$this->nom_utilisateur = $nom_utilisateur;
	}

	public function getprenom_utilisateur()
	{
		return $this->prenom_utilisateur;
	}

	public function setprenom_utilisateur($prenom_utilisateur)
	{
		$this->prenom_utilisateur = $prenom_utilisateur;
	}

	public function getadresse_utilisateur()
	{
		return $this->adresse_utilisateur;
	}

	public function setadresse_utilisateur($adresse_utilisateur)
	{
		$this->adresse_utilisateur = $adresse_utilisateur;
	}

	public function getcp_utilisateur()
	{
		return $this->cp_utilisateur;
	}

	public function setcp_utilisateur($cp_utilisateur)
	{
		$this->cp_utilisateur = $cp_utilisateur;
	}

	public function gettelephone_utilisateur()
	{
		return $this->telephone_utilisateur;
	}

	public function settelephone_utilisateur($telephone_utilisateur)
	{
		$this->telephone_utilisateur = $telephone_utilisateur;
	}

	public function getmail_utilisateur()
	{
		return $this->mail_utilisateur;
	}

	public function setmail_utilisateur($mail_utilisateur)
	{
		$this->mail_utilisateur = $mail_utilisateur;
	}

	public function getmdp_utilisateur()
	{
		return $this->mdp_utilisateur;
	}

	public function setmdp_utilisateur($mdp_utilisateur)
	{
		$this->mdp_utilisateur = $mdp_utilisateur;
	}

}