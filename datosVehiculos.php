<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha tecnica</title>
</head>
<body>
    
    <?php
        //Modulo 9, ejercicio 14
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];
        $neumaticos = $_POST['neumaticos'];


    $vehiculo = [
        "marca" => $_POST ['marca'], 
        "modelo" => $_POST ['modelo'],
        "anio" => $_POST ['anio'],
        "color" => $_POST ['color'],
        "neumaticos" => $_POST ['neumaticos']
    ];

    echo "<h1> Ficha técnica del vehículo: </h1>";
    echo "<ul>";
    echo "<li> Marca: " . $vehiculo["marca"] . "</li>";
    echo "<li> Modelo: " . $vehiculo["modelo"] . "</li>";
    echo "<li> Año: " . $vehiculo["anio"] . "</li>";
    echo "<li> Color: " . $vehiculo["color"] . "</li>";
    echo "<li> Neumáticos: " . $vehiculo["neumaticos"] . "</li>";
    echo "</ul>";
    
    ?>

    <br><br>
    <form action="vehiculos.html" method="get">
        <button type="submit">Volver</button>
    </form>
</body>
</html>