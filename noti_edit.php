<?php
  include_once 'dbconfig.php';        //db연결
  $dbname = "k_league";
  mysqli_select_db($conn,$dbname) or die ('DB selection failed');
  session_start();
  $id = $_SESSION['user_id'];
  $noticeid = $_POST['noti_id'];
  $t_title = $_POST['noti_title'];
  $cont = $_POST['noti_cont'];
  $spl = "UPDATE teamnotice SET title = '{$t_title}',content = '{$cont}' WHERE NoticeID = '{$noticeid}'";
  $result = mysqli_query($conn,$spl);

  if($result == TRUE)
  {
      echo "수정완료";
      echo("<script>location.replace('notice.php')</script>");
  }
  else
  {
      echo "Error:".$query."mesage:".mysqli_error($conn);  
  }
  ?>