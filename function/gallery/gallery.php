<?php 
	//3. Tampung URL PARAMETER
	$id=$_GET["id"];
	//4. Buat langkah sql
	$sql="select * from gallery WHERE id=$id";
	//5. lakukan syntax SQL
	$qnews=mysql_query($sql,$GLOBALS["koneksi"]);
	//6. masukkan hasil query ke variable array
	$rownews=mysql_fetch_array($qnews);
?>

<h1 class="judulgallery"><?php echo $rownews["title"];?></h1>

<p class="gallerysdetail">
<img src="images/gallery/<?php echo $rownews["foto"]; ?>" /><?php echo str_replace(chr(13),"<br>",$rownews["detail"]); ?>
</p>