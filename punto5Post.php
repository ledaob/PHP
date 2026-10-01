<?php
    $nombre = $_POST['nombre'];
    $frase = $_POST['frase'];

    function limpiarFrase($frase){
        $frase = trim($frase);
    }

    function contarCaracteres($frase){
        return strlen($frase);
    }



    function tienePhp($frase){
            $verificar = strpos($frase, "PHP");
            if($verificar !== false){
                echo "La frase contiene 'PHP'."; 
            } else{
                echo "La frase no contiene el término 'PHP'.";
            }

    }



    limpiarFrase($frase);
    echo "La frase es: <br>" . $frase . "<br>";
    echo "La frase tiene " . contarCaracteres($frase) . " caracteres. <br>";
    tienePhp($frase);


?>