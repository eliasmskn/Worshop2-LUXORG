<?php

class Tache
{
    protected $id_Tache;
    protected $numero_tache;
    protected $id_user;

    public function __construct()
    {
        $this->id_Tache = 0;
        $this->numero_tache = 0;
        $this->id_user = 0;

    }

    public function renseigner($tab)
    {

        $this->id_Tache = $tab['id_Tache'];
        $this->numero_tache = $tab['numero_tache'];
        $this->id_user = $tab['id_user'];

    }

    public function serialiser()
    {
        $tab['id_Tache'] = $this->id_Tache;
        $tab['numero_tache'] = $this->numero_tache;
        $tab['id_user'] = $this->id_user;

        return $tab;
    }

    public function afficher()
    {
        return "<td>" . $this->id_Tache . "</td>
				.<td>" . $this->numero_tache . "</td>
				.<td>" . $this->id_user . "</td>";

    }

    public function lister()
    {
        $tab = $this->serialiser();
        $chaine = "";
        foreach ($tab as $cle => $valeur) {
            $chaine .= "<br/>" . $cle . " : " . $valeur;
        }
        return $chaine;
    }

    /**
     * @return string
     */
    public function getIdtache()
    {
        return $this->id_Tache;
    }

    /**
     * @param string $id_Tache
     */
    public function setIdtache($id_Tache)
    {
        $this->id_Tache = $id_Tache;
    }


    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @return int
     */
    public function getNumeroTache()
    {
        return $this->numero_tache;
    }

    /**
     * @param int $numero_tache
     */
    public function setNumeroTache($numero_tache)
    {
        $this->numero_tache = $numero_tache;
    }


}