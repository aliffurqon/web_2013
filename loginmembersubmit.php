<?php
// aktifkan session
	ob_start();
	session_start();
	ob_end_clean();
	
	//1. koneksi ke database
	$koneksi=mysql_connect("localhost","root","");
	//2. Pilih database
	mysql_select_db("aliffurq_db");
	//3. tampung hasil input dari form
	$membername=$_POST["membername"];
	$memberpassword=md5($_POST["memberpassword"]); // md5 untuk mengkonfert agar sama
	//4. buat perintah sql
	$sql="select * from member_tbl where membername='$membername' and memberpassword='$memberpassword'";
	//5. jalankan perintah sql
	$qlogin=mysql_query($sql,$koneksi);
	//6. masukkan ke array
	$rowlogin=mysql_fetch_array($qlogin);
	//7. cek apakah ada hasilnya?
	if(!empty($rowlogin)){
		//jika ada buat variable session
		$_SESSION["membername"]=$membername;
		//kembali ke index.php
		header("location:index.php");
	}else{
		header("location:index.php?loginerror");
	}
?>