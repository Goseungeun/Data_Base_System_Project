<?php
include_once 'dbconfig.php';        //db연결
$dbname = "k_league";
mysqli_select_db($conn,$dbname) or die ('DB selection failed');

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$cont = $_POST['cont'];

echo $sender;
echo $receiver;
echo $cont;

$sql = "INSERT INTO message(messagecont) VALUES ('{$cont}')";
$get_id_sql = "SELECT * FROM message WHERE messagecont = '{$cont}'";
$result = mysqli_query($conn,$sql);
$id_result = mysqli_query($conn,$get_id_sql);
$messageid = mysqli_fetch_array($id_result)['messageID'];

$send_sql = "INSERT INTO send(messageID,senderID,receiverID,SendDate) VALUES ('{$messageid}','{$sender}','{$receiver}',curdate())";
$send_result = mysqli_query($conn,$send_sql);
if(($result==TRUE)and($send_result==TRUE)){
    echo"메세지 전송 성공!";
    echo("<script>location.replace('message.php')</script>");
}
else {
    echo"메세지 전송 실패!";
}

?>