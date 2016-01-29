<?php

class First extends Application {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->data['pagebody'] = 'justone'; // this is the view we want shown

    // get the data from the first quote to be shown
    $source = $this->quotes->get(1);
    $this->data['mug'] = $source['mug'];
    $this->data['who'] = $source['who'];
    $this->data['what'] = $source['what'];

    $this->render();
  }

}
