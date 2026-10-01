<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        //Modulo 1, ejercicio 1.
        echo "Bienvenido a Lógica y Estructura de Datos";
        echo "<br>";
        echo "Fecha " , date("Y-m-d") , "<br>";
        //Modulo 2, ejercicio 2
        $nombre = "Leda";
        $edad = 28;
        $altura = 1.55;
        echo "Nombre: " . $nombre . "<br> Edad: " . $edad . "<br> Altura: " . $altura ."<br>";
        //Modulo 2, ejercicio 3
        $montoString = '4500.85';
        $entero = intval($montoString);
        $decimal = doubleval($montoString);
        echo "Monto como entero: " . gettype($entero) . " " . $entero . "<br>";
        echo "Monto como decimal: " . $decimal . "<br>";
        //Modulo 3, ejercicio 4
        define("IMPUESTO", 21);
        define("TITULO_SISTEMA", "Sistema de facturación");
        defined("IMPUESTO"); 
        echo "El impuesto es: " . IMPUESTO;
        //Modulo 4, ejercicio 5
        $precio = 100;
        $cantidad = 5;
        $total = $precio * $cantidad;
        $totalConImpuesto = $total + ($total * IMPUESTO / 100);
        echo "<br> Total con impuesto: " . $totalConImpuesto . "<br>";        
        $totalConDescuento = $totalConImpuesto -= 50;
        echo "Total con descuento: " . $totalConDescuento . "<br>";
        //Modulo 4, ejercicio 6
        $num = 10;
        $resto = $num % 2;
        echo "El resto de dividir " . $num . " entre 2 es: " . $resto . "<br>";
        //Modulo 5 y 6, ejercicio 7
        $valorA = 10;
        $valorB = "10";
        if ($valorA == $valorB) {
            var_dump($valorA == $valorB);
        } 
        if ($valorA === $valorB) {
            var_dump($valorA === $valorB); 
        }
        echo "<br> La diferencia es que valorA == valorB compara solo el valor, mientras que valorA === valorB compara tanto el valor como el tipo de dato.<br>";
        //Modulo 5 y 6, ejercicio 8
        $edad = 28;
        if ($edad <= 0 || $edad >= 120){
            print "Edad no válida. <br>";
        } elseif($edad >= 0 && $edad < 13){
            print "Niño. <br>";
        } elseif ($edad >= 13 && $edad <= 17) {
            print "Adolescente. <br>";
        } elseif ($edad >= 18 && $edad <= 64 ) {
            print "Adulto. <br>";
        } elseif ($edad >= 65) {
            print "Adulto mayor. <br>";
        }
        //Modulo 5 y 6, ejercicio 9
        $diaSemana = 5;
        switch ($diaSemana){
            case 1:
                echo "Lunes.";
            break;
            case 2:
                echo "Martes.";
                break;
            case 3:
                echo "Miércoles.";
                break;
            case 4:
                echo "Jueves.";
                break;
            case 5:
                echo "Viernes.";
                break;
            case 6: 
                echo "Sabado.";
                break;
            case 7:
                echo "Domingo.";
                break;
            default:
                echo "Fuera de rango.";
        }

        //Modulo 7, ejercicio 10
        $suma =0;
        for ($i = 1; $i <= 20; $i++){
            if ($i % 2 !=0){
                $suma += $i;
            }
        }
        echo "<br> La suma de los números impares del 1 al 20 es: " . $suma . "<br>";
        
        //Modulo 7, ejercicio 11
        $base = 5;
        $i = 0;
        $resultado = 0;
        do {
            $resultado = $base * $i;
            
            echo "<ul>";
            echo "<li> La multiplicación de " . $base . " x " . $i . " es: " . $resultado .  "</li>";
            echo "</ul>";
            $i++;
        } while ($i <= 10);

        ?>
    
</body>
</html>