<?php
session_start();
session_unset($_SESSION['vsAdmin']);
header('Location:adminlogin.php?logout');
exit();
?>