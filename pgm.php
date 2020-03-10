<?php
 class Fruit{

public $name;
public $color;
     public function Fruit($name,$color){
         $this->name=$name;
         $this->color=$color;
     }
     public function intro(){
         echo  "The fruit is {$this->name} and the color is {$this->color}";
     }
 } // object and classes 

 class fresh  extends Fruit{ // inheritance 
    
         public $name;
         public $type;
     
     public function fresh($name,$type){
         $this->name =  $name;
         $this->type =  $type;
         

     }
     public function mess(){
         echo "the animal {$this->name} and type is {$this->type}";
     }
 }
 $a = new Fruit("Apple","Red");// object creation 
 $b = new fresh("cat","pet");
 $b ->mess();
 echo "<br>";
 $a -> intro();




?>
