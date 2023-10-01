<?php
    /**
     * Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la estación del
     * año en la que nos encontremos y un color de fondo en función de la hora del día.
     * 
     * @version 1.0.1
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
    }

    $season = "primavera";
    if ($currentMonth >= 6 && $currentMonth < 9) {
        $season = "verano";
    } elseif ($currentMonth >= 9 && $currentMonth < 12) {
        $season = "otoño";
    } elseif ($currentMonth >= 12 || $currentMonth < 3) {
        $season = "invierno";
    }

    # 3 tramos horarios: mañana, tarde, noche.
    $currentHour = date("H");
    $time = "#a490fc";

    if ($currentHour >= 7 && $currentHour < 12) {
        $time = "#9ec3ff";
    } elseif ($currentHour >= 12 && $currentHour < 20) {
        $time = "#fcff9e";
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <header style="padding: 5%; background-image: url(./img/<?php echo "$season.jpg)" ?>;">
        <h1>Estación: <?php echo "$season" ?></h1>
    </header>

    <main style="background-color: <?php echo "$time" ?>;">
        <p>Tienes <?= $age ?> años.</p>
        <a href="github.com/a19camoan/dwes-ud3" target='_blank'>Repositorio</a>
    </main>
</body>

</html>
