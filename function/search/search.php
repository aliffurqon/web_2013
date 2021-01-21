<?php
       	// 3. Tampung hasil search text dari form
		$searchtext=$_POST["searchtext"];
		// 4.buat syntax SQL terhadap langkah 3 yaitu no id nya di tabel
		$sql="SELECT * FROM news_tbl WHERE title LIKE '%$searchtext%'";
		//echo $sql;
		// 5.jalankan syntax SQL
		$qsearch=mysql_query($sql,$GLOBALS["koneksi"]);
		// 6.masukkan hasil query ke variabel array
		$rowsearch=mysql_fetch_array($qsearch);
		//7.tampilkan hasilnya dengan looping
	?>		
	
	<h2>Hasil Pencarian : </h2>
	
	<?php
		//check terlebih dahulu apakah data ada atau tdk
		// jika tidak kosong
		if (!empty($rowsearch)) {
	?>
	
	<?php do { ?>
		<!-- start looping search-->
		<div class="newsitem">
			<h2 class="newsdate"><?php echo $rowsearch["createdate"]; ?></h2>
			<h3 class="newstitle"><?php echo $rowsearch["title"]; ?></h3>
			<p class="newsparagraf">
				<img src="images/news/<?php echo $rowsearch["image"]; ?>" />
				<?php echo $rowsearch["synopsis"]; ?>
			</p>
			<a href="index.php?newsdetail&id=<?php echo $rowsearch["id"]; ?>">detail&nbsp;&raquo;</a>
		</div>
		<!-- end looping search-->
	<?php } while ($rowsearch=mysql_fetch_array($qsearch)); ?>

	<?php
	}
	else 
	{
	//jika tidak ada
	echo "Data Tidak ditemukan...";
	}
	?>
