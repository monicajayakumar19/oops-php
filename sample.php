
<?php
require_once('class/database.php');

$db = new Database();

$res = $db->Query("select * from employee");

while($rows = mysqli_fetch_object($res)){
echo $rows->emp_name."</br></br>";
}
