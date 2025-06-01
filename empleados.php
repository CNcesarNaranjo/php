<?php
// Función para calcular sueldo neto
function calcularNeto($bruto) {
    // Supongamos que se descuenta un 17% del sueldo bruto
    return $bruto * 0.83;
}

// Lista de empleados (DNI, Nombre, Sueldo Bruto)
$empleados = [
    ["dni" => "33300123", "nombre" => "David García", "sueldo" => 85000],
    ["dni" => "40874456", "nombre" => "Ana Del Valle", "sueldo" => 90000],
    ["dni" => "67567565", "nombre" => "Andrés Perez", "sueldo" => 100000],
    ["dni" => "75744545", "nombre" => "Victoria Luz", "sueldo" => 70000]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4 text-center">Listado de empleados</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Sueldo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
                <tr>
                    <td><?= $empleado["dni"] ?></td>
                    <td><?= strtoupper($empleado["nombre"]) ?></td>
                    <td><?= number_format(calcularNeto($empleado["sueldo"]), 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><strong>Cantidad de empleados activos: <?= count($empleados) ?></strong></p>
</body>
</html>
