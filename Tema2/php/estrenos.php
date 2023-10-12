<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrenos</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <section class="container">
        <header>
            <h1 class="mt-2">Estrenos</h1>
        </header>

        <?php
        //Declaro el array de 5 componentes.
        $peliculas = ["Batman" => mt_rand(0, 99), "Barbie" => mt_rand(0, 99), "Rapido y furioso" => mt_rand(0, 99), "Barbie 2" => mt_rand(0, 99), "Madrid" => mt_rand(0, 99)];

        // Inicializamos con un valor muy bajo para asegurarnos de que cualquier valor en el arreglo sea mayor.
        $cantVistas = -1;
        //Declaro una variable donde guardo la clave de la pelicula mas vista.
        $peliculaMasVista = "";

        //Recorro el array de peliculas y uso un condicional if para guardar la pelicula con mas vistas 
        foreach ($peliculas as $titulo => $vistas) {
            if ($vistas > $cantVistas) {
                $cantVistas = $vistas;
                $peliculaMasVista = $titulo;
            }
        }

        //Calculo el total de vistas.
        $totalVistas=0;
        foreach($peliculas as $titulo => $vistas){
            $totalVistas += $vistas;
        }

        echo "Record semanal: $peliculaMasVista, tuvo: $cantVistas reproducciones. <br>";
        echo("La cantidad total de visualicaciones de todas las peliculas fue: ".$totalVistas);
        ?>

    </section>
</body>

</html>