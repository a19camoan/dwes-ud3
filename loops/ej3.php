<?php
    /**
     * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
     *
     * @version 1.0.0
     * @since 02-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    echo "<table border='1'>";
    for ($i=1; $i <= 10; $i++) { 
        echo "<tr style='background-color: ".($i%2==0 ? "lightblue" : "lightgreen")."'>";
        for ($j=1; $j <= 10; $j++) { 
            echo "<td>";
            echo "$j x $i = ".($i*$j);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<a href='github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
