<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Horario</title>
    </head>
    <body>
        <?php
            echo '<table>';
                echo '<tr>';
                    echo '<th>Id</th>';
                    echo '<th>Nombre</th>';
                    echo '<th>Código hexadecimal</th>';
                echo '</tr>';
                foreach($datos as $asignatura){
                    echo '<tr>';
                        echo '<td>';
                            echo $asignatura["idAsignatura"];
                        echo '</td>';
                        echo '<td>';
                            echo $asignatura["nombre"];
                        echo '</td>';
                        echo '<td>';
                            echo $asignatura["codhex"];
                        echo '</td>';
                        echo '<td>';
                            echo '<a href=index.php?c=cAsignaturas&m=modificarAsignatura&id='.$asignatura["idAsignatura"].'><button>Modificar</button></a>';
                        echo '</td>';
                        echo '<td>';
                            echo '<a href=index.php?c=cAsignaturas&m=eliminarAsignatura&id='.$asignatura["idAsignatura"].'><button>Eliminar</button></a>';
                        echo '</td>';
                    echo '</tr>';
                }
                echo '<tr>';
                    echo '<td colspan="4">';
                        echo '<a href=index.php?c=cAsignaturas&m=crearAsignatura>';
                            echo '<button>';
                                echo 'Añadir';
                            echo '</button>';
                        echo '</a>';
                    echo '</td>';
                echo '</tr>';
            echo '<table>';
        ?>
    </body>
</html>