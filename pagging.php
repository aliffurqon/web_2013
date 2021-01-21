<?php
// 1. koneksi database
$koneksi=mysql_connect("localhost","root","");

//2. pilih database
mysql_select_db("alif", $koneksi);

//3. Tentukan jumlah data dalam satu halaman\
$jumlah_data=3;

//4. Menentukan Page mana yang aktif
//cek URL Paramater "page"
if (isset($_GET["page"])){
	//jika ada
	$page_aktif=$_GET["page"]-1;
}
else{
	//jika tidak
	$page_aktif=0;
}

//5. Menentukan data awal dari halaman yang aktif
$awal_data=$page_aktif*$jumlah_data;

//6. Buat Syntax SQL
$sql="select * from news_tbl LIMIT $awal_data,$jumlah_data";

//7.Melakukan syntax sql
$qnews=mysql_query($sql,$koneksi);

//8. Memasukkan hasil query ke array
$rownews=mysql_fetch_array($qnews);

//9. Mmebuat LOOPING
?> <!-- Hapus aja -->

<?php do {?>
<!--start looping-->
<div class="newsitem">
	<h2 class="newsdate">
    	<?php echo indonesiandate($rownews["createdate"]); ?>
    </h2>
    <h3 class="newstitle">
    	<?php echo $rownews["title"];?>
    </h3>
    <p class="newsparagraph">
    <img src="images/news/<?php echo $rownews["image"]; ?>">
    <?php echo $rownews["synopsis"]; ?>
    <a href="index.php?newsdetail&id=<?php echo $rownews["id"]; ?>">detail &nbsp; &nbsp; &gt; &gt;</a></p>
</div>
<!--end looping-->
<?php } while ($rownews=mysql_fetch_array($qnews)); ?>

<?php 
//10. Tentukan Jumlah data sebenarnya
$sqltotal="select * from news_tbl";
$qtotal=mysql_query($sqltotal, $koneksi);
$total_data=mysql_num_rows($qtotal);

//11. Berapa halaman yang didapat
//ceil untuk membulatkan
$total_page=ceil($total_data/$jumlah_data)

//12. tampilkan link page dengan looping
?>

<?php for ($i=1;$i<=$total_page;$i++) { ?>
<a href="index.php?page= <?php echo $i; ?>">
<?php echo $i; ?>
</a>
&nbsp; | &nbsp;
<?php } ?>