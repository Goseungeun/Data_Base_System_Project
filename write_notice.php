<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');
session_start();
$userid = $_SESSION['user_id'];
$title = $_POST['title'];
$writer = $_POST['writer'];
$cont = $_POST['content'];

$teamnamesql = "SELECT * FROM coach WHERE CoachID = '{$userid}'";
$teamresult = mysqli_query($conn,$teamnamesql);
$teamrow = mysqli_fetch_array($teamresult);
$teamname = $teamrow['affliated_team'];

$sql = "INSERT INTO teamnotice(title,content,teamname,coachID) VALUES ('{$title}','{$cont}','{$teamname}','{$userid}')";
$result = mysqli_query($conn,$sql);
if(($result==TRUE)){
    echo"공지 등록 성공!";
    echo("<script>location.replace('notice.php')</script>");
}
else {
    echo"공지 등록 실패!";
}

?>