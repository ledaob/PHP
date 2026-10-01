<?php
    //4. Arreglos.
    $productos = [
        ["nombre" => "Harina", "stock_kg" => 20],
        ["nombre" => "Lentejas", "stock_kg" => 10],
        ["nombre" => "Atun", "stock_kg" => 5],
        ["nombre" => "Galletitas", "stock_kg" => 3]
    ];

    function esStockBajo($producto){
        return $producto["stock_kg"] < 10;
    }

    echo "Productos con stock bajo: <br>";

    foreach ($productos as $producto){
        if (esStockBajo($producto)){
            echo "El producto " . $producto["nombre"] . " tiene bajo stock (" . $producto["stock_kg"] . ") <br>" ;
        }
    }


?>