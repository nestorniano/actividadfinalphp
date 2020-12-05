<?php

class Valores{

    private $valor1;
    private $valor2; 
    private $valor3; 

  

    public function setValor1($numero){

        $this->valor1 = $numero; 
    }

    public function getValor1(){

        return $this->valor1; 
    }

    public function setValor2($valor){

        $this->valor2 = $valor; 
    }

    public function getValor2(){

        return $this->valor2; 
    }

    public function setValor3($num){

        $this->valor3 = $num; 
    }

    public function getValor3(){

        return $this->valor3; 
    }
}

?>
