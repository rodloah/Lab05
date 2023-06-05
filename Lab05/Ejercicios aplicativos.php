<!DOCTYPE html>
<html>
<head>
    <title>Analizar, diseñar y desarrollar</title>
</head>
<body>
    <p>Indicar datos para mostrar su beneficios y sueldo</p>
    <form method="post" action="">
        Nombre:<br> <input type="text" name="nom"><br>
        Importe total vendido:<br> <input type="num" name="import"><br>
        N° de Hijos:<br> <input type="text" name="hijos"><br>
        Resultado :<br>
        <input type="submit" name="producto" value="Calcular" >
        <input type="reset" name="Cancelar" value="Cancelar" >
    </form>


<?php

$import=$_POST['import'];
$num=$_POST['hijos'];
$nombre=$_POST['nom'];
$comision=$import*0.075;
$boni=$num*50;
$suel=600+$boni+$comision;
$descu=$suel*0.11;
echo "Bienvenido ".$nombre." sus beneficios son:"."<br>";
echo "Su comision es de: S/" .$comision."<br>";
echo "Su bonificacion familiar es de: S/" .$boni."<br>";
echo "Su sueldo bruto del mes es: ".$suel."<br>";
echo "Descuento por vendedor ".$descu."<br>";
echo "Sueldo neto del mes: ".$suel-$descu."<br>";

?>
</body>
</html>