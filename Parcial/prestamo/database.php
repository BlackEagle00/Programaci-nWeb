<?php

$documento = $_POST["documento"];
$prestamo = $_POST["prestamo"];
try
{
    $conexion=new PDO("mysql:host=127.0.0.1; dbname=parcial", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insertar = "SELECT prestamo FROM prestamo WHERE idPrestamo =:idPrestamo";
    $resultado = $conexion->prepare($insertar);
    $resultado->bindValue(":idPrestamo", $_GET["idPrestamo"]);
    $resultado->execute();
}
catch (Exception $e)
{
    die("Error:" .$e->getMessage());
}

while($rows=$resultado->fetch(PDO::FETCH_ASSOC))
{
    $salario=$rows["salario"];
    $id=$rows["id"];
}

if( $salario < 3500000)
{
    echo "Préstamo rechazado";
}
else
{
    echo "Consulta de préstamo realizada exitosamente";
}
?>