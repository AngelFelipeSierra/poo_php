<?php 
    require_once('Productos.php');
    $producto = array(
        new Productos('Jose Manuel', 1000, true, 1),
        new Productos('Manuel', 2000, false, 2),
        new Productos('Jose', 5000, true, 5),
    )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>estado</th>
                    <th>cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($producto as $valor):?>
                    <tr>
                        <td><?= $valor->getNombre() ?></td>
                        <td><?= $valor->getPrecio()?></td>
                        <td><?= $valor->getEstado() ? 'Disponible' : 'No disponible'  ?></td>
                        <td><?= $valor->getCantidad()?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
        </table>
    </main>
</body>
</html>