<?php

require_once 'ValorNumero.php';

class Fibonacci extends ValorNumero{

    public function calcularFibonacciPara(){
        $a = 0;
        $b = 1;

        for($i=1; $i <= $this->getValor(); $i++){
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }

    
}

?>