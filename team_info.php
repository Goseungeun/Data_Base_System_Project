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

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4><b>팀 정보 </b></h4>
            </div>
            <div class="col-6">
                <a href = '#' id="team_apply_button" class="btn text-white bg-indigo right mx-2" onclick="alert('팀에 지원이 되었습니다');">팀 지원하기</a>
                <a id="back_button" class="btn text-white bg-indigo right" onclick="history.back()" >뒤로 가기</a>
            </div>
        </div>
        <div class="row">
          <?php $teamname=$_GET['teamname'];
            include_once 'dbconfig.php';        //db연결
            $dbname = "k_league";
            mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
            $sql = "SELECT * FROM team WHERE teamname = '{$teamname}'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            // echo $row['emblem'];
            echo '<img class="logo mx-1 align-middle" src="./logo/'.$row['emblem'].'">';
            // ehco <img src="'.$row['emblem'].'">;
          ?>
            <table id="PersonalInformationTable" class="table table-bordered table-light text-center my-3 mx-1 col">
                <tbody>
                <tr>
                    <th class="table-active">이름</th>
                    <td>가을</td>
                    <th class="table-active">감독</th>
                    <td>가을</td>
                </tr>
                <tr>
                    <th class="table-active">창단년도</th>
                    <td>1999</td>
                    <th class="table-active">상징색</th>
                    <td>빨간색, 파란색</td>
                </tr>
                <tr>
                    <th class="table-active">연고지</th>
                    <td>서울</td>
                    <th class="table-active">홈구장</th>
                    <td>서울월드컵경기장</td>
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
              <tr>
                <td>1</td>
                <td><a href="player_info.html">Mark</a></td>
                <td>GK</td>
                <td>한국</td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="player_info.html">Mark1</a></td>
                <td>GK</td>
                <td>한국</td>
              </tr>
              <tr>
                <td>3</td>
                <td><a href="player_info.html">Mark2</a></td>
                <td>GK</td>
                <td>한국</td>
              </tr>
            </tbody>
          </table>
        
    </div>
</body>

</html>