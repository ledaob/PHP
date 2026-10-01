<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores y matrices</title>
</head>
    <body>
        <?php
            //Modulo 9, ejercicio 13
            $lenguajes = [];   
            $listaLenguajes = ["PHP", "Phyton", "C", "Java", "C++"];
            for ($i = 0; $i < 5;  $i++){
                $lenguajes [] = $listaLenguajes [$i];
            }

            echo "<ul>";
            foreach ($lenguajes as $lista){
                echo "<li>" . $lista  . "</li>";
            }
            echo "</ul>";
            
        ?>
    </body>
</html>
