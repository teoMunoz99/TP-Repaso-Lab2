<?php
   
        include 'funciones.php';
        $ruta = '../';
        include 'header.php';

        if(!empty($_GET['nombre']) && !empty($_GET['cantidad'])){
                $nombre = $_GET['nombre'];
                $cantidad = $_GET['cantidad'];
        }else{
                echo("Error al cargar los datos");
        }

        // Muestra el mensaje de bienvenida
        echo '<h2>Bienvenid@ '.$nombre.' , tenemos estas sugerencias para ti:</h2>';
        
        // no modificar
        echo '<article class="d-flex flex-wrap justify-content-center">';
        
        // Invoca la función prcSugerirPelicula 
        echo("<section class='d-flex mt-5 flex-wrap justify-content-center'>");
        prcSugerirPelicula($cantidad);
        echo("</section>");
        
        include '../php/footer.php';
?>
