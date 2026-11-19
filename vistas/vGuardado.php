<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guardado asignatura</title>
    </head>
    <body>
        <?php
            echo '<p>';
                if($datos){
                    echo 'Guardado con éxito';
                }else{
                    echo 'Error al guardar';
                }
            echo '</p>';
                echo '<p><a href=index.php>
                        <button>Volver</button>
                    </a></p>';
        ?>
    </body>
</html>