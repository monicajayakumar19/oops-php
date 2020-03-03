<?php
class Database(){
    public $con;
    public $rows;
    public $result;

   
    public $hostname;
    public $username;
    public $password;
    public $db_name;
    
}
public class Database(){
    $this->hostname ="localhost";
    $this->username ="root";
    $this->password="";
    $this->db_name ="users";


}
public class Connect(){
    $this->con=mysqli_connect( $this->hostname,$this->username,$this->password) or die("Connection Failed.....");
    mysqli_select_db_name($this->$con,$this->$result) or die("example");

}
public function Query($qry){
    
}
?>