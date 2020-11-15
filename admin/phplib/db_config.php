<?php
//local
$con = mysqli_connect('localhost','root','','sriannai_vs');

 //server
//   $con = mysqli_connect('localhost','sriannai_viki','Vikisanbad@@22','sriannai_vs');

 if($con->connect_error)
 {
 	echo "Db Connection Error".$con->connect_error;
 }
?>