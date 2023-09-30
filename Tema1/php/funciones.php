<?php
        function prcSugerirPelicula($cantidad) {
        include('info.php');
        for($i=0; $i<$cantidad; $i++){
            $peliculasAleatoreas = array_rand($peliculas);
            echo('
            <div class="card m-2" style="width: 18rem;">
                <img src="../img/'.$peliculas[$peliculasAleatoreas].'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$peliculasAleatoreas.'</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>');
            unset($peliculas[$peliculasAleatoreas]);
        }
    }
?>
