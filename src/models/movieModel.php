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
        $this->cod = $movieData['imdbID'];
        
        if(isset($movieData['Director'])){
            // $this->rating = $movieData['Rating'];
            $this->awards = $movieData['Awards'];
            $this->plot = $movieData['Plot'];
            $this->stars = $movieData['Actors'];
            $this->director = $movieData['Director'];
            $this->writer = $movieData['Writer'];
            $this->runtime = $movieData['Runtime'];
            $this->genre = $movieData['Genre'];
            $this->boxoffice = $movieData['BoxOffice'];
            $this->awards = $movieData['Awards'];
        }
        else{
            $this->rating = "N/A";
            $this->awards = "N/A";
            $this->plot = "N/A";
            $this->stars = "N/A";
            $this->director = "N/A";
            $this->writer = "N/A";
            $this->runtime = "N/A";
            $this->genre = "N/A";
            $this->boxoffice = "N/A";
            $this->awards = "N/A";
        }
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

    public static function get_movie_with_title_and_id($imdb_id, $movie_title) {
    
        $url = "https://www.omdbapi.com";
        
        $request_url = $url . "?i=" . urlencode($movie_title).  "&t=" . urlencode($imdb_id). '&apikey=ce16ecd1';
        
        $response = file_get_contents($request_url);
        $data = json_decode($response, true);
    
        if ($data['Response'] == "True") {
            $movie = new Movie($data);
            return $movie;
        } else {
            return array("Error" => "La llamada a la API falló: " . $data['Error']);
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
    public function getYear() {
        if($this->year != "N/A")
            return $this->year;
        else
            return "-";
    }

    public function getMovieCode() {
        if($this->cod != "N/A")
            return $this->cod;
        else
            return "-";
    }

    public function getMoviePlot() {
        if($this->plot != "N/A")
            return $this->plot;
        else
            return "-";
    }

    public function getMovieStars(){
        if($this->stars != "N/A")
            return $this->stars;
        else
            return "-";
    }
    public function getMoviePoster(){
        if($this->poster != "N/A")
            return $this->poster;
        else
            return "-";
    }

    public function getMovieDirector(){
        if($this->director != "N/A")
            return $this->director;
        else
            return "-";
    }

    public function getMovieWriter(){
        if($this->writer != "N/A")
            return $this->writer;
        else
            return "-";
    }

    public function getMovieRuntime(){
        if($this->runtime != "N/A")
            return $this->runtime;
        else
            return "-";
    }

    public function getMovieGenre(){
        if($this->genre != "N/A")
            return $this->genre;
        else
            return "-";
    }

    public function getMovieBoxOffice(){
        if($this->boxoffice != "N/A")
            return $this->boxoffice;
        else
            return "-";
    }

    public function getMovieAwards(){
        if($this->awards != "N/A")
            return $this->awards;
        else
            return "-";
    }

    public function getMovieRating(){
        if($this->rating != "N/A")
            return $this->rating;
        else
            return "-";
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


    


?>
