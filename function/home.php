<div class="clearfloat">
<div id="welcome">
    <h1> Welcome</h1>
    <p id="welcomeparagraf">
    Ini adalah proyek web setelah saya mengerti apa itu php. Web ini akan terus berkembang seiring dengan ilmu yang saya dapat. Jadi jangan segan segan untuk sering mengunjungi web ini, meskipun masih belum baik namun tiap harinya akan saya perbaiki. Dan juga konten yang tiap harinya diupdate, diambil dari sumber yang terpercaya. </p>
</div>

<h2 class="judulhalaman">News</h2>
<?php
// PAGGING
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
$qnews=mysql_query($sql,$GLOBALS["koneksi"]);

//8. Memasukkan hasil query ke array
$rownews=mysql_fetch_array($qnews);
?>
<div id="contentleft">
<?php do {?>
<!--start looping-->
<div class="newsitem">
	<div class="jadiinsatutanggaltitle">
        <h2 class="newsdate">
            <?php echo indonesiandate($rownews["createdate"]); ?>
        </h2>
        <h3 class="newstitle">
           <a href="index.php?newsdetail&id=<?php echo $rownews["id"]; ?>"><?php echo $rownews["title"]; ?></a>
        </h3>
    </div>
    
    <p class="newsparagraph">
    <img src="images/news/<?php echo $rownews["image"]; ?>">
    <a href="index.php?newsdetail&id=<?php echo $rownews["id"]; ?>"><?php echo $rownews["synopsis"]; ?></a>
</div>
<!--end looping-->
<?php } while ($rownews=mysql_fetch_array($qnews)); ?>
</div>

<div id="contentright">
	<?php echo get_sidebar(); ?>
</div>

<?php 
//10. Tentukan Jumlah data sebenarnya
$sqltotal="select * from news_tbl";
$qtotal=mysql_query($sqltotal, $GLOBALS["koneksi"]);
$total_data=mysql_num_rows($qtotal);

//11. Berapa halaman yang didapat
//ceil untuk membulatkan
$total_page=ceil($total_data/$jumlah_data);

//12. tampilkan link page dengan looping
?>
<!-- penghitungan jumlah page -->
<?php for ($i=1;$i<=$total_page;$i++) { ?>

	<?php
	//mengecek apakah url parameter ada?
	if(!isset($_GET["page"])&& $i==1){
		?>
         
	<span class="pagelinkactive"> 
		<?php echo $i; ?>
	</span>
    
    <?php
	}
	else{
	?>
    
    <?php if ($i==$_GET["page"]){ ?>
    <!-- memangil css -->
	<span class="pagelinkactive"> 
		<?php echo $i; ?>
	</span>
    
	<?php }else { ?>
	<a class="pagelink" href="index.php?page=<?php echo $i; ?>">
		<?php echo $i; ?>
	</a>
	<?php } ?>
    <?php } ?>
<?php } ?>
<br>
</div>