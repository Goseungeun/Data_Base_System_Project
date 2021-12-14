<!DOCTYPE html>
<html lang="ko">
<?php 
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');
session_start();
$userid = $_SESSION['user_id'];
$sql = "SELECT * FROM coach WHERE coachID = '{$userid}'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$username = $row['Coachname'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
  <form method = "POST" action = "write_notice.php">
    <div class="board_wrap">
        <div class="board_title">
            <strong>팀 공지사항</strong>
            <p>공지사항을 빠르고 정확하게 안내해드립니다.</p>
        </div>
        <div class="board_write_wrap">
            <div class="board_write">
                <div class="title">
                    <dl>
                        <dt>제목</dt>
                        <dd><input type="text" name = "title" placeholder="제목 입력"></dd>
                    </dl>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <?php 
                        echo '<dd><input type="text" name = "writer" value="'.$username.'"></dd>';?>
                    </dl>
                </div>
                <div class="cont">
                    <textarea placeholder="내용 입력" name = "content"></textarea>
                </div>
            </div>
            <div class="bt_wrap">
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="submit" >등록</button>
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="button" onclick = "location.href = './notice.php'" >취소</button>
            </div>
        </div>
    </div>
  </form>
</body>

</html>