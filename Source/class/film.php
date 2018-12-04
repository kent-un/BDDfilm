<?php
class film{
    private $nomFilm;
    private $afficheFilm; 
    

    public function __construct($nomFilm, $afficheFilm){
        $this->nomFilm = $nomFilm;
        $this->afficheFilm = $afficheFilm; 
        
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
}
?>