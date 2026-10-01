<?php
    function mostrarTitulo(){
        echo "Listado de alumnos <br>";
    }

    mostrarTitulo();
    mostrarTitulo();

    function saludar($nombre){
        echo "Hola " . $nombre;
    }

    saludar('Maria <br>');
    saludar('Jose <br>');
    saludar('Luis <br>');



    function calcularArea($base, $altura){
        $area = $base * $altura;
        return $area;
    }

    $resultadoArea = calcularArea(50, 2);

    if ($resultadoArea > 50){
        echo "El área del rectángulo supera 50.";
    }
    
?>