<?php

class Carro{
    private $chassi;
    private $rodas;
    private $numPortas;
    private $cor;
    private $logomarca;
    
    public function setChassi($chassiCar){
        $this->chassi = $chassiCar;
    }

    public function setRodas($rodasCar){
        $this->rodas = $rodasCar;
    }
    
    public function setNumP($numPortasCar){
        $this->numPortas = $numPortasCar;
    }
    
    public function setCor($corCar){
        $this->cor = $corCar;
    }
    
    public function setLogo($logomarcaCar){
        $this->logomarca = $logomarcaCar;

    }
    
    public function getChassi(){
        echo $this->chassi;
    }
    
    public function getRodas(){
        echo $this->rodas;
    }
    
    public function getNumP(){
        echo $this->numPortas;
    }
    
    public function getCor(){
        echo $this->cor;
    }
    
    public function getLogo(){
        echo $this->logomarca;
    }
}

?>