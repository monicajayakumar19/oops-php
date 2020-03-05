<?php
class Database {
    public $con;
    public $rows;
    public $result;

   
    public $hostname;
    public $username;
    public $password;
    public $dbname;
   
public function Database() {
    $this->hostname ="localhost";
    $this->username ="root";
    $this->password="";
    $this->dbname ="users";


}
public function Connect(){
    $this->con=mysqli_connect( $this->hostname,$this->username,$this->password) or die("Connection Failed.....");
    mysqli_select_db($this->con,$this->dbname) or die("Database does not exists....");

}
public function Query($qry){
    $this->Connect();
    $this->result = mysqli_query($this->con,$qry);
    return $this->result;
    
}
}
?>