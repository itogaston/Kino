<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/css/base.css" rel="stylesheet">
    <link href="../src/css/reviewSt.css" rel="stylesheet">
    <title><?php echo $movie->getMovieTitle() ?></title>
</head>
<body>
    <div class="movie">
        <div class="movieInfo">
            <img alt=<?php echo $movie->getMovieTitle() ?> class="movieImg" src=<?php echo $movie->getMoviePoster()?>>
            <div class="movieText">
                <div class="headerDiv"><h1><?php echo $movie->getMovieTitle()?></h1></div>
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
                <img class="userIcon" src="../src/assets/user_icon.svg">
                <div class="text">
                    <h3 class="author">Batman420</h3>
                    <p class="bodyText">
                        Mierdon de pelicula *fueguito*
                    </p>
                </div>
            </div>
        </div>
        <div class="writeReview" id="reviewText">
            <form action="index.php?accion=login&id=2" method="post">
                <button type="submit" class="submitButton" value="Search">
                <svg class="submitButtonImg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                </button>
                <div class="inputText">
                    <textarea rows="1" id="input" type="text" name="review" placeholder="Write review..." required></textarea>
                </div>
            </form>
        </div>
    </div>
    <script src="../src/js/reviews.js"></script>
</body>
</html>
