<?php

 class Movie {
    protected $titulo;
    protected $year;
    protected $poster;
    protected $cod;
    protected $desc;

    protected $stars;
    // private $db;

    public function __construct($movieData) {
        $this->titulo = $movieData["Title"];
        $this->year = $movieData["Year"];
    }

    private static function get_movie_search($movie_title, $data_type) {

        $url = "http://www.omdbapi.com/?apikey=ce16ecd1";

        $request_url = $url . "&s=" . urlencode($movie_title) . "&r=" . urlencode($data_type);

        // Realizar la llamada a la API y obtener los resultados
        $response = file_get_contents($request_url);
        $data = json_decode($response, true);

        if ($data['Response'] == "True") {
          return $data;

        } else {
          return array("Error" => "La llamada a la API falló: " . $data['Error']);
        }
      }

    public static function getAllMovies($titulo) {
        $productMovies = array();
        $arrayMovies= self::get_movie_search($titulo,'json');

        // TODO ver si error

        $arrayMovies = $arrayMovies['Search'];

        foreach ($arrayMovies as $movie ) {
            $movie = new Movie($movie);
            $productMovies[] = $movie;
        }
        return $productMovies;
    }
    public function getMovieTitle() {
        return $this->titulo;
    }
    public function getYear() {
        return $this->year;
    }

    public function getMovieCode() {
        return $this->cod;
    }

    public function getMovieDesc() {
        return $this->desc;
    }


    public function getMovieStars(){
        return $this->stars;
    }
    public function getMoviePoster(){
        return $this->poster;
    }

 }

?>