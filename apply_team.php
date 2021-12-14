<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
$plid = $_GET['plid'];
$teamname = $_GET['team'];
mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
$sql = "INSERT INTO apply_for(PlayerID,teamID) VALUES ('{$plid}','{$teamname}')";
$result = mysqli_query($conn,$sql);
if($result == TRUE){
    echo"지원 성공!";
    echo'<script>location.replace("team_info.php?teamname='.$teamname.'")</script>';
}
?>