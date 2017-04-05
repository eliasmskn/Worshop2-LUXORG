<?php
class Utilisateur
{
	protected $id_utilisateur;
	protected $nom; 
	protected $prenom;
	protected $adresse;
	protected $code_postal;
	protected $telephone;
	protected $mail;   
	protected $mdp;

	public function __construct()
	{	
		$this->id_utilisateur = 0;	
		$this->nom = "";
		$this->prenom = "";
		$this->adresse = "";
		$this->code_postal = 0;
		$this->telephone = 0;
		$this->mail = "";
		$this->mdp = "";
	}

	public function renseigner($tab)
	{	
		
		$this->id_utilisateur = $tab['id_utilisateur'];
		$this->nom = $tab['nom'];
		$this->prenom = $tab['prenom'];
		$this->adresse = $tab['adresse'];
		$this->code_postal = $tab['code_postal'];
		$this->telephone = $tab['telephone'];
		$this->mail = $tab['mail'];
		$this->mdp = $tab['mdp'];
	}
	
	public function serialiser()
	{	
		$tab['id_utilisateur'] = $this->id_utilisateur;	
		$tab['nom'] = $this->nom;
		$tab['prenom'] = $this->prenom;
		$tab['adresse'] = $this->adresse;
		$tab['code_postal'] = $this->code_postal;
		$tab['telephone'] = $this->telephone;
		$tab['mail'] = $this->mail;
		$tab['mdp'] = $this->mdp;
			
		return $tab;
	}

	public function afficher()
	{
		return "<td>".$this->id_utilisateur."</td>
				.<td>".$this->nom."</td>
				.<td>".$this->prenom."</td>
				.<td>".$this->adresse."</td>
				.<td>".$this->code_postal."</td>
				.<td>".$this->telephone."</td>
				.<td>".$this->mail."</td>
				.<td>".$this->mdp."</td>";		
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

	public function getnom()
	{
		return $this->nom;
	}

	public function setnom($nom)
	{
		$this->nom = $nom;
	}

	public function getprenom()
	{
		return $this->prenom;
	}

	public function setprenom($prenom)
	{
		$this->prenom = $prenom;
	}

	public function getadresse()
	{
		return $this->adresse;
	}

	public function setadresse($adresse)
	{
		$this->adresse = $adresse;
	}

	public function getcode_postal()
	{
		return $this->code_postal;
	}

	public function setcode_postal($code_postal)
	{
		$this->code_postal = $code_postal;
	}

	public function gettelephone()
	{
		return $this->telephone;
	}

	public function settelephone($telephone)
	{
		$this->telephone = $telephone;
	}

	public function getmail()
	{
		return $this->mail;
	}

	public function setmail($mail)
	{
		$this->mail = $mail;
	}

	public function getmdp()
	{
		return $this->mdp;
	}

	public function setmdp($mdp)
	{
		$this->mdp = $mdp;
	}

}