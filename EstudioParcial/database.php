<?php


//Recibir datos y almacenarlos en variables
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
//Consulta para insertar

try
{
    $conexion=new PDO("mysql:host=127.0.0.1; dbname=prueba", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insertar = "INSERT INTO registros (nombres, apellidos, correo, usuario, contraseña) VALUES ('$nombres','$apellidos','$correo','$usuario','$contraseña')";
    $resultado = $conexion->prepare($insertar);
    $resultado->execute();
}
catch (Exception $e)
{
    die("Error:" .$e->getMessage());
}


if(! $resultado)
{
    echo "Error al registrarse";
}
else
{
    echo "Usuario registrado exitosamente";
}
?>