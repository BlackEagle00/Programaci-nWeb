<?php

$hawaiana = $_POST["hawaiana"];
$champiñones = $_POST["champiñones"];
$mexicana = $_POST["mexicana"];
$carnes = $_POST["carnes"];
$mixta = $_POST["mixta"];

try
{
    $conexion=new PDO("mysql:host=127.0.0.1; dbname=parcial2", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $insertar = "SELECT * FROM prestamo WHERE documento =:documento";
    $resultado = $conexion->prepare($insertar);
    $resultado->bindValue(":documento", $_POST["documento"]);
    $resultado->execute();
}
catch (Exception $e)
{
    die("Error:" .$e->getMessage());
}

while($rows=$resultado->fetch(PDO::FETCH_ASSOC))
{
    $salario=$rows["precio"];
    $id=$rows["id"];
}

if(3500000 > $salario)
{
    echo "Préstamo rechazado";
}
else
{
    echo "Consulta de préstamo realizada exitosamente";
}
?>