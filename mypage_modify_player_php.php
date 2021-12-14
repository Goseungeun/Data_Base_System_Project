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

if($usertype == "P"){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $position = $_POST['position'];
    $uniformnum = $_POST['uniformnum'];

    if($team =="무소속"||$team==""){
        $no_team_player_sql = "UPDATE player SET PLPW='{$pw}',weight='{$weight}',height='{$height}',PLnation='{$nation}',PLname='{$name}',position='{$position}',uniformnum='{$uniformnum}',PLbirthday='{$birthday}' WHERE  PLID='{$id}'";
        
        $no_team_player_result = mysqli_query($conn,$no_team_player_sql);
        if($no_team_player_result == TRUE){
            echo"수정 성공.";
            echo("<script>location.replace('mypage.php')</script>");
        }
        elseif($no_team_player_result == FALSE){
            echo"수정 실패";
            echo mysqli_error($conn);
        }
    }
    else{
        $player_sql ="UPDATE player SET PLPW='{$pw}',weight='{$weight}',height='{$height}',PLnation='{$nation}',PLname='{$name}',position='{$position}',uniformnum='{$uniformnum}',PLbirthday='{$birthday}',affliated_team='{$team}' WHERE PLID='{$id}'";
        $player_result = mysqli_query($conn,$player_sql);
        if($player_result == TRUE){
            echo"수정 성공";
            echo("<script>location.replace('mypage.php')</script>");
        }
    }
}

else{
    $coach_sql = "UPDATE INTO coach(coachID,coachPW,coachname,coachnation,coachbirthday,affliated_team) VALUES('{$id}','{$pw}','{$nation}','{$name}','{$birthday}','{$team}');";
    $coach_result = mysqli_query($conn,$coach_sql);
    if($coach_result == TRUE){
        echo"수정 성공";
        echo("<script>location.replace('mypage.php')</script>");
    }
}

$conn->close();
?>