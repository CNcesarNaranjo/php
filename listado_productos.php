<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array( "nombre" => "Smart TV\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "550324DF",
    "stock" => 60,
    "precio" => 58.000,
);
$aProductos[] = array( "nombre" => "Samsung Galaxi A30",
    "marca" => "Samsung",
    "modelo" => "A30",
    "stock" => 0,
    "precio" => 22.000,
);
$aProductos[] = array( "nombre" => "Aire Acondicionado Split Inverter Frio/ Calor Surrey 2900f",
    "marca" => "Surrey",
    "modelo" => "550324DF",
    "stock" => 5,
    "precio" => 45.000,
);








?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Listado Productos</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                   <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                   </thead>
                   <tbody>
                        <tr>
                            <td><?php echo $aProductos [0]["nombre"]; ?></td>
                            <td><?php echo $aProductos [0]["marca"]; ?></td>
                            <td><?php echo $aProductos [0]["modelo"]; ?></td>
                            <td><?php echo $aProductos [0]["stock"] > 10 ? "Hay Stock" : ($aProductos[0] ["stock"] > 0 && $aProductos [0] ["stock"] <= 10? "Poco Stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos [0]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar </button></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos [1]["nombre"]; ?></td>
                            <td><?php echo $aProductos [1]["marca"]; ?></td>
                            <td><?php echo $aProductos [1]["modelo"]; ?></td>
                            <td><?php echo $aProductos [1]["stock"]> 10 ? "Hay Stock" : ($aProductos[1] ["stock"] > 0 && $aProductos [1] ["stock"] <= 10? "Poco Stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos [1]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar </button></td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos [2]["nombre"]; ?></td>
                            <td><?php echo $aProductos [2]["marca"]; ?></td>
                            <td><?php echo $aProductos [2]["modelo"]; ?></td>
                            <td><?php echo $aProductos [2]["stock"]> 10 ? "Hay Stock" : ($aProductos[2] ["stock"] > 0 && $aProductos [2] ["stock"] <= 10? "Poco Stock" : "No hay stock"); ?></td>
                            <td><?php echo $aProductos [2]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar </button></td>
                        </tr>

                   </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>