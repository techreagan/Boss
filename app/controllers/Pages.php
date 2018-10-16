<?php 

class Pages extends Controller {
  public function __construct() {
    // echo 'Pages loaded';
  }

  public function index() {
    $this->view('hello');
  }

  public function about($id) {
    echo 'This is about ' . $id;
  }
}