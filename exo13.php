<?php

class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nBPortes;
    private float $_vitesseActuelle;
    private bool $_statut;

    function __construct(string $marque,string $modele,int $porte){
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_nBPortes = $porte;
    $this->_vitesseActuelle = 0;
    $this->_statut = 0;
    }

    public function getMarque():string{
    return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque ;
        return $this;
    }




    public function getModele():string{
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_modèle = $modele ;
        return $this;
    }




    public function getPorte():int{
        return $this->_nBPortes;
    }
    public function setPorte(int $porte){
        $this->_nBPortes = $porte ;
        return $this->_nBPortes;
    }
    
    
    
    public function getVitesse():float{
        return $this->_vitesseActuelle;
    }
    
    public function setVitesse(float $vitesse){
        $this->_vitesseActuelle = $vitesse ;
        return $this->_vitesseActuelle;
    }
    

    public function __toString()
    {
        return $this->_marque." ".$this->_modele ;
    }

    public function getStatut(){
        return $this->_statut;
    }
    public function setStatut($avance)
    {
        $this->_statut = $avance;
        return $this->_statut;
    }


   


    public function verifieStatut(){
        if($this->getStatut() == 0){
            echo "Le vehicule " . $this->_marque. " ".$this->_modele. " n est pas demarré<br>";
        }else{
            echo "Le vehicule " .$this->_marque. " ".$this->_modele. " est demarré<br>";
        }
    
    }



    public function Accelerer($vitesse)
    {
      if ($this->getStatut() === 0) {
        echo "Le véhicule " . $this->getMarque() . " doit être démarrer pour accélérer.";
      } else {
          $this->setVitesse($this->getVitesse()+$vitesse);
      echo "Le véhicule " . $this->getMarque() . " accélére de " . $this->getVitesse() . " km/h";
      }
      
    }

    public function Demarrer(){

        if($this->getStatut()==0){
            $this->setStatut(1);
            echo "La voiture ". $this->_marque. " ".$this->_modele. " demarre et peux avancer<br>";
        }elseif ($this ->_statut == 1){
            echo " La voiture est deja démarrer<br>";
        }
    }
    // public function Accelerer($vitesse){
    //     if($this->getStatut() == 1){
    //         $this->setVitesse($this->getVitesse()+$vitesse);
    //         echo "La ". $this->_marque. " accelere de " .$vitesse. " km/h<br>";
    //     }
        
    // }


 
    public function Ralentir($vitesse){
        if($this->_vitesseActuelle > 0){
            $this ->_vitesseActuelle -= $vitesse;
            echo "La ". $this->_marque." ralentit de " .$vitesse. " km/h<br>";
        }else{
            echo "La voiture est a l arret et ne pas ralentir<br>";
        }

    }

    // public function Arret(){

    //     if($this->getStatut()===1){
    //         $this->setStatut(0);
    //         echo "La voiture s'arrete <br>";
    //     }elseif ($this ->_statut === 0){
    //         echo " La voiture est deja eteinte<br>";
    //     }
    // }
    public function Arret()
  {
    if ($this->getStatut() === 1) {
      echo "Le véhicule " . $this->getMarque() . " est déjà à l'arrêt.<br>";
    } else {
    $this->_statut = 0;
    echo "Le véhicule " . $this->getMarque() . " est stoppé.<br>";
    $this->status = 0;
  }
 }

  public function verifieVitesse(){
        echo "Le vehicule va a " .$this-> _vitesseActuelle  . " km/h <br>";
        
    }











}




?>





















