<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrado</title>
</head>
    <body>
            <?php
            //Modulo 9, ejercicio 16
                $productos = [
                    ["id" => "P01",
                    "nombre_producto" => "Cebolla",
                    "stock_kg" => 100,
                    "precio_kg" => 3200
                    ],
                    ["id" => "P02",
                    "nombre_producto" => "Zanahoria",
                    "stock_kg" => 50,
                    "precio_kg" => 2500
                    ],
                    ["id" => "P03",
                    "nombre_producto" => "Papa",
                    "stock_kg" => 8,
                    "precio_kg" => 3300
                    ],
                    ["id" => "P04",
                    "nombre_producto" => "Tomate",
                    "stock_kg" => 9,
                    "precio_kg" => 3600
                    ]
                ];

                    echo "<table>";
                    echo "<tr>";
                    echo "<th> ID </th>";
                    echo "<th> Nombre del producto </th>";
                    echo "<th> Stock (kg) </th>";
                    echo "<th> Precio (kg) </th>";
                    echo "</tr>";
                    foreach ($productos as $producto){
                        echo "<tr>";                    
                        if ($producto['stock_kg'] < 10){
                            echo "<td>" . $producto['id'] . "</td>";
                            echo "<td>" . $producto['nombre_producto'] . "</td>";
                            echo "<td>" . $producto['stock_kg'] . "</td>";
                            echo "<td>" . $producto['precio_kg'] . "</td>";
                        }              
                        
                        echo "</tr>";
                    }
                    echo "</table>";



            ?>
    </body>
</html>