<!DOCTYPE html>
<html lang="ko">
<?php 
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');
session_start();
$userid = $_SESSION['user_id'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
<form method = "POST" action = "write_message.php">
    <div class="board_wrap">
        <div class="board_title">
            <strong>메세지</strong>
            <p>개인간의 메세지 발송함입니다</p>
        </div>
        <div class="board_write_wrap">
            <div class="board_write">
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <?php 
                        echo '<dd><input type="text" name = "sender" value="'.$userid.'"></dd>';?>
                    </dl>
                    <dl>
                        <dt>보낼이</dt>
                        <dd><input type="text" name = "receiver" placeholder="보낼이입력" ></dd>
                    </dl>
                </div>
                <div class="cont">
                    <textarea placeholder="내용 입력" name = "cont"></textarea>
                </div>
            </div>
            <div class="bt_wrap">
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="submit" >보내기</button>
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="button" onclick = "location.href = './message.php'" >취소</button>
            </div>
        </div>
    </div>
    </form> 
</body>

</html>