<?php
$servidor="localhost";
$baseDeDatos="uvneea2024";
$usuario="root";
$contraseña="";
try{
    $conexión = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);
}
catch(Exception $ex){
    echo $ex->getMessage();
}

?>