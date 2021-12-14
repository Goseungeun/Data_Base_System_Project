<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 

$usertype = $_POST['usertype'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$nation = $_POST['nation'];
$birthday = $_POST['birthday'];
$team = $_POST['team'];

if($usertype == "player"){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $position = $_POST['position'];
    $uniformnum = $_POST['uniformnum'];

    if($team =="무소속"){
        $no_team_player_sql = "INSERT INTO player(PLID,PLPW,weight,height,PLnation,PLname,position,uniformnum,PLbirthday) VALUES ('{$id}','{$pw}','{$weight}','{$height}','{$nation}','{$name}','{$position}','{$uniformnum}','{$birthday}');";
        $no_team_player_result = mysqli_query($conn,$no_team_player_sql);
        if($no_team_player_result == TRUE){
            echo"가입 성공.";
            echo("<script>location.replace('login.php')</script>");
        }
        elseif($no_team_player_result == FALSE){
            echo"가입 실패";
            echo mysqli_error($conn);
        }
    }
    else{
        $player_sql = "INSERT INTO player(PLID,PLPW,weight,height,PLnation,PLname,position,uniformnum,PLbirthday,affliated_team) VALUES ('{$id}','{$pw}','{$weight}','{$height}','{$nation}','{$name}','{$position}','{$uniformnum}','{$birthday}','{$team}');";
        $player_result = mysqli_query($conn,$player_sql);
        if($player_result == TRUE){
            echo"가입 성공";
            echo("<script>location.replace('login.php')</script>");
        }
    }
}

else{
    $coach_sql = "INSERT INTO coach(coachID,coachPW,coachname,coachnation,coachbirthday,affliated_team) VALUES('{$id}','{$pw}','{$nation}','{$name}','{$birthday}','{$team}');";
    $coach_result = mysqli_query($conn,$coach_sql);
    if($coach_result == TRUE){
        echo"가입 성공";
        echo("<script>location.replace('login.php')</script>");
    }
}

$conn->close();
?>