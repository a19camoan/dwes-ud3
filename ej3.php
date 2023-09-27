<?php
    /**
     * Carga fecha de nacimiento en variables y calcula la edad.
     * 
     * @version 1.0.0
     * @since 27-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $days = 26;
    $month = 9;
    $year = 2000;

    $currentDay = date("d");
    $currentMonth = date("m");
    $currentYear = date("Y");

    $age = $currentYear - $year;

    if ($currentMonth < $month || ($currentMonth == $month && $currentDay < $days)) {
        $age--;
    };

    echo "<p>Tienes " . $age . " años.</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
