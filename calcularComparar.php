<?php

if (isset($_POST["btncomparar"])){

    require_once 'Comparar.php'; 

    $comparar = new Comparar(); 

    $numero1 = $_POST["txtnumero1"];
    $numero2 = $_POST["txtnumero2"];
    $numero3 = $_POST["txtnumero3"];
   

    $comparar->setValor1($numero1); 
    $comparar->setValor2($numero2);
    $comparar->setValor3($numero3);
    

    $comparar->calcularComparacion(); 

}else {

    echo "Acceso no permitido";
}

?>