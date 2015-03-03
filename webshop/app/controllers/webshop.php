<?php

class Webshop extends Controller {

  public function index($name = ''){

    $this->view('webshop/index', ['name' => 'je moeder']);
  }

}
