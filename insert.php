<?php 
     require_once "db/database.php";
     $time_hour = date('H:i');
     $date = date('Y-m-d');
     $stmt=$pdo->prepare("INSERT INTO comments (name,message,time_hour,date) VALUES('".$_POST['user_name_bl']."', '".$_POST['user_comment_bl']."','$time_hour', '$date')");
     $stmt->execute();
 ?>
