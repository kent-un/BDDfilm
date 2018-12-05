<?php
class film{
    private $nomFilm;
    private $afficheFilm; 
    private $resumeFilm;
    private $anneeFilm;
    private $dureeFilm;
    private $nomPays;
    private $lienBandeAnnonce;
    private $pseudoUtilisateur;
    private $concatGenre;
    private $concatReal;
    private $concatAct;

    public function __construct($nomFilm, $afficheFilm, $resumeFilm, $anneeFilm, $dureeFilm, $nomPays,
    $lienBandeAnnonce, $pseudoUtilisateur, $concatGenre=NULL, $concatReal=NULL, $concatAct=NULL){
        
        $this->nomFilm = $nomFilm;
        $this->afficheFilm = $afficheFilm;
        $this->resumeFilm = $resumeFilm;
        $this->anneeFilm = $anneeFilm;
        $this->dureeFilm = $dureeFilm;
        $this->nomPays = $nomPays;
        $this->lienBandeAnnonce = $lienBandeAnnonce;
        $this->pseudoUtilisateur = $pseudoUtilisateur;
        $this->concatGenre = $concatGenre;
        $this->concatReal = $concatReal;
        $this->concatAct = $concatAct;      
    }

    /**
     * Get the value of afficheFilm
     */ 
    public function getAfficheFilm()
    {
        return $this->afficheFilm;
    }

    public function getInfoFilm($idFilm)
    {
        return $this->nomFilm;
        return $this->resumeFilm;
        return $this->anneeFilm;
        return $this->dureeFilm;
        return $this->nomPays;
        return $this->lienBandeAnnonce;
        return $this->pseudoUtilisateur;
        return $this->concatGenre;
        return $this->concatReal;
        return $this->concatAct;  
    }

    /**
     * Set the value of afficheFilm
     *
     * @return  self
     */ 
    public function setAfficheFilm($afficheFilm)
    {
        $this->afficheFilm = $afficheFilm;

        return $this;
    }

    /**
     * Get the value of nomFilm
     */ 
    public function getNomFilm()
    {
        return $this->nomFilm;
    }

    /**
     * Set the value of nomFilm
     *
     * @return  self
     */ 
    public function setNomFilm($nomFilm)
    {
        $this->nomFilm = $nomFilm;

        return $this;
    }


    /**
     * Set the value of concatGenre
     *
     * @return  self
     */ 
    public function setConcatGenre($concatGenre)
    {
        $this->concatGenre = $concatGenre;

        return $this;
    }

    /**
     * Set the value of concatReal
     *
     * @return  self
     */ 
    public function setConcatReal($concatReal)
    {
        $this->concatReal = $concatReal;

        return $this;
    }

    /**
     * Set the value of concatAct
     *
     * @return  self
     */ 
    public function setConcatAct($concatAct)
    {
        $this->concatAct = $concatAct;

        return $this;
    }
}
?>