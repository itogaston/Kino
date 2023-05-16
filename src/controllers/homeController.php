<?php
require_once "models/movieModel.php";

$moviesCarousel = Movie::getAllMovies("Shazam");

require_once "views/homeView.php";
?>