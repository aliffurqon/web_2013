<?php 
	//3. Tampung URL PARAMETER
	$id=$_GET["id"];
	//4. Buat langkah sql
	$sql="select * from news_tbl WHERE id=$id";
	//5. lakukan syntax SQL
	$qnews=mysql_query($sql,$GLOBALS["koneksi"]);
	//6. masukkan hasil query ke variable array
	$rownews=mysql_fetch_array($qnews);
?>

<h2 class="newsdate">
	<?php echo indonesiandate($rownews["createdate"]); ?>
</h2>

<h3 class="newstitle">
	<?php echo $rownews["title"]; ?>
</h3>

<p class="newsdetail">
<img src="images/news/<?php echo $rownews["image"]; ?>" /><?php echo str_replace(chr(13),"<br>",$rownews["detail"]); ?>
</p>
<!-- satu bagian sama yang comment -->
<br><br>
<?php get_newscomments($id);?>
<br><br>

<?php 
//cek apakah session membername ada?
if(isset($_SESSION["membername"])){
	//jika ada
get_newscommentform($id); 
}
else{
	//tidak ada
	echo "if you want comment for this news please login first. But if you not have account please register first <a href='index.php?registermember'>HERE</a>";
}
?>