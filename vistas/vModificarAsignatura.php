<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Asignatura</title>
    </head>
    <body>
        <?php
            echo '<form method="post" action=index.php?c=cAsignaturas&m=guardarModifAsignatura>';
                echo '<label for="id">Id</label>';
                echo '<input type="text" name="id" readonly value="'.$_GET["id"].'"/>';
                echo '<label for="nombre">Nombre</label>';
                echo '<input type="text" name="nombre" value="'.$datos["nombre"].'"/>';
                echo '<label for="codhex">Código hexadecimal</label>';
                echo '<input type="text" name="codhex" value="'.$datos["codhex"].'"/>';
                echo '<input type="submit" value="Guardar"/>';
            echo '</form>';
        ?>
    </body>
</html>