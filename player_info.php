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
    <?php 
    include_once 'dbconfig.php';        //db연결
    $dbname = "k_league";
    mysqli_select_db($conn,$dbname) or die ('DB selection failed');
    $PLname = $_GET['pname'];
    $teamname = $_GET['teamname']; 
    $sql = "SELECT * FROM player WHERE PLname = '{$PLname}' AND affliated_team = '{$teamname}'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4><b>선수 정보 </b> <span class="badge bg-indigo rounded-pill">Player</span> </h4>
            </div>
            <div class="col-6">
                <a id="back_button" class="btn text-white bg-indigo right" onclick="history.back()" >뒤로 가기</a>
            </div>
        </div>
        
        <table id="PersonalInformationTable" class="table table-bordered table-light text-center my-3">
            <tbody>
            <tr>
                <th class="table-active">이름</th>
                <?php echo '<td>'.$row['PLname'].'</td>'; ?>
                <th class="table-active">포지션</th>
                <?php echo '<td>'.$row['position'].'</td>'; ?>
            </tr>
            <tr>
                <th class="table-active">국적</th>
                <?php echo '<td>'.$row['PLnation'].'</td>'; ?>
                <th class="table-active">키</th>
                <?php echo '<td>'.$row['height'].'cm </td>'; ?>
            </tr>
            <tr>
                <th class="table-active">생일</th>
                <?php echo '<td>'.$row['PLbirthday'].'</td>'; ?>
                <th class="table-active">몸무게</th>
                <?php echo '<td>'.$row['weight'].'kg </td>'; ?>
            </tr>
            <tr>
                <th class="table-active">등번호</th>
                <?php echo '<td>'.$row['uniformnum'].'</td>'; ?>
                <th class="table-active">소속팀</th>
                <?php echo '<td>'.$row['affliated_team'].'</td>'; ?>
            </tr>
            </tbody>
        </table>
</body>
</html>