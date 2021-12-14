<!DOCTYPE html>
<?php
  include_once 'dbconfig.php';        //db연결
  $dbname = "k_league";
  mysqli_select_db($conn,$dbname) or die ('DB selection failed');
  session_start();
  $id=$_SESSION['user_id'];
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
</head>
<body>


<!-- usertype이 c일때, 코치 내용 출력 -->
<?php if($type=='C'):
  $sql_c="SELECT * FROM coach WHERE CoachID='{$id}'";
  $result_c=mysqli_query($conn,$sql_c);
  $data_c=mysqli_fetch_array($result_c);?>
  <div class="container" id="coach">
      <div class="row">
          <div class="col-6">
              <h4><b>개인 정보 </b> <span class="badge bg-indigo rounded-pill">Coach</span> </h4>
          </div>
          <div class="col-6">
              <a href = 'mypage_modify.html' id="mypage_modify_button" class="btn text-white bg-indigo right">개인정보 수정</a>
          </div>
      </div>
      
      <table id="PersonalInformationTable" class="table table-bordered table-light text-center my-3">
          <tbody>
          <tr>
              <th class="table-active">이름</th>
              <td><?php echo $data_c['Coachname'] ?></td>
          </tr>
          <tr>
              <th class="table-active">국적</th>
              <td><?php echo $data_c['Coachnation'] ?></td>
          </tr>
          <tr>
              <th class="table-active">생일</th>
              <td><?php echo $data_c['Coachbirthday'] ?></td>
          </tr>
          <tr>
            <th class="table-active">소속팀</th>
            <td><?php echo $data_c['affliated_team'] ?></td>
          </tr>
          </tbody>
      </table>

      <hr class="my-4">

      <div class="row">
          <h4><b>팀 지원한 선수 리스트 </b> <span class="badge bg-indigo rounded-pill">Coach</span> </h4>
      </div>
      
      <table id="ApplyTable" class="table table-striped text-center my-3 align-middle">
          <thead  class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">선수 이름</th>
              <th scope="col">영입 허가</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a href="player_info.html">Mark</a></td>
              <td><a id="permission_button" class="btn text-white bg-indigo">허가하기</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="team_info.html">Mark1</a></td>
              <td><a id="permission_button" class="btn text-white bg-indigo">허가하기</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="team_info.html">Mark2</a></td>
              <td><a id="permission_button" class="btn text-white bg-indigo">허가하기</a></td>
            </tr>
          </tbody>
        </table>
      
  </div>

 <!-- usertype이 p일때, 선수 내용 출력 --> 
<?php elseif($_SESSION['usertype']=='P'):
$sql_p="SELECT * FROM player WHERE PLID='{$id}'";
$result_p=mysqli_query($conn,$sql_p);
$data_p=mysqli_fetch_array($result_p);?>
    
  <div class="container" id="player">
        <div class="row">
            <div class="col-6">
                <h4><b>개인 정보 </b> <span class="badge bg-indigo rounded-pill">Player</span> </h4>
            </div>
            <div class="col-6">
                <a href = 'mypage_modify.html' id="mypage_modify_button" class="btn text-white bg-indigo right">개인정보 수정</a>
            </div>
        </div>
        
        <table id="PersonalInformationTable" class="table table-bordered table-light text-center my-3">
            <tbody>
            <tr>
                <th class="table-active">이름</th>
                <td><?php echo $data_p['PLname'] ?></td>
                <th class="table-active">포지션</th>
                <td><?php echo $data_p['position'] ?></td>
            </tr>
            <tr>
                <th class="table-active">국적</th>
                <td><?php echo $data_p['PLnation'] ?></td>
                <th class="table-active">키</th>
                <td><?php echo $data_p['height'] ?>cm</td>
            </tr>
            <tr>
                <th class="table-active">생일</th>
                <td><?php echo $data_p['PLbirthday'] ?></td>
                <th class="table-active">몸무게</th>
                <td><?php echo $data_p['weight'] ?>kg</td>
            </tr>
            <tr>
                <th class="table-active">소속팀</th>
                <td><?php echo $data_p['affliated_team'] ?></td>
                <th class="table-active">등번호</th>
                <td><?php echo $data_p['uniformnum'] ?></td>
            </tr>
            </tbody>
        </table>

        <!-- 중간에 선 -->
        <hr class="my-4">

        <div class="row">
            <h4><b>지원한 팀 리스트 </b> <span class="badge bg-indigo rounded-pill">Player</span> </h4>
        </div>
        
        <table id="ApplyTable" class="table table-striped text-center my-3 align-middle align-middle">
            <thead  class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">팀 이름</th>
                <th scope="col">지원 취소</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><a href="team_info.html">Mark</a></td>
                <td><a id="cancel_button" class="btn text-white bg-indigo">취소하기</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><a href="team_info.html">Mark1</a></td>
                <td><a id="cancel_button" class="btn text-white bg-indigo">취소하기</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><a href="team_info.html">Mark2</a></td>
                <td><a id="cancel_button" class="btn text-white bg-indigo">취소하기</a></td>
              </tr>
            </tbody>
          </table>
        
    </div>
<?php endif;?>
</body>

</html>