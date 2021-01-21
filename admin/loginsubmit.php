<?php 
ob_start();
session_start();
ob_clean();
include("../config/config.php");
//1. koneksi database


//2. pilih db


//3. tampung masukan form
$username=$_POST["username"];
$userpassword=md5($_POST["userpassword"]);

//4. buat syntax sql
$sql="select * from user_tbl where username='$username' AND userpassword='$userpassword'";

//5. lakukan syntax sql
$qlogin=mysql_query($sql, $GLOBALS["koneksi"]);

//6. masukkan hasil query ke array
$rowlogin=mysql_fetch_array($qlogin);

//7. apakah ada hasilnya?
	if(!empty($rowlogin)){
		$_SESSION["username"]=$username;
		//ke admin.php
		header("location:admin.php");
	}else{
		header("location:index.php?loginerror");
	}
?>