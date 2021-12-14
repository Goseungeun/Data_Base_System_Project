<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
session_start();
$usertype = $_SESSION['usertype'];
$id = $_SESSION['user_id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$nation = $_POST['nation'];
$birthday = $_POST['birthday'];
$team = $_POST['team'];

if($usertype == "C"){

    $coach_sql = "UPDATE coach(coachID,coachPW,coachname,coachnation,coachbirthday,affliated_team) SET ('{$id}','{$pw}','{$nation}','{$name}','{$birthday}','{$team}');";
    $coach_result = mysqli_query($conn,$coach_sql);
    if($coach_result == TRUE){
        echo"수정 성공";
        echo("<script>location.replace('mypage.php')</script>");
    }
}

$conn->close();
?>