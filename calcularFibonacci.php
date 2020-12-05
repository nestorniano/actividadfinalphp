<?php 

if(isset($_POST["btncalcular"])){

    require_once 'Fibonacci.php';
   

    $fibonacci = new Fibonacci();
   

    $numero = $_POST["txtnumero"];

    $fibonacci->setValor($numero);
   

    $fibonacci->calcularFibonacciPara();
    echo "<br><br>";
    

}else{
    echo "Acceso no autorizado.";
}

?>