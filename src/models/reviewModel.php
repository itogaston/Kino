<?php

include "singletonDB.php";

function submitReview($movie) {
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $text = $_POST['review'];
    $title = $movie->getMovieCode();

    session_start();

    if(isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        $userId = $_SESSION['id'];
        $insertQuery = "insert into reviews (author, movie, text) values ('$userId', '$title', '$text')";
        if ($queryReturn = $con->query($insertQuery)) {
            header("Location: index.php?page=reviews&action=viewReviewPage&title=".$movie->getMovieTitle()."&imdbID=".$movie->getMovieCode());
        } else {
            echo "<script>alert('DB Insert ERROR');</script>";
        }
    }
    else {
        echo "<script>alert('Log in to submit reviews');</script>";
        header("Refresh:0; url=http://eim-alu-69044.lab.unavarra.es/grupo-ocelote/src/index.php?page=reviews&action=viewReviewPage&title=".$movie->getMovieTitle()."&imdbID=".$movie->getMovieCode());
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