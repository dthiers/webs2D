<?php

class Home extends Controller {

  public function index($name = '')
  {
    // Door deze functie aan te roepen krijg je van de Controller een object terug
    $user = $this->model('User');
    $user->name = $name;

    $this->view('home/index', ['name' => $user->name]);
  }


}
