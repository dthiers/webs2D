<?php

// hier roep je je instantie vandaan
class App {

  protected $controller = 'home';

  protected $method = 'index';

  protected $params = [];

  public function __construct() {

    $url = $this->parseUrl();


    if(file_exists('../app/controllers/'.$url[0].'.php')){
      // hier kijk je of de controller bestaat, want dan vervang je die daarmee
      $this->controller = $url[0];
      unset($url[0]);
    }

    // deze required de juiste controller. Als deze niet bestaat
    // dan pakt hij gewoon de controller met de class variabele $controller
    require_once "../app/controllers/$this->controller.php";

    $this->controller = new $this->controller;

    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        // deze kijkt of de methode die in de array op plek 1 bestaat in home.php
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // de url verwacht een array, dus als er geen params worden meegegeven
    // dan wordt de array gevuld met een lege instantie
    $this->params = $url ? array_values($url) : [] ;

    //print_r($this->params);

    // arguments: array met controller en method, tweede argument de parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseUrl(){
    if(isset($_GET['url'])) {
      // de $_GET wordt dmv de .htaccess file geparsed naar iets logisch
      //echo $_GET['url'];
      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }

}
