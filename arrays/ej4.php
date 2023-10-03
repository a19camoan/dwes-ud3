<?php
    /**
     * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
     * Almacenar información incluyendo foto y mostrar los menús disponibles.
     * Mostrar el precio del menú suponiendo que éste se calcula sumando el precio
     * de cada uno de los platos incluidos y con un descuento del 20 %.
     * 
     * @version 1.0.0
     * @since 03-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $discount = 0.2;

    $dishes = array(
        "first" => array(
            array(
                "name" => "Ensalada",
                "photo" => "https://picsum.photos/200",
                "price" => 5
            ),
            array(
                "name" => "Sopa",
                "photo" => "https://picsum.photos/200",
                "price" => 3
            ),
            array(
                "name" => "Gazpacho",
                "photo" => "https://picsum.photos/200",
                "price" => 4
            )
        ),
        "second" => array(
            array(
                "name" => "Filete de ternera",
                "photo" => "https://picsum.photos/200",
                "price" => 10
            ),
            array(
                "name" => "Pollo asado",
                "photo" => "https://picsum.photos/200",
                "price" => 8
            ),
            array(
                "name" => "Pescado",
                "photo" => "https://picsum.photos/200",
                "price" => 9
            ),
            array(
                "name" => "Hamburguesa",
                "photo" => "https://picsum.photos/200",
                "price" => 7
            ),
            array(
                "name" => "Pizza",
                "photo" => "https://picsum.photos/200",
                "price" => 8
            )
        ),
        "desserts" => array(
            array(
                "name" => "Tarta de queso",
                "photo" => "https://picsum.photos/200",
                "price" => 3
            ),
            array(
                "name" => "Tarta de chocolate",
                "photo" => "https://picsum.photos/200",
                "price" => 3
            ),
            array(
                "name" => "Helado",
                "photo" => "https://picsum.photos/200",
                "price" => 2
            )
        )
    );

    $menu = array(
        $dishes["first"][rand(0, 2)],
        $dishes["second"][rand(0, 4)],
        $dishes["desserts"][rand(0, 2)]
    );
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h2>Precio del menú</h2>
    <?php
        $total = 0;
        foreach ($menu as $dish) {
            echo "<p>{$dish["name"]}: {$dish["price"]}€</p>";
            $total += $dish["price"];
        }
        echo "<p>Total: $total €</p>";
        echo "<p>Total con descuento: " . ($total - ($total * $discount)) . " €</p>";
    ?>
    <a href="https://github.com/a19camoan/dwes-ud3" target="_blank"><p>Repositorio</p></a>
</body>

</html>
