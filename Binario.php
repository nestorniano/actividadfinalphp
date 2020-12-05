<?php


require_once 'Valor.php'; 

class Binario extends Valor{

  public function convertirBinarioAByte(){

        return $this-> getValor() / 8;
  }

  public function convertirBinarioAKilobyte(){

    return $this-> getValor() / 8000;

  }

  public function convertirBinarioAMegabyte(){

    return $this-> getValor() / 8000000;

  }

  public function convertirBinarioAGigabyte(){

    return $this-> getValor() / 8000000000;
  }

  public function convertirBinarioATerabyte(){

    return $this-> getValor() / 8000000000000;

  }

}

?>