<?php

include __DIR__."/../views/movieListView.php";
include __DIR__."/../models/movieListModel.php";

if($action == "viewMovieList") {
    viewMovieList();
}    
else {
    echo "nada";
}

?>