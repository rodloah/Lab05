<!DOCTYPE html>
<html>
<head>
    <title>Fábrica de Gaseosas</title>
</head>
<body>
    <h1>Fábrica de Gaseosas</h1>
    <h2>Rebaja de precio y descuentos</h2>
    <form method="post" action="">
        Precio actual de la gaseosa de 3 litros: <input type="number" name="precio_actual" step="0.01"><br>
        Cantidad de gaseosas adquiridas: <input type="number" name="cantidad_adquirida"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

<?php
if(isset($_POST['calcular'])){
    $precio_actual = $_POST['precio_actual'];
    $cantidad_adquirida = $_POST['cantidad_adquirida'];

   
    $nuevo_precio = $precio_actual - ($precio_actual * 0.05);
    $importe_compra = $cantidad_adquirida * $nuevo_precio;
    $importe_descuento = $importe_compra * 0.07;
    $importe_pagar = $importe_compra - $importe_descuento;
    $obsequio_caramelos = $cantidad_adquirida * 2;
    
    echo "<h3>Resultados:</h3>";
    echo "Nuevo precio de la gaseosa: $nuevo_precio<br>";
    echo "Importe de la compra: $importe_compra<br>";
    echo "Importe del descuento: $importe_descuento<br>";
    echo "Importe a pagar: $importe_pagar<br>";
    echo "Obsequio de caramelos: $obsequio_caramelos caramelos<br>";
}
?>
</body>
</html>