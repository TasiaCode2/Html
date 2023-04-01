<?php
    $edad = $_POST['edad'];
    $exp = "/[a-z]/i";

    if ($edad == '' || preg_match($exp, $edad)) {
        echo 'Ingresa una edad por favor!';
    } else {
        if ($edad > 17) {
            echo 'Eres mayor de edad 😎👌';
        } else {
            echo 'Eres menor de edad 🤷‍♀️';
        }
    }
    
    echo '<br>'; 
    echo '<a href="./edad.html">Regresar</a>';
    echo '<br>'; 
    echo '<a href="./index.html">Página principal</a>';
?>