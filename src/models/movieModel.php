<?php

 class Movie {
    protected $titulo;
    protected $year;
    protected $poster;
    protected $cod;
    protected $plot;
    protected $director;
    protected $writer;
    protected $awards;
    protected $stars;
    protected $runtime;
    protected $rating;
    protected $boxoffice;
    protected $genre;


    public function __construct($movieData) {

        $this->titulo = $movieData['Title'];
        $this->year = $movieData['Year'];
        $this->poster = $movieData['Poster'];
        //$this->rating = isset($movieData['Rating']) ;
        // $this->awards = $movieData['Awards'];
        // $this->cod = $movieData['imdbID'];
        // $this->plot = $movieData['Plot'];
        // $this->stars = $movieData['Actors'];
        // $this->director = $movieData['Director'];
        // $this->writer = $movieData['Writer'];
        // $this->runtime = $movieData['Runtime'];
        // $this->genre = $movieData['Genre'];
        // $this->boxoffice = $movieData['BoxOffice'];
        // $this->awards = $movieData['Awards'];

    }

    public static function getAllMovies($titulo) {
        $productMovies = array();
        $arrayMovies= get_movie_search($titulo,'json');

        if (is_null($arrayMovies)){
            return $productMovies;
        }
        else{
            $arrayMovies = $arrayMovies['Search'];
            foreach ($arrayMovies as $movie ) {
                $movie = new Movie($movie);
                $productMovies[] = $movie;
            }
            return $productMovies;
        }
    }

    public static function get_movie_info_full_request($imdb_id, $movie_title, $search_type, $release_year) {
        
        $url = "http://www.omdbapi.com/?apikey=ce16ecd1";
        
        $request_url = $url . "&i=" . urlencode($imdb_id) . "&t=" . urlencode($movie_title) . "&type=" . urlencode($search_type) . "&y=" . urlencode($release_year) . "&plot=" . urlencode('full') . "&r=" . urlencode('json');
      
        $response = file_get_contents($request_url);
        $data = json_decode($response, true);
    
        if ($data['Response'] == "True") {
            $movie = new Movie($data);
            return $movie;
        } else {
          return array("Error" => "La llamada a la API falló: " . $data['Error']);
        }
      }
    
    public function getMovieTitle() {
        return $this->titulo;
    }
    public function getYear($titulo) {
        return $this->year;
    }

    public function getMovieCode() {
        return $this->cod;
    }

    public function getMoviePlot() {
        return $this->plot;
    }

    public function getMovieStars(){
        return $this->stars;
    }
    public function getMoviePoster(){
        return $this->poster;
    }

    public function getMovieDirector(){
        return $this->director;
    }

    public function getMovieWriter($titulo,$year){
        return $this->writer;
    }

    public function getMovieRuntime($titulo,$year){
        return $this->runtime;
    }

    public function getMovieGenre($titulo,$year){
        return $this->genre;
    }

    public function getMovieBoxOffice($titulo,$year){
        return $this->boxoffice;
    }

    public function getMovieAwards($titulo,$year){
        return $this->awards;
    }

    public function getMovieRating(){
        return $this->rating;
    }

 }


 function get_movie_search($movie_title, $data_type) {

    $url = "http://www.omdbapi.com/?apikey=ce16ecd1";

    $request_url = $url . "&s=" . urlencode($movie_title) . "&r=" . urlencode($data_type);

    $response = file_get_contents($request_url);
    $data = json_decode($response, true);

    if ($data['Response'] == "True") {
      return $data;
    } 

    }


function get_movie_infoWYear($movie_title, $release_year, $search_type) {

    $url = "http://www.omdbapi.com/?apikey=ce16ecd1";
    
    $request_url = $url . "&t=" . urlencode($movie_title) . "&type=" . urlencode($search_type) . "&y=" . urlencode($release_year) . "&plot=" . urlencode('full') . "&r=" . urlencode('json');
    
    $response = file_get_contents($request_url);
    $data = json_decode($response, true);

    if ($data['Response'] == "True") {
        return $data;
    } else {
        return array("Error" => "La llamada a la API falló: " . $data['Error']);
    }
    
  }


  function get_movie_infoWOYear($movie_title, $search_type) {

    $url = "http://www.omdbapi.com/?apikey=ce16ecd1";
    
    $request_url = $url . "&t=" . urlencode($movie_title) . "&type=" . urlencode($search_type) . "&plot=" . urlencode('long') . "&r=" . urlencode('json');
    
    $response = file_get_contents($request_url);
    $data = json_decode($response, true);

    if ($data['Response'] == "True") {
        return $data;
    } else {
        return array("Error" => "La llamada a la API falló: " . $data['Error']);
    }
    
  }


?>

?>