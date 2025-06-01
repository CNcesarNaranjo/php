<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





function calcularSueldoNeto($sueldoBruto) {
    $descuento = $sueldoBruto * 0.17;
    $sueldoNeto = $sueldoBruto - $descuento;
    return $sueldoNeto;
}

// Uso de la función con sueldo bruto de $80.000
$sueldoBruto = 80000;
$sueldoNeto = calcularSueldoNeto($sueldoBruto);

echo "El sueldo neto es: $" . number_format($sueldoNeto, 2, ',', '.');



?>