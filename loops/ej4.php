<?php
    /**
     * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal
     * que le corresponde. Cada celda será un enlace a una página que mostrará un fondo de
     * pantalla con el color seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
     *
     * @version 1.0.0
     * @since 02-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     * @todo Hacerlo
     */

    # 6 colores aleatorios
    $color1 = "fff";
    $color2 = "ccc";
    $color3 = "999";
    $color4 = "666";
    $color5 = "333";
    $color6 = "000";

    # Creamos la tabla
    echo $topTable = <<<TOP
        <table border='1'>
            <tr>
                <th>Color</th>
                <th>Valor hexadecimal</th>
            </tr>
        TOP;

    # Creamos las filas
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";

        # Creamos las columnas
        for ($j = 0; $j < 2; $j++) {
            if ($j == 0) {
                echo "<td style=\"background-color: #$color3\"></td>";
            } else {
                echo "<td>#$color3</td>";
            }
        }

        echo "</tr>";
    }
    echo "</table>";

    echo "<a href='github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
