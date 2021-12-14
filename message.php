<!DOCTYPE html>
<html lang="en">
<?php 
    include_once 'dbconfig.php';        //db연결
    $dbname = "k_league";
    session_start();
    $receiverid = $_SESSION['user_id'];
    mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100%;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<body>
<nav class="navbar navbar-static-top navbar-dark bg-indigo ">
        <div class="container" style="display: block;">
            <header class="d-flex flex-wrap py-2">
                <a class="d-flex align-items-center me-md-auto text-white navbar-brand text-decoration-none" href="index.php">K-League TM</a>
                <ul class="nav justify-content-around">
                    <li class="nav-item px-2"><a href="./team.php" class="btn btn-outline-light" aria-current="page">팀</a></li>
                    <li class="nav-item px-2"><a href="./notice.php" class="btn btn-outline-light">팀 공지사항</a></li>
                    <li class="nav-item px-2"><a href="./message.php" class="btn btn-outline-light">메세지</a></li>
                    <li class="nav-item px-2"><a href="./practice_match.php" class="btn btn-outline-light">연습경기 일정</a></li>
                    <li class="nav-item px-2"><a href="./mypage.php" class="btn btn-outline-light">MY PAGE</a></li>
                    <li class="nav-item px-2"><button class="btn btn-outline-light" type="button" onclick = "location.href = 'logout.php'">LOGOUT</button></li>
                </ul>
            </header>
        </div>
    </nav>

       <div class="container">
        <h4><b>수신 메세지</b></h4>
        <table id="TeamRakingTable" class="table table-striped text-center my-3 align-middle">
            <thead  class="table-dark">
              <tr>
                <th scope="col">내용</th>
                <th scope="col">보낸이</th>
                <th scope="col">보낸날짜</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $sendsql = "SELECT * FROM send WHERE receiverID = '{$receiverid}' ORDER BY SendDate DESC";
                $sendresult = mysqli_query($conn,$sendsql);
                while($sendrow = mysqli_fetch_array($sendresult)){
                    $messageid = $sendrow['messageID'];
                    $messagesql = "SELECT * FROM message WHERE messageID = '{$messageid}'";
                    $messageresult = mysqli_query($conn,$messagesql);
                    $messagerow = mysqli_fetch_array($messageresult);
                  echo '<tr><td>'.$messagerow['messagecont'].'</td><td>'.$sendrow['senderID'].'</td><td>'.$sendrow['SendDate'].'</td></tr>';
                }
            ?>
            </tbody>
          </table>
          <div class="bt_wrap">
                <a href="m.write.php" class="on">메세지 작성</a>
                <!--<a href="#">수정</a>-->
            </div>
    </div>
</body>

</html>