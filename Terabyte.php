<?php

require_once 'Valor.php';

class Terabyte extends Valor{


    public function convertirTerabyteABinario(){

        return $this->getValor() * 8000000000000;
    }

    public function convertirTerabyteAByte(){

        return $this->getValor() * 1000000000000;

    }

    public function convertirTerabyteAKilobyte(){

        return $this->getValor() * 1000000000;
    }

    public function convertirTerabyteAMegabyte(){

        return $this->getValor() * 1000000;
    }

    public function convertirTerabyteAGigabyte(){

        return $this->getValor() * 1024;
    }




}


?>