<?php
    /**
     * Carga en variables mes y año e indica el número de días del mes.
     * Utiliza la estructura de control switch.
     * 
     * @version 1.0.0
     * @since 27-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $days = 31;
    $month = 2;
    $year = 2024;

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

    echo "<p>El mes $month tiene $days días en $year.</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
