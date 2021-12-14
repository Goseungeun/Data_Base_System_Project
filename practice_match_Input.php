<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
session_start();
$userid=$_SESSION['user_id'];
$date = $_POST['date'];
$place=$_POST['place'];

$sql = "INSERT INTO practice_match_board(matchDate,placename,propose_CoachID) VALUES ('{$date}','{$place}','{$userid}')";
$result = mysqli_query($conn,$sql);
if($result == TRUE){
    echo"등록 성공!";
    echo'<script>location.replace("practice_match.php")</script>';
}
else echo"실패";
echo $userid;

$conn->close();
?>