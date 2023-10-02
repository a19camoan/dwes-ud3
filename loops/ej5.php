<?php
    /**
     * Dado el mes y año almacenados en variables, escribir un programa que muestre el
     * calendario mensual correspondiente. Marcar el día actual en verde y los festivos
     * en rojo.
     *
     * @version 1.0.0
     * @since 02-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $days = 31;
    $month = 2;
    $year = 2024;

    # Averguamos los días del mes:
    switch ($month) {
        case 2:
            $days = (($year % 4) && ($year % 100 || !($year % 400))) ? 28 : 29;
            break;

        case 4:
        case 6:
        case 9:
        case 11:
            $days = 30;
            break;

        default:
            echo "<p>Mes incorrecto</p>";
            break;
    }

    # Escribimos los días de la semana
    echo $topTable = <<<TOP
        <table border='1'>
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
                <th>Domingo</th>
            </tr>
        TOP;

    # Calculamos el número de filas necesarias
    $rowsamount = ceil($days / 7);

    # Creamos las filas
    for ($i = 0; $i < $rowsamount; $i++) {
        echo "<tr>";

        # Creamos las columnas
        for ($j = 0; $j < 7; $j++) {
            if ($day <= $days) {
                if ($day == date("d")) {
                    echo "<td style=\"background-color: green\">" . $day . "</td>";
                } elseif ($j == 6) {
                    echo "<td style=\"background-color: red\">" . $day . "</td>";
                } else {
                    echo "<td>" . $day . "</td>";
                }
                $day++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<a href='github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
