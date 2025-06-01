<?php
// Definición
function contar($aArray) {
    $total = 0;
    foreach ($aArray as $elemento) {
        $total++;
    }
    return $total;
}

// Uso
$aNotas = array(9, 8, 9.50, 4, 7, 8);
$aProductos = array("Pan", "Leche", "Huevos");
$aPacientes = array("Juan", "Ana", "Luis", "Carlos");

echo "Cantidad de productos: " . contar($aProductos) . "<br>";
echo "Cantidad de pacientes: " . contar($aPacientes) . "<br>";
echo "Cantidad de notas: " . contar($aNotas) . "<br>";
?>
