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
    
    <script>$(function (){
        $('input[type="radio"][id="coach"]').on('click', function(){
          var chkValue = $('input[type=radio][id="coach"]:checked').val();
          if(chkValue){
                $('#player_view').css('display','none');
          }         
        });
         
    });</script>

    <script>$(function (){
        $('input[type="radio"][id="player"]').on('click', function(){
          var chkValue = $('input[type=radio][id="player"]:checked').val();
          if(chkValue){
                $('#player_view').css('display','block');
          }
         
        });
         
    });</script>

</head>
<body class="bg-light">
  <form method = "POST" action = "signin.php"  
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2><b>Sign In</b></h2>
          <p class="lead">다들 회원가입하세용~</p>
        </div>
    
        <div class="row g-5">
            <form class="needs-validation" novalidate="">
                <h4 class="mb-3">코치인지 선수인지 선택</h4>
                <div class="my-3 mx-1 row">
                    <div class="form-check col-3">
                        <input id="player" name="usertype" type="radio" value = "player" class="form-check-input" checked="" required="">
                        <label class="form-check-label" for="player"><b>Player</b></label>
                    </div>
                    <div class="form-check col-3">
                        <input id="coach" name="usertype" type="radio" value = "coach" class="form-check-input" required="">
                        <label class="form-check-label" for="coach"><b>Coach</b></label>
                    </div>
                </div>

              <div class="row g-3">
                

                <div class="col-12">
                  <label for="ID" class="form-label">ID</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" name = "id" id="ID" placeholder="ID" required="">
                    <div class="invalid-feedback">
                      Your ID is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                    <label for="PW" class="form-label">PW</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" name = "pw" id="PW" placeholder="Password" required="">
                        <div class="invalid-feedback">
                            Your Password is required.
                        </div>
                    </div>
                </div>
      
                <div class="col-12">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name = "name" id="Name" placeholder="Name" value="" required="">
                    <div class="invalid-feedback">
                      Valid Name is required.
                    </div>
                </div>

                <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" name = "nation" id="country" required="">
                      <option value="">Choose...</option>
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
                  <input type="date" class="form-control" name="birthday" id="birthday" placeholder="" required="">
                  <div class="invalid-feedback">
                    Valid Birthday is required.
                  </div>
                </div>
    
                <div class="col-md-5">
                  <label for="team" class="form-label">Team</label>
                  <select class="form-select" name="team" id="team" required="">
                    <option value="">Choose...</option>
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
                        <input type="number" class="form-control " name="height" id="heignt" placeholder="" required="">
                        <div class="invalid-feedback">
                            Valid Height is required.
                        </div>
                    </div>
                    <div class="col-md-1 align-self-end float-left">
                        <p>cm</p>
                    </div>
        
                    <div class="col-md-5">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control " name="weight" id="weight" placeholder="" required="">
                        <div class="invalid-feedback">
                            Valid Weight is required.
                        </div>
                    </div>
                    <div class="col-md-1 align-self-end float-left">
                        <p>kg</p>
                    </div>
        
                    <div class="col-md-6">
                        <label for="position" class="form-label">Position</label>
                        <select class="form-select" name="position" id="position" required="">
                            <option value="">Choose...</option>
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
                        <input type="number" class="form-control " name = "uniformnum" id="uniformnumber" placeholder="" required="">
                        <div class="invalid-feedback">
                            Valid Uniform Number is required.
                        </div>
                    </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg mb-5" type="submit" >Sign up!</button>
            </form>
          
        </div>
        </main>
      </div>
    
    
        <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
          <script src="form-validation.js"></script>
      
  </form>
</body>
</html>