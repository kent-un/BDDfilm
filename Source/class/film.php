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
    private $motCle1;
    private $motCle2;
    private $motCle3;   

    public function __construct($nomFilm=NULL, $afficheFilm=NULL, $resumeFilm=NULL, $anneeFilm=NULL, $dureeFilm=NULL, $nomPays=NULL,
    $lienBandeAnnonce=NULL, $pseudoUtilisateur=NULL, $concatGenre=NULL, $concatReal=NULL, $concatAct=NULL, $motCle1=NULL
    , $motCle2=NULL, $motCle3=NULL){
        
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
        $this->motCle1 = $motCle1;  
        $this->motCle2 = $motCle2;  
        $this->motCle3 = $motCle3;  


    }

    /**
     * Get the value of afficheFilm
     */ 
    public function getAfficheFilm()
    {
        return $this->afficheFilm;
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

    /**
     * Get the value of resumeFilm
     */ 
    public function getResumeFilm()
    {
        return $this->resumeFilm;
    }

    /**
     * Get the value of anneeFilm
     */ 
    public function getAnneeFilm()
    {
        return $this->anneeFilm;
    }

    /**
     * Get the value of nomPays
     */ 
    public function getNomPays()
    {
        return $this->nomPays;
    }

    /**
     * Get the value of dureeFilm
     */ 
    public function getDureeFilm()
    {
        return $this->dureeFilm;
    }

    /**
     * Get the value of lienBandeAnnonce
     */ 
    public function getLienBandeAnnonce()
    {
        return $this->lienBandeAnnonce;
    }

    /**
     * Get the value of pseudoUtilisateur
     */ 
    public function getPseudoUtilisateur()
    {
        return $this->pseudoUtilisateur;
    }

    /**
     * Get the value of concatGenre
     */ 
    public function getConcatGenre()
    {
        return $this->concatGenre;
    }

    /**
     * Get the value of concatReal
     */ 
    public function getConcatReal()
    {
        return $this->concatReal;
    }

    /**
     * Get the value of concatAct
     */ 
    public function getConcatAct()
    {
        return $this->concatAct;
    }

    /**
     * Get the value of motCle1
     */ 
    public function getMotCle1()
    {
        return $this->motCle1;
    }

    /**
     * Set the value of motCle1
     *
     * @return  self
     */ 
    public function setMotCle1($motCle1)
    {
        $this->motCle1 = $motCle1;

        return $this;
    }

    /**
     * Get the value of motCle2
     */ 
    public function getMotCle2()
    {
        return $this->motCle2;
    }

    /**
     * Set the value of motCle2
     *
     * @return  self
     */ 
    public function setMotCle2($motCle2)
    {
        $this->motCle2 = $motCle2;

        return $this;
    }

    /**
     * Get the value of motCle3
     */ 
    public function getMotCle3()
    {
        return $this->motCle3;
    }

    /**
     * Set the value of motCle3
     *
     * @return  self
     */ 
    public function setMotCle3($motCle3)
    {
        $this->motCle3 = $motCle3;

        return $this;
    }
}
?>