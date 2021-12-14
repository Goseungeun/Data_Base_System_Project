<!DOCTYPE html>
<?php
  include_once 'dbconfig.php';        //db연결
  $dbname = "k_league";
  mysqli_select_db($conn,$dbname) or die ('DB selection failed');
  session_start();
  $id = $_SESSION['user_id'];
  $noticeid = $_GET['IDX'];
  $spl = "SELECT * FROM teamnotice WHERE NoticeID = '{$noticeid}'";
  $result = mysqli_query($conn,$spl);
  $row = mysqli_fetch_array($result);
  $coachid = $row['CoachID'];

    $writersql = "SELECT * FROM coach WHERE CoachID = '{$coachid}'";
    $writerres = mysqli_query($conn,$writersql);
    $writerrow = mysqli_fetch_array($writerres);
    $writername = $writerrow['Coachname'];
  ?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>팀 공지사항</strong>
            <p>공지사항을 빠르고 정확하게 안내해드립니다.</p>
        </div>
        <div class="board_view_wrap">
            <div class="board_view">
                <div class="title">
                    <dl>
                        <dt>제목</dt>
                        <dd><?php echo $row['title']; ?></dd>
                    </dl>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <dd><?php echo $writername; ?></dd>
                    </dl>
                </div>
                <div class="cont">
                    <?php echo $row['content']; ?>
                </div>
            </div>
            <div class="bt_wrap">
                <a href="notice.php" class="on">목록</a>
                <?php 
                if($id == $coachid){
                    echo '<a href="edit.php?IDX='.$noticeid.'">수정</a>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>