<?php
class Fruits {
    public $name;
    public $color;
function set_name($name){
    $this->name=$name;
}
function get_name(){
    return $this->name;
}
}
$a = new Fruits();
$b = new Fruits();
$c = new Fruits();
$d = new Fruits();


$a -> set_name("Apple");
$b -> set_name("Orange");
$c -> set_name("Strawberry");
$d -> set_name("Banana");




echo $a->get_name();
echo "<br>";
echo $b->get_name();
echo "<br>";
echo $c->get_name();
echo "<br>";
echo $d->get_name();

?>