<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user_view WHERE userID = '{$id}' AND userPW = '{$pw}'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);



if($result->num_rows == 0)
{
    echo "<script>alert('로그인실패');</script>";
    echo("<script>location.replace('login.php')</script>");
}
else{
    session_start();
    $_SESSION['user_id'] = $id;
    $_SESSION['usertype']=$row['usertype']; 
    echo("<script>location.replace('index.php')</script>");
}
$conn->close();
?>