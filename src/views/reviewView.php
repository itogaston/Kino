<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/base.css" rel="stylesheet">
    <link href="../css/reviewSt.css" rel="stylesheet">
    <title><?php echo $movie->getMovieTitle() ?></title>
</head>
<body>
    <div class="movie">
        <div class="movieInfo">
            <img class="movieImg" src=<?php echo $movie->getMoviePoster()?>>
            <div class="movieText">
                <div class="headerDiv"><h1><?php echo $movie->getMovieTitle(); ?>></h1></div>
                <h3>Directed by: <?php echo $movie->getMovieDirector()?></h3>
                <h3>Starring: <?php echo $movie->getMovieStars() ?></h3>
            </div>  
        </div>
        <div class="synopsis">
            <p>
                <?php echo $movie->getMoviePlot() ?>
            </p>
        </div>
    </div>
    <div class="reviewRelated">
        <div class="reviews">
            <div class="rev">
                <img class="userIcon" src="../assets/user_icon.svg">
                <div class="text">
                    <h1 class="author">Batman420</h1>
                    <p class="bodyText">
                        Mierdon de pelicula *fueguito*
                    </p>
                </div>
            </div>
            <div class="rev">
                <img class="userIcon" src="../assets/user_icon.svg">
                <div class="text">
                    <h1 class="author">Batman420</h1>
                    <p class="bodyText">
                        Mierdon de pelicula *fueguito* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadafaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </p>
                </div>
            </div>
            <div class="rev">
                <img class="userIcon" src="../assets/user_icon.svg">
                <div class="text">
                    <h1 class="author">Batman420</h1>
                    <p class="bodyText">
                        No amigo, no. Lo dejaste en el suelo. Si la muerte se pudiera representar por niveles como los pisos del infierno, tendrían que crear al menos 5829 niveles por debajo del último para meterle a él. ¿Eres acaso consciente del poder de humillación que tenía ese insulto? De hecho, es tan ingenioso que iba a llamar a la policía al ser testigo de un homicidio, pero al ver la estructura tán elaborada y la complejidad de tu insulto, preferí no decir nada para conservar este arma letal como un secreto. En un caso hipotético en el que hubiera llamado al FBI o relacionados y les hubiera explicado el caso, habrían venido todos los oficiales de la Tierra para detenerte, y te habrían puesto una cadena perpetua múltiple con tortura incluída; es decir, después de la muerte te revivirían para que siguieres cumpliendo la condena. Ahora que soy consciente de la existencia de estas palabras malherientes, temeré toda mi vida que tú u otra persona utilicen estos versos prohibidos por segunda vez y le pongan un fin al universo tal y como lo conocemos.
                    </p>
                </div>
            </div>
            <div class="rev">
                <img class="userIcon" src="../assets/user_icon.svg">
                <div class="text">
                    <h1 class="author">Batman420</h1>
                    <p class="bodyText">
                        Mierdon de pelicula *fueguito* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadafaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    </p>
                </div>
            </div>
        </div>
        <div class="writeReview" id="reviewText">
            <form action="index.php?accion=login&id=2" method="post">
                <div class="inputText">
                    <textarea rows="1" id="input" type="text" name="review" placeholder="Write review..." required></textarea>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/reviews.js"></script>
</body>
</html>
