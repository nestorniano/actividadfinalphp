<?php

require_once 'Valor.php'; 

class Gigabyte extends Valor{

    public function convertirGigabyteABinario(){

        return $this->getValor() * 8000000000;
    }

    public function convertirGigabyteAByte(){

        return $this->getValor() * 1000000000;
    }

    public function convertirGigabyteAKilobyte(){

        return $this->getValor() * 1000000;
    }

    public function convertirGigabyteAMegabyte(){

        return $this->getValor() * 1024;
    }

    public function convertirGigabyteATerabyte(){

        return $this->getValor() / 1024;
    }
}

?>