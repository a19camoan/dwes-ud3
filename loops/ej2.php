<?php
    /**
     * Sumar los 3 primeros números pares.
     *
     * @version 1.0.0
     * @since 02-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $sum = 0; // Resultado de la suma.
    $count = 0; // Cantidad de números pares sumados.
    $i = 2; // Número a comprobar.

    while ($count < 3) {
        if ($i % 2 == 0) {
            $sum += $i;
            $count++;
        }
        $i++;
    }

    echo "<p>$sum</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
