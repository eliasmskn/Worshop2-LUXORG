<?php
class Objet_Connectes
{
	protected $id_obj;
	protected $libelle;
	protected $code;
	protected $id_user;

	public function __construct()
	{	
		$this->id_obj = 0;
		$this->libelle = "";
		$this->code = "";
		$this->id_user = 0;

	}

	public function renseigner($tab)
	{	

		$this->id_obj = $tab['id_obj'];
		$this->libelle = $tab['libelle'];
		$this->code = $tab['code'];
		$this->id_user = $tab['id_user'];

	}
	
	public function serialiser()
	{	
		$tab['id_obj'] = $this->id_obj;
		$tab['libelle'] = $this->libelle;
		$tab['code'] = $this->code;
		$tab['id_user'] = $this->id_user;
			
		return $tab;
	}

	public function afficher()
	{
		return "<td>".$this->id_obj."</td>
				.<td>".$this->libelle."</td>
				.<td>".$this->code."</td>
				.<td>".$this->id_user."</td>";

	}

	public function lister(){
			$tab = $this->serialiser();
			$chaine="";
			foreach ($tab as $cle => $valeur) {
				$chaine .= "<br/>".$cle." : ".$valeur;
			}
			return $chaine;
		}
	
	public function getid_obj()
	{
		return $this->id_obj;
	}

	public function setid_obj($id_obj)
	{
		$this->id_obj = $id_obj;
	}

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */


    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }





}