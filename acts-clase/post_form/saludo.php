<?php
    $nombre = $_POST['nombre'];

    if ($nombre != '') {
        echo 'Hola '.$nombre.'!';
    } else {
        echo 'No ingresaste un nombre :(';
    }
    
    echo '<br>'; 
    echo '<a href="./form.html">Regresar</a>';
    echo '<br>'; 
    echo '<a href="./index.html">Página principal</a>';
?>