<?php

require_once 'Valor.php'; 

class Kilobyte extends Valor{


    public function convertirKilobyteABinario(){

        return $this->getValor() * 8000; 
    }

    public function convertirKilobyteAByte(){

        return $this->getValor() * 1024; 
    }

    public function convertirKilobyteAMegabyte(){

        return $this->getValor() / 1024; 
    }

    public function convertirKilobyteAGigabyte(){

        return $this->getValor() / 1000000; 
    }

    public function convertirKilobyteATerabyte(){

        return $this->getValor() / 1000000000; 
    }



}


?>