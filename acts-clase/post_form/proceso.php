<?php
    $Nombre = $_POST["Nombre"];
    $ApPat = $_POST["ApPat"];
    $ApMat = $_POST["ApMat"];
    $Carrera = $_POST["Carrera"];
    $Matricula = $_POST["Matricula"];
    $Materia = $_POST["Materia"];
    $Genero = $_POST["Genero"];

    $html = "
    <table border='1'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>ApPat</th>
                <th>ApMat</th>
                <th>Carrera</th>
                <th>Matricula</th>
                <th>Materia</th>
                <th>Genero</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>$Nombre</th>
                <th>$ApPat</th>
                <th>$ApMat</th>
                <th>$Carrera</th>
                <th>$Matricula</th>
                <th>$Materia</th>
                <th>$Genero</th>
            </tr>
        </tbody>
    </table>

    <a href='./proceso.html'>Regresar</a>
    <br>
    <a href='./index.html'>Página principal</a>
    ";

    echo $html;
?>