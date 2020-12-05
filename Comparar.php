<?php

require_once 'Valores.php'; 

class Comparar extends Valores{

    

    public function calcularComparacion(){

        $numero1 = $this->getValor1(); 
        $numero2 = $this->getValor2(); 
        $numero3 = $this->getValor3(); 
        

        if($numero1 > $numero2 and $numero1 > $numero3){

            echo "El mayor es: " . $numero1; 
        }else if ($numero2 > $numero1 and $numero2 > $numero3){

            echo "El mayor es: " . $numero2; 
        }else if ($numero3 > $numero1 and $numero3 > $numero2){

            echo "El mayor es: " . $numero3; 
        }else{

            echo "Los números son iguales. "; 
        }
        

        
    }
}

?>