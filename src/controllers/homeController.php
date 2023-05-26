<?php
require_once "models/movieModel.php";

$moviesCarousel = Movie::getAllMovies("Test");
$showcaseMovie = Movie::getAllMovies("case")[0];


session_start();
$logged = isset($_SESSION['user']);

require_once "views/homeView.php";
?>
