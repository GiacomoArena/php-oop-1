<?php


class Movies{
  public $title;
  public $director; 
  public $timing = 60;

  public function __construct($_title, $_director, $_timing){
    $this->title = $_title;
    $this->director = $_director;
    $this->timing = $_timing;
  }

  public function getMovieInfo(){
    return 'Title: ' . $this->title . ' Directed by: ' .  $this->director;
  }

}