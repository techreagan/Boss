<?php 

class Pages {
  public function __construct() {
    // echo 'Pages loaded';
  }

  public function index() {
    
  }

  public function about($id) {
    echo 'This is about ' . $id;
  }
}