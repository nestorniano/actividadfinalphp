<?php

require_once 'Valor.php';

class Byte extends Valor {

    public function convertirByteABinario(){

        return $this->getValor() * 8;
    }

    public function convertirByteAKilobyte(){

        return $this-> getValor() / 1024; 
    }

    public function convertirByteAMegabyte(){

        return $this->getValor() / 1000000;
    }

    public function convertirByteAGigaByte(){

        return $this->getValor() / 1000000000;
    }

    public function convertirByteATeraByte(){

        return $this->getValor() / 1000000000000;

    }
}

?>