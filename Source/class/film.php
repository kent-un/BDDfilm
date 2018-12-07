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
    private $Real;
    private $paysReal;
    private $concatAct;
    private $act1;
    private $paysAct1;
    private $act2;
    private $paysAct2;
    private $motCle1;
    private $motCle2;
    private $motCle3;   

    public function __construct($nomFilm=NULL, $afficheFilm=NULL, $resumeFilm=NULL, $anneeFilm=NULL, $dureeFilm=NULL, $nomPays=NULL,
    $lienBandeAnnonce=NULL, $pseudoUtilisateur=NULL, $concatGenre=NULL, $concatReal=NULL, $real=NULL, $paysReal=NULL, $concatAct=NULL,
     $act1=NULL, $paysAct1=NULL, $act2=NULL, $paysAct2=NULL, $motCle1=NULL, $motCle2=NULL, $motCle3=NULL){
        
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
        $this->real = $real;
        $this->paysReal = $paysReal;       
        $this->concatAct = $concatAct;  
        $this->act1 = $act1;
        $this->paysAct1 = $paysAct1;  
        $this->act2 = $act2;
        $this->paysAct2 = $paysAct2;   
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

    /**
     * Get the value of Real
     */ 
    public function getReal()
    {
        return $this->Real;
    }

    /**
     * Set the value of Real
     *
     * @return  self
     */ 
    public function setReal($Real)
    {
        $this->Real = $Real;

        return $this;
    }

    /**
     * Get the value of paysReal
     */ 
    public function getPaysReal()
    {
        return $this->paysReal;
    }

    /**
     * Set the value of paysReal
     *
     * @return  self
     */ 
    public function setPaysReal($paysReal)
    {
        $this->paysReal = $paysReal;

        return $this;
    }

    /**
     * Get the value of act1
     */ 
    public function getAct1()
    {
        return $this->act1;
    }

    /**
     * Set the value of act1
     *
     * @return  self
     */ 
    public function setAct1($act1)
    {
        $this->act1 = $act1;

        return $this;
    }

    /**
     * Get the value of paysAct1
     */ 
    public function getPaysAct1()
    {
        return $this->paysAct1;
    }

    /**
     * Set the value of paysAct1
     *
     * @return  self
     */ 
    public function setPaysAct1($paysAct1)
    {
        $this->paysAct1 = $paysAct1;

        return $this;
    }

    /**
     * Get the value of act2
     */ 
    public function getAct2()
    {
        return $this->act2;
    }

    /**
     * Set the value of act2
     *
     * @return  self
     */ 
    public function setAct2($act2)
    {
        $this->act2 = $act2;

        return $this;
    }

    /**
     * Get the value of paysAct2
     */ 
    public function getPaysAct2()
    {
        return $this->paysAct2;
    }

    /**
     * Set the value of paysAct2
     *
     * @return  self
     */ 
    public function setPaysAct2($paysAct2)
    {
        $this->paysAct2 = $paysAct2;

        return $this;
    }
}
?>