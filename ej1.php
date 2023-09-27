<?php
    /**
     * Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
     * 
     * @version 1.0.0
     * @since 27-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $num1 = 12;
    $num2 = 14;
    $num3 = 1;

    if ($num1 > $num2) {
        if ($num1 > $num3) {
            if ($num2 > $num3) {
                echo "<p> $num1 $num2  $num3 </p>";
            } else {
                echo "<p> $num1 $num3 $num2 </p>";
            }
        } else {
            echo "<p> $num3 $num1 $num2 </p>";
        }
    } else {
        if ($num2 > $num3) {
            if ($num1 > $num3) {
                echo "<p> $num2 $num1 $num3 </p>";
            } else {
                echo "<p> $num2 $num3 $num1 </p>";
            }
        } else {
            echo "<p> $num3 $num2 $num1 </p>";
        }
    }

    echo "<a href='https://github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
