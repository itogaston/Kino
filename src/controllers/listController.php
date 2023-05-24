<?php
require_once "models/movieModel.php";
if(!isset($_GET['title'])){
    require_once "views/homeView.php";
}
else{
    $movieList = Movie::getAllMovies($_GET['title']);
    require_once "views/listView.php";
}
?>