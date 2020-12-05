<?php


if (isset($_POST["btnConvertir"])){

    require_once 'Binario.php';
    require_once 'Byte.php';
    require_once 'Kilobyte.php';
    require_once 'Megabyte.php';
    require_once 'Gigabyte.php'; 
    require_once 'Terabyte.php';


    $binario = new Binario(); 
    $byte = new Byte(); 
    $kilobyte = new Kilobyte(); 
    $megabyte = new Megabyte();
    $gigabyte = new Gigabyte(); 
    $terabyte = new Terabyte(); 



    $valor = $_POST["txtValor"];

    $tipomedida = $_POST["selmedidas"];

    $opcion = $_POST["medidas"];


    switch ($tipomedida){

        case "digito": 

            $binario->setValor($valor);

            switch ($opcion){

                case "bytes":

                    echo "La conversión de bit (dígito binario) a Byte es: " . $binario->convertirBinarioAByte();
                    
                break;
                
                case "kilobyte": 
                    echo "La conversión de bit (dígito binario) a Kilobyte es: " . $binario->convertirBinarioAKilobyte();
                break;  
                
                case "megabyte":
                    echo "La conversión de bit (dígito binario) a Megabyte es: " . $binario->convertirBinarioAMegabyte();
                break;     

                case "gigabyte": 
                    echo "La conversión de bit (dígito binario) a Gigabyte es: " . $binario->convertirBinarioAGigabyte();
                break; 
                
                case "terabyte": 
                    echo "La conversión de bit (dígito binario) a Terabyte es: " . $binario->convertirBinarioATerabyte();
                break;  
                
                default: 

                    echo "Valor no permitido";    
            }
        break;  
        
        case "byte": 
            $byte->setValor($valor); 

            switch ($opcion){

                case "binario":
                     echo "La conversión de Byte a bit (dígito binario), es: " . $byte->convertirByteABinario();
                break;    
                
                case "kilobyte": 
                    echo "La conversión de Byte a Kilobyte es: " . $byte->convertirByteAKilobyte();
                break; 
                
                case "megabyte":
                    echo "La conversión de Byte a Megabyte es: " . $byte-> convertirByteAMegabyte();
                break; 
                
                case "gigabyte": 
                    echo "La conversión de Byte a Gigabyte es: " . $byte-> convertirByteAGigabyte();
                break; 

                case "terabyte": 
                    echo "La conversión de Byte a Terabyte es: " . $byte-> convertirByteATerabyte();
                break; 
                
                default: 

                    echo "Valor no permitido";  
                
                
            }
        break; 
        
        case "kilo": 

            $kilobyte->setValor($valor); 

            switch ($opcion){

                case "binario":
                    echo "La conversión de Kilobyte a bit (dígito binario), es: " . $kilobyte->convertirKilobyteABinario();
                break; 
                
                case "bytes":

                    echo "La conversión de Kilobyte a Byte es: " . $kilobyte->convertirKilobyteAByte();
                    
                break;

                case "megabyte":
                    echo "La conversión de Kilobyte a Megabyte es: " . $kilobyte->convertirKilobyteAMegabyte();
                break; 

                case "gigabyte": 
                    echo "La conversión de Kilobyte a Gigabyte es: " . $kilobyte-> convertirKilobyteAGigabyte();
                break; 

                case "terabyte": 
                    echo "La conversión de Kilobyte a Terabyte es: " . $kilobyte-> convertirKilobyteATerabyte();
                break; 

                default: 

                    echo "Valor no permitido"; 
            }

        break; 

        case "mega": 

            $megabyte->setValor($valor); 

            switch ($opcion){

                case "binario":
                    echo "La conversión de Megabyte a bit (dígito binario), es: " . $megabyte->convertirMegabyteABinario();
                break; 

                case "bytes":

                    echo "La conversión de Megabyte a Byte es: " . $megabyte->convertirMegabyteAByte();
                    
                break;

                case "kilobyte": 
                    echo "La conversión de Megabyte a Kilobyte es: " . $megabyte->convertirMegabyteAKilobyte();
                break; 

                case "gigabyte": 
                    echo "La conversión de Megabyte a Gigabyte es: " . $megabyte->convertirMegabyteAGigabyte();
                break; 

                case "terabyte": 
                    echo "La conversión de Megabyte a Terabyte es: " . $megabyte->convertirMegabyteATerabyte();
                break; 

                default: 

                    echo "Valor no permitido"; 

            }
        break;   
        
        case "giga": 

            $gigabyte->setValor($valor);

            switch ($opcion){
                
                case "binario":
                    echo "La conversión de Gigabyte a bit (dígito binario), es: " . $gigabyte->convertirGigabyteABinario();
                break; 

                case "bytes":
                    echo "La conversión de Gigabyte a Byte es: " . $gigabyte->convertirGigabyteAByte(); 
                break;

                case "kilobyte": 
                    echo "La conversión de Gigabyte a Kilobyte es: " . $gigabyte->convertirGigabyteAKilobyte();
                break; 

                case "megabyte":
                    echo "La conversión de Gigabyte a Megabyte es: " .  $gigabyte->convertirGigabyteAMegabyte();
                break; 

                case "terabyte": 
                    echo "La conversión de Gigabyte a Terabyte es: " . $gigabyte->convertirGigabyteATerabyte();
                break; 

                default: 

                    echo "Valor no permitido"; 

            }
        break;  
        
        case "tera": 

            $terabyte->setValor($valor); 

            switch ($opcion){

                case "binario":
                    echo "La conversión de Terabyte a bit (dígito binario), es: " . $terabyte->convertirTerabyteABinario();
                break; 

                case "bytes":
                    echo "La conversión de Terabyte a Byte es: " . $terabyte->convertirTerabyteAByte(); 
                break;

                case "kilobyte": 
                    echo "La conversión de Terabyte a Kilobyte es: " . $terabyte->convertirTerabyteAKilobyte();
                break; 

                case "megabyte":
                    echo "La conversión de Terabyte a Megabyte es: " . $terabyte->convertirTerabyteAMegabyte();
                break; 

                case "gigabyte": 
                    echo "La conversión de Terabyte a Gigabyte es: " . $terabyte->convertirTerabyteAGigabyte();
                break;

                default: 

                    echo "Valor no permitido"; 


            }
        break;  
        
        default: 

        echo "Valor no permitido"; 
        
        
    }
}else{

    echo "Acceso no permitido";
}


?>


