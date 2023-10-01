<?php
    /**
     * Script que muestre una lista de enlaces en función del perfil de usuario:
     *   Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
     *   Perfil Usuario: Pagina1, Pagina2
     * 
     * @version 1.0.0
     * @since 01-10-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $rol = "Usuario";

    switch ($rol) {
        case "Administrador":
            echo "<p><a href='#'>Pagina1</a></p>";
            echo "<p><a href='#'>Pagina2</a></p>";
            echo "<p><a href='#'>Pagina3</a></p>";
            echo "<p><a href='#'>Pagina4</a></p>";
            break;
        case "Usuario":
            echo "<p><a href='#'>Pagina1</a></p>";
            echo "<p><a href='#'>Pagina2</a></p>";
            break;
        default:
            echo "<p>No tienes permisos para ver esta página</p>";
            break;
    }

    echo "<a href='github.com/a19camoan/dwes-ud3' target='_blank'>Repositorio</a>";
