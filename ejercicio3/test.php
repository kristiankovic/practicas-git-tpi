<?php

$compras = [
    ["Manzanas", 4, 1.25],
    ["Pan", 2, 1.50],
    ["Leche", 1, 0.99],
    ["Huevos", 12, 2.75],
    ["Arroz", 1, 1.80],
    ["Detergente", 1, 3.50],
    ["Pasta dental", 2, 2.20],
    ["Shampoo", 1, 4.75],
    ["Jabón líquido", 2, 3.10],
    ["Papel higiénico", 6, 5.60],
    ["Cereal", 1, 3.90],
    ["Aceite vegetal", 1, 2.95],
    ["Café molido", 1, 4.20],
    ["Azúcar", 1, 1.60],
    ["Sal", 1, 0.85]
];

$subtotal = 0;
foreach($compras as $producto){
    $subtotal += $producto[1] * $producto[2];
}

$iva = $subtotal + ($subtotal * 0.13);

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
            <caption>Carrito de compras</caption>

            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($compras as $producto) : ?>

                    <tr>
                        <td><?= $producto[0] ?></td>
                        <td><?= $producto[1] ?></td>
                        <td><?= "$" . $producto[2] ?></td>

                        <?php if($producto[1] >= 5){
                            $descuento = ($producto[2] * $producto[1]) * 0.05;

                            $total = $producto[2] * $producto[1] - $descuento;

                            echo "<td> \${$total} - 5% desc.</td>";
                        }
                        
                        else{
                            $total = $producto[2] * $producto[1];
                            echo "<td> \${$total} </td>";
                        }
                        ?>
                    </tr>

                <?php endforeach; ?>

            </tbody>

            <tfoot>


                <tr>
                    <td colspan="3">Subtotal</td>
                    <td><? echo "$" . $subtotal; ?></td>
                </tr>
                <tr>
                    <td colspan="3">Subtotal + IVA 13%</td>
                    <td><?= "$" . round($iva, 2); ?></td>
                </tr>


            </tfoot>

        </table>
    </div>

</body>

</html>