<!DOCTYPE html>
<html lang="ko">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <form method ="POST" action = "noti_edit.php">
    <div class="board_wrap">
        <div class="board_title">
            <strong>팀 공지사항</strong>
            <p>공지사항을 빠르고 정확하게 안내해드립니다.</p>
        </div>
        <div class="board_write_wrap">
            <div class="board_write">
                <div class="num">
                    <dl>
                        <dt>번호</dt>
                        <dd><input type="text" name = "noti_id" value=<?php echo $row['NoticeID']; ?>></dd>
                    </dl>
                </div>
                <div class="title">
                    <dl>
                        <dt>제목</dt>
                        <dd><input type="text" name = "noti_title" placeholder="제목 입력" value=<?php echo $row['title']; ?>></dd>
                    </dl>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <dd><input type="text" name = "noti_writer" placeholder="글쓴이 입력" value=<?php echo $writername; ?>></dd>
                    </dl>
                </div>
                <div class="cont">
                    <textarea name = "noti_cont"placeholder="내용 입력" >
                        <?php echo $row['content']; ?>
                    </textarea>
                </div>
            </div>
            <div class="bt_wrap">
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="submit" >수정완료</button>
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="button" onclick = "location.href = './message.php'" >취소</button>
            </div>
        </div>
    </div>
</form>
</body>

</html>