<?php

$db_productos = [

    "Tecnología" =>

    [
        ["Laptop",      5,  899.99],
        ["Mouse",       20, 15.50],
        ["Teclado",     15, 25.00],
        ["Monitor",     8,  199.99],
        ["Impresora",   4,  120.00],
        ["Router",      10, 45.75],
        ["USB 64GB",    30, 12.90],
        ["Auriculares", 18, 29.99],
        ["Webcam",      6,  55.00],
        ["Tablet",      7,  250.00]
    ],

    "Útiles escolares" =>

    [
        ["Lápiz", 100, 0.25],
        ["Cuaderno", 50, 1.50],
        ["Borrador", 80, 0.40],
        ["Marcador", 60, 0.90],
        ["Tijeras", 30, 2.75],
        ["Resaltador", 45, 1.20],
        ["Pegamento", 70, 0.80],
        ["Corrector líquido", 40, 1.10],
        ["Regla 30cm", 55, 0.95],
        ["Clip metálico (caja)", 25, 1.60]
    ]
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
                        Producto
                    </th>

                    <th>
                        Stock
                    </th>

                    <th>
                        Precio
                    </th>
                </tr>

            </thead>

            <tbody>

                <?php foreach($db_productos as $categoria => $productos) : ?>
                    <tr>
                        <th colspan="3"> <?= $categoria ?></th>
                    </tr>

                    <?php foreach($productos as $producto) : ?>
                    <tr>
                        <td><?= $producto[0] ?></td>
                        <td><?= $producto[1] ?></td>
                        <td><?= $producto[2] ?></td>

                    </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</body>

</html>