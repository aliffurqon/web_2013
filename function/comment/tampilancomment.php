<h2> Comment <h2>
    <?php 
	//3. syntax sql
	$sql="select * from newscomment_tbl where newsid=$newsid";
	//4, jalankan printah sql
	$qcomment=mysql_query($sql,$GLOBALS["koneksi"]);
	//5. masukkan ke array
	$rowcomment=mysql_fetch_array($qcomment);
	?>
    
    <?php 
	//6. cek apakah hasil menjalankan perintah ada hasilnya?
	if (!empty($rowcomment)){
		do {
	?>
	<!-- start looping data -->
    <div class="newsitem">
    	<h2 class="newsdate"><?php echo $rowcomment["createdate"]; ?></h2>
        <h3 class="newstitle"><?php echo $rowcomment["sender"]; ?></h3>
        <p class="newsparagraph"><?php echo $rowcomment["comments"];?></p>
    </div>
	<?php 
		}while ($rowcomment=mysql_fetch_array($qcomment));
	} else {
		echo "no coment for this news";
	}
	 ?>