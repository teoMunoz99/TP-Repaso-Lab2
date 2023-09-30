<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Asientos de Cine</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <section class="container">
        <header>
            <h1 class="mt-2">Simulación de Asientos de Cine</h1>
        </header>

        <?php
        // Crear una matriz de 12 filas x 14 columnas
        $matriz = [];

        for ($i = 0; $i < 12; $i++) {
            $matriz[$i] = [];
            for ($j = 0; $j < 14; $j++) {
                $matriz[$i][$j] = [];
            }
        }

        // Llenar la matriz con valores aleatorios 0 (vacío) y 1 (ocupado)

        for ($i = 0; $i < 12; $i++) {
            for ($j = 0; $j < 14; $j++) {
                $matriz[$i][$j] = mt_rand(0, 1);
            }
        }

        // Contar cuántos lugares están vacíos
        $lugaresVacios = 0;

        for ($i = 0; $i < 12; $i++) {
            for ($j = 0; $j < 14; $j++) {
                if ($matriz[$i][$j] == 0) {
                    $lugaresVacios++;
                }
            }
        }

        // Mostrar el total de lugares vacíos
        echo '<p>Total de lugares vacíos:' . $lugaresVacios . ' </p>';

        echo '<p class="p-1 bg-dark text-white w-50">PANTALLA</p>';

        // Mostrar la matriz en forma de tabla con colores
        echo '<table class="table table-bordered">';

        for ($i = 0; $i < 12; $i++) {
            echo("<tr>");
            for ($j = 0; $j < 14; $j++) {
                echo("<td>");

                if ($matriz[$i][$j] == 0) {
                    echo('<img src="../img/rojo.png" alt="">');
                }else{
                    echo('<img src="../img/azul.png" alt="">');
                }
                echo("</td>");
            }
            echo("</tr>");
        }

        echo '</table>';
        ?>

    </section>
</body>

</html>