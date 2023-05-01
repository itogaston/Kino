<?php
require_once "models/movieModel.php";

$movies = Movie::getAllMovies("Shazam");

require_once "views/homeView.php";
?>