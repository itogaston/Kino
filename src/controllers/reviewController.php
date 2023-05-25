<?php

include __DIR__."/../models/reviewModel.php";

include __DIR__."/../models/movieModel.php";

if(!isset($_GET['title']) || !isset($_GET['imdbID'])){
    require_once "controllers/homeController.php";
}
else{
    $movie = Movie::get_movie_with_title_and_id($_GET['title'], $_GET['imdbID']);
    if($action == "submitReview"){
        submitReview($movie);
    }
    else if($action == "viewReviewPage") {
        //getReviews($movie);
        require_once "views/reviewView.php";  
    }  
    else {
        echo "nada";
    } 
}
?>