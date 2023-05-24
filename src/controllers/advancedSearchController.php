<?php

include __DIR__."/../views/advancedSearchView.php";
include __DIR__."/../views/movieListView.php";
include __DIR__."/../models/advancedSearchModel.php";


if($action == "searchMovie"){

    $movieList = searchMovie();
    require_once "views/listView.php";
    
}
else if($action == "viewAdvancedSearch") {
    viewAdvancedSearch();
}  
else {
    echo "nada";
}

?>