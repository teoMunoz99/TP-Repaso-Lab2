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
        $peliculas=["Batman" => mt_rand(0,99),"Barbie" => mt_rand(0,99),"Rapido y furioso" => mt_rand(0,99),"Barbie 2" => mt_rand(0,99),"Madrid" => mt_rand(0,99)];
        //echo("array sin ordenar");
        //echo("<br>");
        print_r($peliculas);
        //echo("<br>");
        //echo("array ordenado");
        echo("<br>");
        //rsort($peliculas);
        print_r($peliculas);
        //$clavePrimerElemento = key($peliculas);
        //echo("La pelicula con mas vistas de esta semana fue: ".$clavePrimerElemento." tuvo: ".$peliculas[0]."cantidad de reproducciones");
        ?>
   
    </section>
</body>
</html>
