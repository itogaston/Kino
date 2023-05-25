<?php

function submitReview($movie) {
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $text = $_POST['review'];

    $insertQuery = "insert into reviews (author, movie, text) values (1, ".$movie->getMovieCode().", ".$text.")";

    echo $insertQuery;
    if ($queryReturn = $con->query($insertQuery)) {
        header("Location: index.php?page=reviews&action=viewReviewPage&title=".$movie->getMovieTitle()."&imdbID=".$movie->getMovieCode());
    } else {
        echo "<script>alert('DB Select ERROR');</script>";
    }
}

function getReviews($movie){
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();

    $selectQuery = "select * from reviews where movie = ".$movie->getMovieCode();

    if ($reviewsQueryReturn = $con->query($selectQuery)) {
        if ($dataReviews = $reviewsQueryReturn->fetch_assoc()) {
            for($i = 0; i < length($dataReviews); $i++) {
                $authorId = $dataReviews[$i]["author"];
                $text = $dataReviews[$i]["text"];
                $selectQuery = "select * from users where id = '$authorId'";
                if ($userqueryReturn = $con->query($selectQuery)) {
                    if ($dataUser = $queryReturn->fetch_assoc()) {
                        $author = $dataUser["userName"];
                    }
                }  
            } 
        }
        else {
            echo "<script>alert('Incorrect query');</script>";
        }
    } 
    else {
        echo "<script>alert('DB Select ERROR');</script>";
    }
} 

?>