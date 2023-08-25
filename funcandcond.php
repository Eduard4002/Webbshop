sd<?php
  $arr = array(1, 2, 3, 4);
  $ew = var_dump($arr);
  
  function findmin($arg1){
      $op =  min($arg1);
      return $op;
  }
  $output = findmin($arr);
  echo "<h1>$output</h1>";

  /*
    "." operatorn används för att conjugera strängar
    går att assignera värden genom en arrays index
  */
  $cars = array("Volvo", "BMW", "Toyota");
  $carcount = count($cars);
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "<h1>$cars[0] $cars[1] $carcount</h1>";

  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


  /*
  */
  for($x = 0; $x<$carcount; $x++){
    echo "<h1>$cars[$x]</h1>";
  }
  /*
    För att skapa en assiative array. liknar python lists
  */
  $ages["youth"] = "12kr";
  $ages["teen"] = "56kr";
  $ages["adult"] = "70kr";
  var_dump($ages);

  /*
    $ages as $x tar key value för varje element i assioative array
    => $value värdet för key

    för att skriva om
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    
    för att sortera array 
    sort(arr);

    push(elem);
    pop(elem);
  */ 

  
  foreach($ages as $x => $value){
    echo "<br>";
    echo "first key = " . $x . "Second Value = " . $value;
  }
  //$var = array_pop($ages);


  /*
             array   key    värde
    foreach($ages as $x => $value)
    
    
  
  */
  $arr2 = array("van" => "10", "youtube"=> "234");
  foreach($arr2 as $x => $value){
    echo "<br>"; 
    $arr2[$x] = "1";
  }
  
  foreach($arr2 as $x => $value){
    echo "<br>";
    echo "key = " . $x . " keyvalue" . $value;
  }






  foreach($ages as $x => $value){
    echo "<br>";
    echo "first key = " . $x . "Second Value = " . $value;
  }
  $arr3 = array(12, 54, 876);
  global $arr3;
  for($x = 0; $x < count($arr3); $x++){
    if ($arr3[$x] % 2 == 0){
       $arr3[$x] = "even";
    }

  }
  foreach($arr3 as $x){
    echo "<h1>$x</h1>";
  }
  

 /*
  for x in lista
  foreach(lista as x)
 */
?>