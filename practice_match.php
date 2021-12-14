<!DOCTYPE html>
<?php
  include_once 'dbconfig.php';        //db연결
  $dbname = "k_league";
  mysqli_select_db($conn,$dbname) or die ('DB selection failed');
  session_start();
  $userid=$_SESSION['user_id'];
  $type=$_SESSION['usertype'];
  ?>
<html lang="en">

<head>



<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  
    <link rel="stylesheet" href="css/css.css">
    <meta charset='utf-8' />
    <link href='css/main.css' rel='stylesheet' />
    <script src='css/main.js'></script>
   
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialDate: '2021-12-01',
                editable: true,
                selectable: true,
                businessHours: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: 
                
                
            });

            calendar.render();
        });
    </script> -->

    <style>
        body {
            
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }
        
        #calendar {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>

<script>
      function insert(){
        $.ajax({url:"practice_match.php", success:function(result){
        $("div").text(result);}
        })
       } 
    </script>
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

    <?php
                include_once 'dbconfig.php';        //db연결
                $dbname = "k_league";
                mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
                $sql = "SELECT * FROM practice_match_board ORDER BY matchID";
                $result = mysqli_query($conn,$sql);
     ?>


    
    <div class="board_wrap">
        <div class="board_title">
            <strong>연습경기 일정 잡기</strong>
            <p>연습경기를 빠르고 직관적으로 잡을수있는 페이지</p>
        </div>

        <div class="container">
            <div class="board_list">

            <table id="TeamRakingTable" class="table table-striped text-center my-3 align-middle">
            <thead  class="table-dark">
              <tr>
                <th scope="col">번호</th>
                <th scope="col">장소</th>
                <th scope="col">글쓴이</th>
                <th scope="col">날짜</th>
                <th scope="col">수락</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include_once 'dbconfig.php';        //db연결
                $dbname = "k_league";
                mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
                $sql = "SELECT * FROM practice_match_board ORDER BY matchID";
                $result = mysqli_query($conn,$sql);
                $co="SELECT * FROM coach WHERE CoachID='{$userid}'";
                $result_co=mysqli_query($conn,$co);
                $data_co=mysqli_fetch_array($result_co);

                while($row = mysqli_fetch_array($result)){
                  
                  $writer=$row['propose_CoachID'];
                  $name="SELECT Coachame FROM coach WHERE CoachID='{$writer}'";
                  echo '<tr><td>'.$row['matchID'].'</td><td>'.$row['placename'].'</td><td>'.$row['propose_CoachID'].'</td><td>'.$row['matchDate'].'</td><td><a>수락</a></td></tr>';
                }
                ?>
            </tbody>
          </table>
               

                


                <!-- <div>
                    <div class="num">5</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">4</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">3</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">2</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div>
                <div>
                    <div class="num">1</div>
                    <div class="title">장소</div>
                    <div class="writer">김이름</div>
                    <div class="date">2021.1.15</div>
                    <div class="count"><a href="#">수락</a></div>
                </div> -->
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
                <a href="p.write.php" class="on">연습경기 잡기</a>
                <!--<a href="#">수정</a>-->
            </div>
            

        </div>
    </div>
</body>

</html>