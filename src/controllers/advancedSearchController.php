<?php

include __DIR__."/../views/advancedSearchView.php";
include __DIR__."/../models/advancedSearchModel.php";

if($action == "searchMovie"){
    $ListaPeliculas = searchMovie();
    print_r($ListaPeliculas);
    
    //pasar datos a nueva pagina lista de pelis
}
else if($action == "viewAdvancedSearch") {
    viewAdvancedSearch();
}  
else {
    echo "nada";
}

?>