<?php
require_once "models/movieModel.php";

$moviesCarousel = Movie::getAllMovies("Test");

require_once "views/homeView.php";
?>