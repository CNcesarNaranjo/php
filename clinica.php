<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Listado de pacientes</h2>

    <?php
    // Array de pacientes actualizado
    $pacientes = [
        ["DNI" => "33.765.012", "nombre" => "Ana Acuña", "edad" => 45, "peso" => 81.5],
        ["DNI" => "23.684.385", "nombre" => "Gonzalo Bustamante", "edad" => 66, "peso" => 79],
        ["DNI" => "23.684.385", "nombre" => "Juan Irraola", "edad" => 28, "peso" => 79],
        ["DNI" => "23.684.385", "nombre" => "Beatriz Ocampo", "edad" => 50, "peso" => 79],
    ];
    ?>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>DNI</th>
                <th>Nombre y apellido</th>
                <th>Edad</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= htmlspecialchars($paciente["DNI"]) ?></td>
                    <td><?= htmlspecialchars($paciente["nombre"]) ?></td>
                    <td><?= $paciente["edad"] ?></td>
                    <td><?= $paciente["peso"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
