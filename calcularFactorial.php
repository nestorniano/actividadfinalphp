<?php 

if(isset($_POST["btncalcular"])){

    
    require_once 'Factorial.php';

   
    $factorial = new Factorial();

    $numero = $_POST["txtnumero"];

  
    $factorial->setValor($numero);

   
    echo "La factorial de " . $numero . " es " . $factorial->calcular();

}else{
    echo "Acceso no autorizado.";
}

?>