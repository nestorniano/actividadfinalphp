<?php 

require_once 'ValorNumero.php';

class Factorial extends ValorNumero{

    public function calcular(){

        $factorial = 1;

        for($i = 1; $i <= $this->getValor(); $i++){
            $factorial = $factorial * $i;
        }

        return $factorial;

    }


}

?>