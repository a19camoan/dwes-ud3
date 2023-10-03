<?php
    /**
     * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal
     * que le corresponde. Cada celda será un enlace a una página que mostrará un fondo de
     * pantalla con el color seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
     *
     * @version 1.0.1
     * @since 02-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    # Creamos la tabla
    echo "<table border='1'>";

    # Saltos de 64 para ir sacando colores y generar la tabla con todos los números de 0 a 255 a saltos de 64
    $step = 51;

    for ($i = 0; $i <= 255; $i += $step) {
        echo "<tr>";
        for ($j = 0; $j <= 255; $j += $step) {
            for ($k = 0; $k <= 255; $k += $step) {
                echo "<td style='background-color: rgb($i, $j, $k);'><a href='#'>#" . dechex($i) . dechex($j) . dechex($k) . "</a></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p>No se puede crear la página al hacer click en el enlace porque no se puede hacer con los conocimientos que tengo</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
