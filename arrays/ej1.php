<?php
    /**
     * Definir un array que permita almacenar y mostrar la siguiente información.
     *   a. Meses del año.
     *   b. Tablero para jugar al juego de los barcos.
     *   c. Nota de los alumnos de 2º DAW para el módulo DWES.
     *   d. Verbos irregulares en inglés.
     *   e. Información sobre continentes, países, capitales y banderas.
     * 
     * @version 1.0.0
     * @since 03-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    # Meses del año
    $months = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    # Tablero para jugar al juego de hundir la flota
    $board = array(
        "A" => array(1 => "A1", 2 => "A2", 3 => "A3", 4 => "A4", 5 => "A5"),
        "B" => array(1 => "B1", 2 => "B2", 3 => "B3", 4 => "B4", 5 => "B5"),
        "C" => array(1 => "C1", 2 => "C2", 3 => "C3", 4 => "C4", 5 => "C5"),
        "D" => array(1 => "D1", 2 => "D2", 3 => "D3", 4 => "D4", 5 => "D5"),
        "E" => array(1 => "E1", 2 => "E2", 3 => "E3", 4 => "E4", 5 => "E5")
    );

    # Nota de los alumnos de 2º DAW para el módulo DWES
    $grades = array(
        array("nombre" => "Andrés", "nota" => 8),
        array("nombre" => "Juan", "nota" => 9),
        array("nombre" => "Pedro", "nota" => 10),
        array("nombre" => "Luis", "nota" => 4),
        array("nombre" => "Antonio", "nota" => 5)
    );

    # Verbos irregulares en inglés
    $verbs = array(
        "eat" => array("ate", "eaten"),
        "to be" => array("was", "been"),
        "do" => array("did", "done"),
        "go" => array("went", "gone"),
        "have" => array("had", "had"),
        "make" => array("made", "made"),
    );

    # Información sobre continentes, países, capitales y banderas
    $countries = array(
        "Europa" => array(
            "España" => array(
                "capital" => "Madrid",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png"
            ),
            "Francia" => array(
                "capital" => "París",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png"
            ),
            "Alemania" => array(
                "capital" => "Berlín",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/1200px-Flag_of_Germany.svg.png"
            ),
            "Portugal" => array(
                "capital" => "Lisboa",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/1200px-Flag_of_Portugal.svg.png"
            ),
            "Italia" => array(
                "capital" => "Roma",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png"
            ),
            "Rumanía" => array(
                "capital" => "Bucarest",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/1200px-Flag_of_Romania.svg.png"
            )
        ),
        "Asia" => array(
            "Arabia Saudita" => array(
                "capital" => "Riad",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/1200px-Flag_of_Saudi_Arabia.svg.png"
            ),
            "China" => array(
                "capital" => "Pekín",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/1200px-Flag_of_the_People%27s_Republic_of_China.svg.png"
            ),
            "India" => array(
                "capital" => "Nueva Delhi",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png"
            ),
            "Filipinas" => array(
                "capital" => "Manila",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png"
            ),
            "Iraq" => array(
                "capital" => "Bagdad",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Flag_of_Iraq.svg/1200px-Flag_of_Iraq.svg.png"
            ),
            "Mongolia" => array(
                "capital" => "Ulán Bator",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Mongolia.svg/1200px-Flag_of_Mongolia.svg.png"
            )
        ),
        "América" => array(
            "Estados Unidos" => array(
                "capital" => "Washington D. C.",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/1200px-Flag_of_the_United_States.svg.png"
            ),
            "Canadá" => array(
                "capital" => "Ottawa",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/1200px-Flag_of_Canada_%28Pantone%29.svg.png"
            ),
            "México" => array(
                "capital" => "Ciudad de México",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/1200px-Flag_of_Mexico.svg.png"
            ),
            "Argentina" => array(
                "capital" => "Buenos Aires",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1200px-Flag_of_Argentina.svg.png"
            ),
            "Brasil" => array(
                "capital" => "Brasilia",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1200px-Flag_of_Brazil.svg.png"
            ),
            "Chile" => array(
                "capital" => "Santiago de Chile",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/1200px-Flag_of_Chile.svg.png"
            )
        ),
        "África" => array(
            "Argelia" => array(
                "capital" => "Argel",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/1200px-Flag_of_Algeria.svg.png"
            ),
            "Angola" => array(
                "capital" => "Luanda",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Flag_of_Angola.svg/1200px-Flag_of_Angola.svg.png"
            ),
            "Benín" => array(
                "capital" => "Porto Novo",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Flag_of_Benin.svg/1200px-Flag_of_Benin.svg.png"
            ),
            "Burkina Faso" => array(
                "capital" => "Uagadugú",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Flag_of_Burkina_Faso.svg/1200px-Flag_of_Burkina_Faso.svg.png"
            ),
            "Cabo Verde" => array(
                "capital" => "Praia",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flag_of_Cape_Verde.svg/1200px-Flag_of_Cape_Verde.svg.png"
            ),
            "Camerún" => array(
                "capital" => "Yaundé",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/1200px-Flag_of_Cameroon.svg.png"
            )
        ),
        "Oceanía" => array(
            "Australia" => array(
                "capital" => "Canberra",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/1200px-Flag_of_Australia_%28converted%29.svg.png"
            ),
            "Nueva Zelanda" => array(
                "capital" => "Wellington",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/1200px-Flag_of_New_Zealand.svg.png"
            ),
            "Fiyi" => array(
                "capital" => "Suva",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Fiji.svg/1200px-Flag_of_Fiji.svg.png"
            ),
            "Islas Marshall" => array(
                "capital" => "Majuro",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flag_of_the_Marshall_Islands.svg/1200px-Flag_of_the_Marshall_Islands.svg.png"
            ),
            "Islas Salomón" => array(
                "capital" => "Honiara",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Flag_of_the_Solomon_Islands.svg/1200px-Flag_of_the_Solomon_Islands.svg.png"
            ),
            "Papúa Nueva Guinea" => array(
                "capital" => "Puerto Moresby",
                "bandera" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Flag_of_Papua_New_Guinea.svg/1200px-Flag_of_Papua_New_Guinea.svg.png"
            )
        )
    );
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <main>
        <h2>Array de meses</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Índice</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($months as $key => $month) {
                        echo "<tr>";
                        echo "<td>$key</td>";
                        echo "<td>$month</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h2>Array de tablero</h2>
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <?php
                        foreach ($board["A"] as $key => $value) {
                            echo "<th>$key</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($board as $key => $value) {
                        echo "<tr>";
                        echo "<td><strong>$key</strong></td>";
                        foreach ($value as $key2 => $value2) {
                            echo "<td>$value2</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h2>Array de notas</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($grades as $key => $value) {
                        echo "<tr>";
                        echo "<td>$value[nombre]</td>";
                        echo "<td>$value[nota]</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h2>Array de verbos</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Verbo</th>
                    <th>Pasado</th>
                    <th>Participio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($verbs as $key => $value) {
                        echo "<tr>";
                        echo "<td>$key</td>";
                        echo "<td>$value[0]</td>";
                        echo "<td>$value[1]</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <h2>Array de países</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Continente</th>
                    <th>País</th>
                    <th>Capital</th>
                    <th>Bandera</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($countries as $key => $country) {
                        foreach ($country as $key2 => $value) {
                            echo "<tr>";
                            echo "<td>$key</td>";
                            echo "<td>$key2</td>";
                            echo "<td>$value[capital]</td>";
                            echo "<td><img src='$value[bandera]' alt='Bandera de $key2' width='100px'></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>

        <p><a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a></p>
    </main>
</body>

</html>
