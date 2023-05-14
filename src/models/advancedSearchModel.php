<?php
include "movieModel.php";

function searchMovie(){

    if (empty($_POST['movieTitle'])) {
        return ['error' => 'El campo "título" es obligatorio.'];
      }
    
    // Recoger los valores de los campos
    $title_input = $_POST['movieTitle'];
    $year_input = isset($_POST['yearORel']) ? $_POST['yearORel'] : null;
    $imbdid_input = isset($_POST['imbdid_input']) ? $_POST['imbdid_input'] : null;
    $type_input = isset($_POST['typeSearch']) ? $_POST['typeSearch'] : null;

    echo($title_input+$year_input+$imbdid_input+$type_input );

      
    if (($year_input === null) && ($imbdid_input === null) && ($type_input === null)) {
        return Movie::getAllMovies($title_input);
    }
    else{
        return Movie::get_movie_info_full_request($imbdid_input,$title_input,$type_input,$year_input);
    }
    
      /* SI SE PREFIERE DEVOLVER ARRAY CON RESUTLTADOS SINMAS
      return [
        'movieTitle' => $title_input,
        'yearORel' => $year_input,
        'imbdid_input' => $imbdid_input,
        'typeSearch' => $type_input
    
      ];
      */
}




?>
