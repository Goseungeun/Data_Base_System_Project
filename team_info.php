<!DOCTYPE html>
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
    <script>
      function insert(){
        $.ajax({url:"apply_team.php", success:function(result){
        $("div").text(result);}
        })
       } 
    </script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4><b>팀 정보 </b></h4>
            </div>
            <?php 
            $teamname=$_GET['teamname'];
            include_once 'dbconfig.php';        //db연결
            $dbname = "k_league";
            session_start();
            $userid = $_SESSION['user_id']
            mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
            ?>

            <div class="col-6">
              <?php
                echo '<a href = "./apply_team.php?plid='.$userid.'&team='.$teamname.'" id="team_apply_button" class="btn text-white bg-indigo right mx-2">팀 지원하기</a>';
                ?>
                <a id="back_button" class="btn text-white bg-indigo right" onclick="history.back()" >뒤로 가기</a>
            </div>
        </div>
        <div class="row">
          <?php
            $sql = "SELECT * FROM team WHERE teamname = '{$teamname}'";
            $c_sql = "SELECT * FROM coach WHERE affliated_team = '{$teamname}'";
            $p_sql = "SELECT * FROM player WHERE affliated_team = '{$teamname}'";
            $col_sql = "SELECT * FROM team_col WHERE teamname='{$teamname}'";
            $result = mysqli_query($conn,$sql);
            $c_result = mysqli_query($conn,$c_sql);
            $p_result = mysqli_query($conn,$p_sql);
            $col_result = mysqli_query($conn,$col_sql);
            $row = mysqli_fetch_array($result);
            $c_row = mysqli_fetch_array($c_result);
            // echo $row['emblem'];
            echo '<img class="logo mx-1 align-middle" src="./logo/'.$row['emblem'].'">';
            // ehco <img src="'.$row['emblem'].'">;
          ?>
            <table id="PersonalInformationTable" class="table table-bordered table-light text-center my-3 mx-1 col">
                <tbody>
                <tr>
                    <th class="table-active">이름</th>
                    <?php echo '<td>'.$row['teamname'].'</td>';?>
                    <th class="table-active">감독</th>
                    <?php echo'<td>'.$c_row['Coachname'].'</td>';?>
                </tr>
                <tr>
                    <th class="table-active">창단년도</th>
                    <?php echo'<td>'.$row['foundingyear'].'</td>';?>
                    <th class="table-active">상징색</th>
                    <?php echo'<td>'; 
                    while($col_row = mysqli_fetch_array($col_result)){
                      echo $col_row['Teamcol'].' ';
                    }
                      echo'</td>'?>
                </tr>
                <tr>
                    <th class="table-active">순위</th>
                    <?php echo'<td>'.$row['ranking'].'</td>';?>
                    <th class="table-active">홈구장</th>
                    <?php echo'<td>'.$row['homestadium'].'</td>';?>
                </tr>
                </tbody>
            </table>
        </div>

        <hr class="my-4">

        <div class="row">
            <h4><b>소속 선수 </b> </h4>
        </div>
        
        <table id="ApplyTable" class="table table-striped text-center my-3">
            <thead  class="table-dark">
              <tr>
                <th scope="col">등 번호</th>
                <th scope="col">이름</th>
                <th scope="col">포지션</th>
                <th scope="col">국적</th>
              </tr>
            </thead>
            <tbody>
              <?php while($p_row = mysqli_fetch_array($p_result)){
                echo'<tr><td>'.$p_row['uniformnum'].'</td><td><a href="player_info.php?pname='.$p_row['PLname'].'&teamname='.$p_row['affliated_team'].
                '">'.$p_row['PLname'].'</a></td><td>'.$p_row['position'].'</td><td>'.$p_row['PLnation'].'</td></tr>';
              }
              ?>
            </tbody>
          </table>
        
    </div>
</body>

</html>