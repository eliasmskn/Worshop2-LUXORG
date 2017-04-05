<?php
class Commentaire
{
	protected $id_commentaire;
	protected $nom;
	protected $email;
	protected $commentaire;

	public function __construct()
	{	
		$this->id_commentaire = 0;
		$this->nom = "";
		$this->email = "";
		$this->commentaire = "";

	}

	public function renseigner($tab)
	{	

		$this->id_commentaire = $tab['id_alarme'];
		$this->nom = $tab['nom'];
		$this->email = $tab['email'];
		$this->commentaire = $tab['commentaire'];

	}
	
	public function serialiser()
	{	
		$tab['id_alarme'] = $this->id_commentaire;
		$tab['nom'] = $this->nom;
		$tab['email'] = $this->email;
		$tab['commentaire'] = $this->commentaire;
			
		return $tab;
	}

	public function afficher()
	{
		return "<td>".$this->id_commentaire."</td>
				.<td>".$this->nom."</td>
				.<td>".$this->email."</td>
				.<td>".$this->commentaire."</td>";

	}

	public function lister(){
			$tab = $this->serialiser();
			$chaine="";
			foreach ($tab as $cle => $valeur) {
				$chaine .= "<br/>".$cle." : ".$valeur;
			}
			return $chaine;
		}
	
	public function getid_commentaire()
	{
		return $this->id_commentaire;
	}

	public function setid_commentaire($id_commentaire)
	{
		$this->id_commentaire = $id_commentaire;
	}

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }



    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }





}