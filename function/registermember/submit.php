<?php		
        //3. tampung masukan form
		$membername=$_POST["membername"];
		$memberpassword=md5($_POST["memberpassword"]);
		//4. buat syntax sql
		$sql="insert into member_tbl(membername,memberpassword,createdate) values('$membername','$memberpassword',now())";
		//5. Jalankan perintah sql
		mysql_query($sql,$GLOBALS["koneksi"]);
		//6. kembali ke index.php
		echo"<script language='javascript'>";
		echo"window.location.href='index.php'";
		echo"</script>";
?>