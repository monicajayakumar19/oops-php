
<?php
require_once('class/database.php');

$db = new Database();

$res = $db->Query("select * from employee");

// while($rows = mysqli_fetch_object($res)){
// echo $rows->emp_id."</br></br>";
// echo $rows->emp_name."</br></br>";
// echo $rows->email."</br></br>";
// echo $rows->Designation."</br></br>";

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered ">
                    <tr>
                        <th> EMPLOYEE ID </th>
                        <th> EMPLOYEE NAME </th>
                        <th> EMAIL-ID </th>
                        <th> DESIGNATION </th>
                    </tr>
                    <?php while($rows = mysqli_fetch_object($res)) { ?>
<tr>

    <td><?php echo  $rows->emp_id?></td>
    <td><?php echo  $rows->emp_name?></td>
    <td><?php echo  $rows->email?></td>
    <td><?php echo  $rows->Designation ?></td>
 
</tr>

<?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

