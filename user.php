<?php
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'test');

$applicationId = $_GET['applicationId'];

$query = mysqli_query($link, "SELECT * FROM student_dbs WHERE applicationId='$applicationId'");
$result = array();

while ($row = mysqli_fetch_array($query)) {
    $result[] = $row;
}
echo json_encode($result);


    ?>