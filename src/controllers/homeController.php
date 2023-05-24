<?php
require_once "models/movieModel.php";

$moviesCarousel = Movie::getAllMovies("Test");
$showcaseMovie = Movie::getAllMovies("case")[0];

require_once "views/homeView.php";
?>
