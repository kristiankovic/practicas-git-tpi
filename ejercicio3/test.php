<?php
echo "Nonse q poner aki tio";

$db_personas = [
    ["Cristian Alexis", "Ventura Ventura", 23],
    ["Carlos Joaquin", "Garcia Magaña", 21],
    ["Edenilson Vladimir", "Sanchez Perez", 21]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 3</title>
</head>

<body>

    <div class="container">
        
        <table>
            <caption>Ejemplo de formulario</caption>
    
            <thead>
                <tr>
                    <th>
                        Nombres
                    </th>
    
                    <th>
                        Apellidos
                    </th>
    
                    <th>
                        Edad
                    </th>
                </tr>
            </thead>
    
            <tbody>

                <?php for($i = 0; $i < count($db_personas); $i++) : ?>

                <tr>
                    <td>
                        <?php echo $db_personas[$i][0];?>
                    </td>

                    <td>
                        <?php echo $db_personas[$i][1]; ?>
                    </td>
                    
                    <td>
                        <?php echo $db_personas[$i][2]; ?>
                    </td>

                </tr>

                <?php endfor;?>

            </tbody>

            <tfoot>

            <?php 
            $edades = 0;

            for($i = 0; $i < count($db_personas); $i++){
                
                $edades += $db_personas[$i][2];
            }

            $promedio_edades = $edades / count($db_personas);

            ?>

            <tr>
                <td>Edad promedio</td>
                <td></td>
                <td>
                    <?php echo round($promedio_edades, 2); ?>
                </td>
            </tr>
            </tfoot>
        </table>
</div>
</body>
</html>