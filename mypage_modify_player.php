<!DOCTYPE html>
<?php
  include_once 'dbconfig.php';        //db연결
  $dbname = "k_league";
  mysqli_select_db($conn,$dbname) or die ('DB selection failed');
  session_start();
  $id=$_SESSION['user_id'];
  $usertype=$_SESSION['usertype'];
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
  $sql_p="SELECT * FROM player WHERE PLID='{$id}'";
  $result_p=mysqli_query($conn,$sql_p);
  $data_p=mysqli_fetch_array($result_p);?>
    <div class="container">
      <main>
          <div class="text-center">
            <h2><b>개인정보 수정</b></h2>
          </div>
          <form method="POST" action="mypage_modify_player_php.php">
          <div class="row g-5">
              <form class="needs-validation" novalidate="">
                 
                <div class="row g-3">
                  
                <div class="col-12">
                    <label for="ID" class="form-label">ID</label>
                    <div class="input-group has-validation">
                      <input type="text" class="form-control"placeholder="<?php echo $data_p['PLID']?>" aria-label="Disabled input example" disabled>
                    
                    </div>
                </div>

                  <div class="col-12">
                      <label for="PW" class="form-label">PW</label>
                      <div class="input-group has-validation">
                          <input type="password" class="form-control" id="pw" name="pw" placeholder="Password" value=<?php echo $data_p['PLPW'] ?>>
                          <div class="invalid-feedback">
                              Your Password is required.
                          </div>
                      </div>
                  </div>
        
                  <div class="col-12">
                      <label for="Name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value=<?php echo $data_p['PLname'] ?>>
                      <div class="invalid-feedback">
                        Valid Name is required.
                      </div>
                  </div>
  
                  <div class="col-md-5">
                      <label for="country" class="form-label">Country</label>
                      <select class="form-select" id="nation" name="nation" required="">
                        <option value=<?php echo $data_p['PLnation']?>><?php echo $data_p['PLnation']?></option>
                        <option>한국</option>
                        <option>미국</option>
                        <option>브라질</option>
                        <option>세르비아</option>
                        <option>호주</option>
                        <option>우크라이나</option>
                        <option>캐나다</option>
                        <option>스위스</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid Country.
                      </div>
                  </div>
  
                  <div class="col-12">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" required=""value=<?php echo $data_p['PLbirthday'] ?>>
                    <div class="invalid-feedback">
                      Valid Birthday is required.
                    </div>
                  </div>
      
                  <div class="col-md-5">
                    <label for="team" class="form-label">Team</label>
                    <select class="form-select" id="team" name="team" required="" value=<?php echo $data_p['affliated_team'] ?>>
                      <option value=<?php echo $data_p['affliated_team'] ?>><?php echo $data_p['affliated_team'] ?></option>
                      <option>무소속</option>
                      <option>FC서울</option>
                      <option>강원FC</option>
                      <option>광주FC</option>
                      <option>대구FC</option>
                      <option>성남FC</option>
                      <option>수원 삼성 블루윙즈</option>
                      <option>수원FC</option>
                      <option>울산 현대 축구단</option>
                      <option>인천 유나이티드</option>
                      <option>전북 현대 모터스</option>
                      <option>제주 유나이티드</option>
                      <option>포항 스틸러스</option>
                    </select>
                    <div class="invalid-feedback">
                      Valid Team is required.
                    </div>
                  </div>
      
                
                <div id="player_view" style="display:block;">
                  <hr class="my-4">
                  <div class="row gy-3" >
                      <div class="col-md-5">
                          <label for="height" class="form-label">Height</label>
                          <input type="number" class="form-control " id="heignt" name="height" placeholder="" required=""value=<?php echo $data_p['height'] ?>>
                          <div class="invalid-feedback">
                              Valid Height is required.
                          </div>
                      </div>
                      <div class="col-md-1 align-self-end float-left">
                          <p>cm</p>
                      </div>
          
                      <div class="col-md-5">
                          <label for="weight" class="form-label">Weight</label>
                          <input type="number" class="form-control " id="weight" name="weight" placeholder="" required=""value=<?php echo $data_p['weight'] ?>>
                          <div class="invalid-feedback">
                              Valid Weight is required.
                          </div>
                      </div>
                      <div class="col-md-1 align-self-end float-left">
                          <p>kg</p>
                      </div>
          
                      <div class="col-md-6">
                          <label for="position" class="form-label">Position</label>
                          <select class="form-select" id="position" name="position" required="">
                              <option value=<?php echo $data_p['position'] ?>><?php echo $data_p['position'] ?></option>
                              <option>GK</option>
                              <option>DF</option>
                              <option>MF</option>
                              <option>FW</option>
                          </select>
                          <div class="invalid-feedback">
                              Valid position is required.
                          </div>
                      </div>
  
                      <label for="uniformnumber" class="form-label">Uniform Number</label>
                      <div class="col-md-1">
                          <p class="text-right">No.</p>
                      </div>
                      <div class="col-md-5 align-self-end ">
                          <input type="number" class="form-control " id="uniformnumber" name="uniformnumber" placeholder="" required=""value=<?php echo $data_p['uniformnum'] ?>>
                          <div class="invalid-feedback">
                              Valid Uniform Number is required.
                          </div>
                      </div>
                  </div>
                </div>
      
                <hr class="my-4">
      
                <button class="w-100 btn btn-primary btn-lg mb-5" type="button" onclick = "location.href = 'mypage.php'">수정완료</button>
              </form>
            </div>
      </main>
    </div>
         
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
          
    <script src="form-validation.js"></script>
    </div>
  </form>

</body>
</html>