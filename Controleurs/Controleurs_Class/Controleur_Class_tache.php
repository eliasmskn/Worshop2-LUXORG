<?php

class Tache
{
    protected $id_Tache;
    protected $id_user;
    protected $id_objet;
    protected $numero_tache;
    protected $duree;
    protected $libelle;

    public function __construct()
    {
        $this->id_Tache = 0;
        $this->id_user = 0;
        $this->id_objet = 0;
        $this->numero_tache = 0;
        $this->duree = 0;
        $this->libelle = " ";

    }

    public function renseigner($tab)
    {

        $this->id_Tache = $tab['id_Tache'];
        $this->id_user = $tab['id_user'];
        $this->id_objet = $tab['id_objet'];
        $this->numero_tache = $tab['numero_tache'];
        $this->duree = $tab['duree'];
        $this->libelle = $tab['libelle'];

    }

    public function serialiser()
    {
        $tab['id_Tache'] = $this->id_Tache;
        $tab['id_user'] = $this->id_user;
        $tab['id_objet'] = $this->id_objet;
        $tab['numero_tache'] = $this->numero_tache;
        $tab['duree'] = $this->duree;
        $tab['libelle'] = $this->libelle;

        return $tab;
    }

    public function afficher()
    {
        return "<td>" . $this->id_Tache . "</td>
				.<td>" . $this->id_user . "</td>
                .<td>" . $this->id_objet . "</td>
                .<td>" . $this->numero_tache . "</td>
                .<td>" . $this->duree . "</td>
				.<td>" . $this->libelle . "</td>";

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

    public function getIdUser()
    {
        return $this->id_Tache;
    }

    /**
     * @param string $id_Tache
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return int
     */
    public function getIdObjet()
    {
        return $this->id_objet;
    }

    public function setIdObjet($id_objet)
    {
        $this->id_objet = $id_objet;
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

     public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param int $numero_tache
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

     public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param int $numero_tache
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }


}