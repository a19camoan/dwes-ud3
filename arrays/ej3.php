<?php
    /**
     * Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos.
     * El resultado debe mostrar nombre y fotografía.
     * 
     * @version 1.0.0
     * @since 03-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $students = array(
        0 => array(
            "name" => "Andrés",
            "photo" => "https://picsum.photos/id/1/200"
        ),
        1 => array(
            "name" => "Antonio",
            "photo" => "https://picsum.photos/id/22/200"
        ),
        2 => array(
            "name" => "Francisco",
            "photo" => "https://picsum.photos/id/27/200"
        ),
        3 => array(
            "name" => "Eladio",
            "photo" => "https://picsum.photos/id/77/200"
        ),
        4 => array(
            "name" => "Jesús",
            "photo" => "https://picsum.photos/id/100/200"
        ),
    );

    $randomNumber = rand(0, 4);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <p>
        <?php
            echo $students[$randomNumber]["name"];
        ?>
    </p>
    <img src="https://picsum.photos/200" alt="Foto de <?php echo $students[$randomNumber]["name"] ?>" title="Foto de <?php echo $students[$randomNumber]["name"] ?>">
</body>
</html>
