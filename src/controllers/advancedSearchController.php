<?php

include __DIR__."/../views/loginView.php";
include __DIR__."/../models/advancedSearchModel.php";
include __DIR__."/../models/movieModel.php";

if($action == "searchMovie"){
    $ListaPeliculas = searchMovie();
    //pasar datos a nueva pagina lista de pelis
}
else if($action == "viewAdvancedSearch") {
    viewAdvancedSearch();
}  
else {
    echo "nada";
}


?>