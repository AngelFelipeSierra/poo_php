

<?php
    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television 24"',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor Curvo',
            'precio' => 400,
            'disponible' => false
        ]
        ];
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
                    <th>disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $valor):?>
                    <tr>
                        <td><?= $valor['nombre'] ?></td>
                        <td><?= $valor['precio'] ?></td>
                        <td><?= $valor['disponible'] ? 'Disponible' : 'No disponible'  ?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
        </table>
    </main>
</body> 
</html>