<!DOCTYPE html>
<?php 
    include_once 'dbconfig.php';        //db연결
    $dbname = "k_league";
    session_start();
    $userid = $_SESSION['user_id'];
    mysqli_select_db($conn,$dbname) or die ('DB selection failed'); 
?>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
<?php 
  $sql="SELECT * FROM coach WHERE CoachID='{$userid}'";
  $result=mysqli_query($conn,$sql);
  $data=mysqli_fetch_array($result);?>

    <div class="board_wrap">
    
        <div class="board_title">
            <strong>연습경기 일정</strong>
            <p>연습경기를 빠르고 직관적으로 잡을수있는 페이지</p>
        </div>
        <form method="POST" action="practice_match_Input.php">
        <div class="board_write_wrap">
        
        <form class="needs-validation" novalidate="">
            <div class="board_write">
                <div class="title">
                    <dl>
                    <dt><label for="place" class="form-label">장소</label></dt>
                    <dd><select class="form-select" name="place" id="place" required=""></dd>
                    <option value="">Choose...</option>
                    <option>강원</option>
                    <option>광주</option>
                    <option>대구</option>
                    <option>서울</option>
                    <option>성남</option>
                    <option>수원</option>
                    <option>울산</option>
                    <option>인천</option>
                    <option>전북</option>
                    <option>제주</option>
                    <option>포항</option>
                  </select>
                        
                    </dl>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <dd><input type="text" class="form-control" value="<?php echo $data['Coachname']?>"></dd>
                    </dl>
                    <dl>
                        <dt>날짜</dt>
                        <dd><input type="date" class="form-control" name="date" id="date" placeholder=""></dd>
                    </dl>
                </div>
            </div>
            
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="submit" >일정 등록</button>
            <button class="w-100 btn btn-lg text-white bg-indigo my-1" type="button" onclick = "location.href = 'practice_match.php'" >취소</button>
            </form>
            
        </div>
        </form>
    </div>

</body>

</html>