<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Asignatura</title>
    </head>
    <body>
        <?php
            echo '<form method="post" action=index.php?c=cAsignaturas&m=guardarCrearAsignatura>';
                echo '<label for="nombre">Nombre</label>';
                echo '<input type="text" name="nombre"/>';
                echo '<label for="codhex">Código hexadecimal</label>';
                echo '<input type="text" name="codhex"/>';
                echo '<input type="submit" value="Guardar"/>';
            echo '</form>';
        ?>
    </body>
</html>