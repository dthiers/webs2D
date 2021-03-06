
<?php
    class Animal(){
      protected $name;
      protected $favorite_food;
      protected $sound;
      protected $id;

      public static $number_of_animals = 0;

      function getName(){

          return $this->name;

      }

      function __construct($name){
      	$this->$name = $name;
        $this->id = rand(100, 100000);
        echo this->id . " has been assigned";
        Animal::$number_of_animals++;

      }

      public function __destruct(){
        echo $this->name . " is being destroyed";
      }

      function __get($name){
        echo "Asked for " . $name . "<br />";
        return $this->$name;

      }

      function _set($name, $value){
        switch($name){

          case "name" :
            $this->name = $value;
            break;

          case "favorite_food" :
            $this->favorite_food = $value;
            break;

          case "sound" :
            $this->sound = $value;
            break;

          default :
            echo $name . " Not Found";

        }
        echo "Set " . $name . " to " . $value . "<br />";
      }

      function run(){
        echo $this->name . " runs! <br />"
      }

    }

    class Dog extends Animal {
      function run(){
        echo $this->name . " runs like crazy <br />";
      }
    }

    $animal_one = new Animal();

    $animal_one->name = "Spot";
    $animal_one->favorite_food = "meat";
    $animal_one->sound = "woof";

    echo $animal_one->name . " says" . $animal_one->sound .
    " give me some" . $animal_one->favorite_food .
    " my id is: " . $animal_one->id;
    ?>
