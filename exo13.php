<?php
class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nbporte;
    private float $_vitesseAcctuelle;
    private bool $_statut;

    function __construct(string $marque, string $modele, int $nbporte){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbporte = $nbporte;
        $this->_vitesseAcctuelle = 0;
        $this->_statut = 0;

    }


    public function getMarque():string{
        return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque;
    }


    public function getModele():string{
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_modele = $modele;
    }


    
    public function getNbporte():int{
        return $this->_nbporte;
    }
    public function setNbporte(int $nbporte){
        $this->_nbporte = $nbporte;
    }



    public function getVitesseAcctuelle():float{
        return $this->_vitesseAcctuelle;
    }

    public function setVitesseAcctuelle(float $vitesse){
        $this->_vitesseAcctuelle = $vitesse;
        return $this->_vitesseAcctuelle;
    }




    public function getStatut(){
        return $this->_statut;
    }
    public function setStatut($avance)
    {
        $this->_statut = $avance;
        return $this->_statut;
    }



    public function __toString()
    {
        return $this->_marque." ".$this->_modele ;
    }


    public function verifieStatut(){
        if($this->getStatut() == 0){
            echo "Le vehicule " . $this->_marque. " ".$this->_modele. " n est pas demarré<br>";
        }else{
            echo "Le vehicule " .$this->_marque. " ".$this->_modele. " est demarré<br>";
        }
    
    }



   



    public function Start(){
        if($this->getStatut()==0){
            $this->setStatut(1);
            echo "La voiture demarre et peux avancer<br>";
        }elseif ($this ->_statut == 1){
            echo " La voiture est deja démarrer<br>";
        }
    }



    public function Faster($vitesse){
        if($this->getStatut() == 1){
            $this ->setVitesseAcctuelle($this ->getVitesseAcctuelle()+$vitesse);
            echo "La voiture accelere de " .$vitesse. " km/h<br>";
        }
    }



    public function Slower($vitesse){
        if($this->getVitesseAcctuelle() > 0){
            $this ->_vitesseActuelle -= $vitesse;
            echo "La voiture ralentit de " .$vitesse. " km/h<br>";
        }else{
            echo "La voiture est a l arret et ne pas ralentir<br>";
        }
    }



    public function verifieVitesse(){
        echo "Le vehicule va a " .$this-> _vitesseActuelle  . " km/h <br>";
        
    }

   


    public function Arret(){

        if($this->getStatut()===1){
            $this->setStatut(0);
            echo "La voiture s'arrete <br>";
        }elseif ($this ->_statut === 0){
            echo " La voiture est deja eteinte<br>";
        }
    }

    public function verifieSpeed($vitesse){
        echo "Le vehicule va a " .$this-> getVitesseAcctuelle()  . " km/h <br>";
        
    }




























    
}
?>