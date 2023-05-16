<?php
include "movieModel.php";

function searchMovie(){

    if (empty($_POST['movieTitle'])) {
        return ['error' => 'El campo "título" es obligatorio.'];
      }
    
    // Recoger los valores de los campos
    $title_input = $_POST['movieTitle'];
    $year_input = $_POST['yearORel'];
    $imbdid_input = $_POST['imbdId'];
    $type_input = $_POST['typeSearch'];

    echo($title_input.$year_input.$imbdid_input.$type_input);

  if((isset($_POST['yearORel']))){
      if (!(isset($_POST['imbdId']))){
        return Movie::get_movie_info_full_request($imbdid_input, $title_input, $type_input, $year_input);
      }
      else{
        return Movie::get_movie_info_full_request($imbdid_input, $title_input, $type_input, $year_input);
      }
    }
  
  else{
    echo("2 \n");
    return Movie::getAllMovies($title_input);
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
