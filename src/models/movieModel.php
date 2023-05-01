<?php
 class Movie {
    protected $name;
    protected $poster;
    protected $cod;
    protected $desc;

    protected $stars;
    // private $db;

    public function __construct() {
        $this->name = "Sharila";
        $this->poster = "https://t2.genius.com/unsafe/504x504/https%3A%2F%2Fimages.genius.com%2F77fba604083998dbbc8106da417c50a0.1000x1000x1.jpg";
        $this->cod = "t123456789";
        $this->desc = "Por no querer ir despacio fue que te subiste al tren
        Sin saber adónde iba y que no tenía vagones
        Yo ya perdí la cuenta de veces que lo soñé
        No puedo estar listo si nunca lo proyecté";
        $this->stars = 4;
        // $this->db = DBConexion::connection();
    }

    public function getMovieName() {
        return $this->name;
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