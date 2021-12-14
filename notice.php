<!DOCTYPE html>
<html lang="en">

<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');

session_start();
$id = $_SESSION['user_id'];
$checksql = "SELECT * FROM user_view WHERE userid = '{$id}'";
$result = mysqli_query($conn,$checksql);
$row = mysqli_fetch_array($result);
$chid = $row['usertype'];

if($chid == 'C'){
    $cteamsql = "SELECT * FROM coach WHERE coachid = '{$id}'";
    $cteamresult = mysqli_query($conn,$cteamsql );
    $cteamrow = mysqli_fetch_array($cteamresult);
    $teamname = $cteamrow['affliated_team'];
}

else{
        $pteamsql = "SELECT * FROM player WHERE PLid = '{$id}'";
        $pteamresult = mysqli_query($conn,$pteamsql);
        $pteamrow = mysqli_fetch_array($pteamresult);
        $teamname = $pteamrow['affliated_team'];

}
$writersql = "SELECT * FROM coach WHERE affliated_team = '{$teamname}'";
$writerres = mysqli_query($conn,$writersql);
$writerrow = mysqli_fetch_array($writerres);
$writername = $writerrow['Coachname'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>팀 공지사항</strong>
            <p>공지사항을 빠르고 정확하게 안내해드립니다.</p>
        </div>
        <div class="board_list_wrap">
            <div class="board_list">
                <div class="top">
                    <div class="num">번호</div>
                    <div class="title">제목</div>
                    <div class="writer2">글쓴이</div>
                </div>
                <?php
                $sql = "SELECT * FROM teamnotice WHERE Teamname = '{$teamname}'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo '<div><div class="num">'.$row['NoticeID'].'</div>
                          <div class="title"><a href="view.php?IDX='.$row['NoticeID'].'">'.$row['title'].'</div>
                          <div class="writer2">'.$writername.'</div></div>';
                        }
                        ?>

            </div>
            <div class="board_page">
                <a href="#" class="bt first">
                    <<</a>
                        <a href="#" class="bt prev">
                            <</a>
                                <a href="#" class="num on">1</a>
                                <a href="#" class="num">2</a>
                                <a href="#" class="num">3</a>
                                <a href="#" class="num">4</a>
                                <a href="#" class="num">5</a>
                                <a href="#" class="bt next">></a>
                                <a href="#" class="bt last">>></a>
            </div>
            <div class="bt_wrap">
                <?php
                  if($chid == 'C'){
                      echo '<a href="write.php" class="on">등록</a>';
                  }
                  ?>
                <!--<a href="#">수정</a>-->
            </div>
        </div>
    </div>
</body>

</html>