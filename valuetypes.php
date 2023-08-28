<?php
    $number = 1.234;
    $numbertoint = (int)$number;
    //arrays skapas med array()
    echo "<h1></h1>";
    /*  
        is_int() används för att kontrolera om variabeln är av typen integer och ger atningen 
        sant eller falskt

        is_float()

    */ 
    var_dump(is_int($number));
    $arr = array(1, 3, 4);
    /*
        var_dump skriver ut data typen och dess innehåll

        min() star reda på det minsta värdet i ett array
        max() tar reda på det högsta värdet i ett 
        max() och min() returnerar det minsta värdet som finns i en array 
        
        rand(index1, index2)    genererar ett slumpmässigt nummer mellan index1 och index2
    */
  

    class Car{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "my color car is a " .$this->color . " " . $this->model;
         }



    }

?>