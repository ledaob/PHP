<?php
$nombre = $_POST['nombre'];


function limpiarNombre($nombre){
        $nombre = trim($nombre);
    }

    function convertirMayusculas($texto){
        return strtoupper($texto);
        }
        

    function contarCaracteres($texto){
        return strlen($texto);
    }

    limpiarNombre($nombre);
    echo "El nombre en mayusculas es: " . convertirMayusculas($nombre) . "<br>";
    echo "La cantidad de caracteres es: " . contarCaracteres($nombre);

    ?>

    