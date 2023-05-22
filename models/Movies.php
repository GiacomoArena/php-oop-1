<?php
require_once __DIR__ . '/YearAndCover.php';

class Movies{
  public static $mainTitle = 'Movies';
  public $title;
  public $director; 
  public $timing = 60;
  public $YearAndCover;

  public function __construct($_title, $_director, $_timing, YearAndCover $_yearAndCover = null ){
    $this->title = $_title;
    $this->director = $_director;
    $this->timing = $_timing;
    $this->YearAndCover = $_yearAndCover;
  }

  public function getMovieInfo(){
    return 'Title: ' . $this->title . ' Directed by: ' .  $this->director;
  }

}