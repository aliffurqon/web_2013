<?php
//3. tampung hasil masukan
	$sender=$_POST["sender"];
	$newsid=$_POST["newsid"];
	$comment=$_POST["comment"];
	//4. buat perintah sql
	$sql="insert into newscomment_tbl(sender, newsid, comments, createdate) values ('$sender,','$newsid','$comment',now())";
	//5. jalankan perintah sql
	mysql_query($sql,$GLOBALS["koneksi"]);
	//6. kembali ke news yang bersangkutan
	echo "<script language='javascript'>";
	echo "window.location.href='index.php?newsdetail&id=$newsid';";
	echo "</script>";
?>