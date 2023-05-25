<?php

include "singletonDB.php";

function submitReview($movie) {
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $text = $_POST['review'];
    $title = $movie->getMovieCode();

    $insertQuery = "insert into reviews (author, movie, text) values (1, '$title', '$text')";

    if ($queryReturn = $con->query($insertQuery)) {
        header("Location: index.php?page=reviews&action=viewReviewPage&title=".$movie->getMovieTitle()."&imdbID=".$movie->getMovieCode());
    } else {
        echo "<script>alert('DB Insert ERROR');</script>";
    }
}

function getReviews($movie){
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $title = $movie->getMovieCode();

    $selectQuery = "select userName,text from reviews inner join users on reviews.author = users.id where movie = '$title'";
    $reviews = array();
    if ($reviewsQueryReturn = $con->query($selectQuery)) {
        while($dataReviews = $reviewsQueryReturn->fetch_assoc()) {
            array_push($reviews, $dataReviews);
        }
    } 
    else {
        echo "<script>alert('DB Select ERROR');</script>";
    }
    return $reviews;
} 

?>