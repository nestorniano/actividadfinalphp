<?php 

require_once 'Valor.php'; 


class Megabyte extends Valor{

    public function convertirMegabyteABinario(){

        return $this->getValor() * 8000000; 
    }

    public function convertirMegabyteAByte(){

        return $this->getValor() * 1000000; 
    }

    public function convertirMegabyteAKilobyte(){

        return $this->getValor() * 1024; 

    }

    public function convertirMegabyteAGigabyte(){

        return $this->getValor() / 1024; 
    }

    public function convertirMegabyteATerabyte(){

        return $this->getValor() / 1000000; 

    }
}


?>