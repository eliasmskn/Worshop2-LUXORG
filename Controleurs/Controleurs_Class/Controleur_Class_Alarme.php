<?php
class Alarme
{
	protected $id_alarme;
	protected $jour;
	protected $heure;
	protected $id_user;

	public function __construct()
	{	
		$this->id_alarme = 0;
		$this->jour = "";
		$this->heure = "";
		$this->id_user = 0;

	}

	public function renseigner($tab)
	{	

		$this->id_alarme = $tab['id_alarme'];
		$this->jour = $tab['jour'];
		$this->heure = $tab['code'];
		$this->id_user = $tab['id_user'];

	}
	
	public function serialiser()
	{	
		$tab['id_objet'] = $this->id_alarme;
		$tab['jour'] = $this->jour;
		$tab['heure'] = $this->heure;
		$tab['id_user'] = $this->id_user;
			
		return $tab;
	}

	public function afficher()
	{
		return "<td>".$this->id_alarme."</td>
				.<td>".$this->jour."</td>
				.<td>".$this->heure."</td>
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
	
	public function getid_alarme()
	{
		return $this->id_alarme;
	}

	public function setid_alarme($id_alarme)
	{
		$this->id_alarme = $id_alarme;
	}

    /**
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param string $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }


    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param string $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }





}