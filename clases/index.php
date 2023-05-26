<?php
    require_once('clase.php');
    $alumno = new Persona('Jose Manuel', 17);
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
        <pre class="resultado">
            <?php echo $alumno->getNombre(); ?>
            <?php echo $alumno->getEdad(); ?>
            <?php echo $alumno->saludar(); ?>
        </pre>  
    </main>
</body>
</html>