<?php
session_start();
ob_start();

if(isset($_POST['login']))
{
include 'db.php';
$sql = "SELECT * FROM `users` WHERE `Username`='".$_POST['username']."' && `pass`='".$_POST['password']."'";
$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {
    header("Location:RezerveList.php");
	$_SESSION['u']=12;
}
else{
    header ("Location:index.php");
	$_SESSION['msg']='نام کاربری یا کلمه عبور اشتباه است';
	}
}



?>
