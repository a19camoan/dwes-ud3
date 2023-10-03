<?php
    /**
     * Indexar los ejercicios mediante un array.
     * 
     * @version 1.0.0
     * @since 03-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $ejercicios = array(
        "./ej1.php" => "Definir un array que permita almacenar y mostrar la siguiente información.",
        "./ej2.php" => "Indexar los ejercicios mediante un array.",
        "./ej3.php" => "Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos. El resultado debe mostrar nombre y fotografía.",
        "./ej4.php" => "Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres. Almacenar información incluyendo foto y mostrar los menús disponibles.",
        "./ej5.php" => "Mejorar el calendario con un array de los días festivos: colores diferentes, nacionales, comunidad, locales."
    );
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <main>
        <?php
            foreach ($ejercicios as $ejercicio => $descripcion) {
                echo "<p><a href='$ejercicio'>$descripcion</a></p>";
            }
        ?>
        <a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>
    </main>
</body>

</html>
