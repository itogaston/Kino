<?php
require_once "models/movieModel.php";
if(!isset($_GET['title']) || !isset($_GET['imdbID'])){
    require_once "controllers/homeController.php";
}
else{
    $movie = Movie::get_movie_with_title_and_id($_GET['title'], $_GET['imdbID']);
    require_once "views/reviewView.php";
}
?>