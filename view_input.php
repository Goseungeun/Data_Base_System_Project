<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');

$title = $_POST['title'];
$info = $_POST['info'];
$count = $_POST['cont'];

$sql = "SELECT CoachID FROM coach WHERE CoachID = '{$cont}'";
$result = $conn->query($sql);

$sql = "INSERT INTO teamnotice(title,content,Teamname)
        VALUES('{$title}','{$info}','{$result}')";

?>