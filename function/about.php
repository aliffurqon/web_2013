<?php
// 1. koneksi database
$koneksi=mysql_connect("localhost","root","");

//2. pilih database
mysql_select_db("alif", $koneksi);

// PAGGING
//3. Tentukan jumlah data dalam satu halaman\
$jumlah_data=2;

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
$sql="select * from gallery LIMIT $awal_data,$jumlah_data";

//7.Melakukan syntax sql
$qnews=mysql_query($sql,$koneksi);

//8. Memasukkan hasil query ke array
$rownews=mysql_fetch_array($qnews);
?>
<!-- Kontent -->
<h1 class="judulhalaman"> About Us</h1>

	<?php do {?>
	<div id="gallery">
    	<div class="box">
        	<div class="isigallery">
            	<a href="index.php?gallery&id=<?php echo $rownews["id"]; ?>"><img src="images/gallery/<?php echo $rownews["foto"]; ?>" /></a>
                <h1 class="judulgallery"><?php echo $rownews["title"];?></h1>
            </div>
        </div>
    </div>
    <?php } while ($rownews=mysql_fetch_array($qnews)); ?>
	
    <!-- Pagging -->
    
    <?php

 
//10. Tentukan Jumlah data sebenarnya
$sqltotal="select * from gallery";
$qtotal=mysql_query($sqltotal, $koneksi);
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
	<a class="pagelink" href="index.php?about&page=<?php echo $i; ?>">
		<?php echo $i; ?>
	</a>
	<?php } ?>
    <?php } ?>
<?php } ?>
<br>