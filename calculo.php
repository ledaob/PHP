<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="formulariop">
        <?php
            $nombre = $_POST['nombre'];
            $sueldo = floatval($_POST['sueldo']);
            

            if ($sueldo < 500000){
                $sueldo_total = $sueldo * 1.15;
            } else {
                $sueldo_total = $sueldo;
            }
            echo "<h1> Recibo de sueldo </h1> <br>";
            echo "<h3> Nombre de empleado: </h3> " . "<h3>" . $nombre . "</h3>"; 
            echo "<h3> Sueldo basico: </h3>". "<h3> $" . number_format($sueldo) . "</h3>";
            if ($sueldo < 500000){
                echo "<br> <h3> Sueldo con bono: </h3> " . "<h3> $". number_format($sueldo_total) . "</h3>";
            }

            
            
        ?>
        <br><br>
        <form action="formulario.html" method="get">
            <button type="submit" class="btn-volver">Volver al formulario</button>
        </form>
    </div>
    

</body>
</html>

