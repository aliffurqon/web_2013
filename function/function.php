<?php
	function head(){
		?>
    <meta charset="utf-8">
	<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
<?php
	}
?>



<?php function get_header() {?>
		<h1>Welcome to My Blog</h1>
        <h2>U Can Find Anything in Here</h2>
<?php } ?>



<?php function get_menu() {?>
	<ul>
        	<li>
            <a href="index.php?home">Home</a>
            </li>
            
            <li>
            <a href="index.php?about">About Us</a>
            </li>
            
            <li>
            <a href="index.php?blogs">Blogs</a>
            </li>
            
            <li>
            <a href="index.php?contact">Contact Us</a>
            </li>
        </ul>
<?php } ?>



<?php function get_about() { ?>
	<?php include("about.php"); ?>
<?php } ?>



<?php function get_blogs(){ ?>
	<?php include("blogs.php"); ?>	
<?php } ?>



<?php function get_contact(){ ?>
	<?php include("contact.php"); ?>	
<?php } ?>



<?php function get_footer(){ ?>
	 Copyrights &copy; 2013
<?php } ?>



        
<?php function get_detail () {?>
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
<div class="jadiinsatutanggaltitledetail">
<h2 class="detailnewsdate">
	<?php echo indonesiandate($rownews["createdate"]); ?>
</h2>

<h3 class="detailtitle">
	<?php echo $rownews["title"]; ?>
</h3>
</div>
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
else{ ?>
	<div id="registerclickdetail">if you want comment for this news please login first. But if you not have account please register first <a href='index.php?registermember'>HERE</a></div>
<?php }
?>
<?php } ?>





<?php function gallery() {?>
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
<div class="jadiinsatutanggaltitledetail">
<h1 class="detailtitle"><?php echo $rownews["title"];?></h1>
</div>

<p class="newsdetail">
<img src="images/gallery/<?php echo $rownews["foto"]; ?>" /><?php echo str_replace(chr(13),"<br>",$rownews["detail"]); ?>
</p>
<?php } ?>





<?php function get_searchresult() 
{ ?>
	<?php
       	// 3. Tampung hasil search text dari form
		$searchtext=$_POST["searchtext"];
		// 4.buat syntax SQL terhadap langkah 3 yaitu no id nya di tabel
		$sql="SELECT * FROM news_tbl WHERE title LIKE '%$searchtext%' OR detail LIKE '%$searchtext%'";
		//echo $sql;
		// 5.jalankan syntax SQL
		$qsearch=mysql_query($sql,$GLOBALS["koneksi"]);
		// 6.masukkan hasil query ke variabel array
		$rowsearch=mysql_fetch_array($qsearch);
		//7.tampilkan hasilnya dengan looping
	?>		
	
	<h2 class="judulhalaman">Hasil Pencarian : </h2>
	
	<?php
		//check terlebih dahulu apakah data ada atau tdk
		// jika tidak kosong
		if (!empty($rowsearch)) {
	?>
	
	<?php do { ?>
		<!-- start looping search-->
        
		<div class="newsitem">
        	<div class="jadiinsatutanggaltitle">
                <h2 class="newsdate"><?php echo indonesiandate($rowsearch["createdate"]); ?></h2>
                <h3 class="newstitle"><a href="index.php?newsdetail&id=<?php echo $rowsearch["id"]; ?>"><?php echo $rowsearch["title"]; ?></a></h3>
            </div>
			<p class="newsparagraph">
				<img src="images/news/<?php echo $rowsearch["image"]; ?>" />
				<a href="index.php?newsdetail&id=<?php echo $rowsearch["id"]; ?>"><?php echo $rowsearch["synopsis"]; ?></a>
			</p>
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
<?php 
} ?>





<?php function get_newscomments($newsid){?>
	<div class="judulhalaman"><h2> Comment <h2></div>
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
    <?php //untuk menghilangkan komen 
	if($rowcomment["allowed"]=="1"){ ?>
    <div class="newsitem">
    	<div class="jadiinsatutanggaltitle">
            <h2 class="detailnewsdate"><?php echo $rowcomment["createdate"]; ?></h2>
            <h3 class="detailtitle"><?php echo $rowcomment["sender"]; ?></h3>
        </div>
        <p class="newsdetail">
		<?php
			if($rowcomment["allowed"]==1){
				echo $rowcomment["comments"];
			}else{
				//untuk memblokir komen
				echo "<span style='color:#ff0000; font-weight:bold; font-size:14px'>This message has blocked</span>";
			}
		?>
        </p>
    </div>
    <?php }?>
	<?php 
		}while ($rowcomment=mysql_fetch_array($qcomment));
	} else {
		echo "no coment for this news";
	}
	 ?>
<?php } ?>




<?php function get_newscommentform($newsid) {?>
		<p>
    	Write comment here
        </p>
        
        <script type="text/javascript" language="javascript">
			function checkbeforesubmit(){
				//untuk membuat variable dalam javascript dimana variable form untuk menampung informasi tentang tag form
				var theform;
				thefrom=document.getElementById("commentform");
				var yourcomment;
				yourcomment=theform.comment.value;
				if (yourcomment=="" || yourcomment.lenght==0){
					alert("please insert your comment");
					theform.comment.focus();
					return false;
				}
				//jika tidak ada masalah form melakukan submit
				theform.submit();
				return true;
			}
		</script>
		
        <form id="commentform" name="commentform" method="post" action="index.php?commentsubmit" onsubmit="return checkbeforesubmit();">
        	<table width="500" cellspacing="5" cellpadding="3" border="0">
            	<tr>
                	<td width="100"><strong>Email</strong></td>
                    <td width="5"></td>
                    <td width="395">
                    <input type="email" class="comenttexfield" id="sender" name="sender" placeholder="Please Insert Your email" required>
                    <input type="hidden" id="newsid" name="newsid" value="<?php echo $newsid; ?>">
                    </td>
                </tr>
                <br>
                <tr>
                	<td width="100" valign="top"><strong>Your Comment</strong></td>
                    <td width="5" valign="top"></td>
                    <td width="395"><textarea id="comment" name="comment" class="commentextarea" placeholder="Please Insert Your Comment" required="required"></textarea></td>
                </tr>
                <br>
                <tr>
                	<td width="100">&nbsp;</td>
                    <td width="5">&nbsp;</td>
                    <td width="395"><input type="submit" id="commentsubmit" name="commentsubmit" value="Send" class="commentsubmitbutton"></td>
                </tr>
            </table>
        </form>
<?php } ?>

<?php function get_commentsubmit(){
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
}
?>

<?php function get_registerform(){ ?>
<h2 class="judulhalaman">Register Member</h2>
<br>
<form id="registerform" name="registerform" method="POST" action="index.php?registersubmit">
	<table width="500" border="0" cellpadding="3" cellspacing="5">
    	<tr>
        	<td>Your Email</td>
            <td>:</td>
            <td><input type="email" id="membername" name="membername" class="commenttextfield" required placeholder="Input your EMAIL" ></td>
        </tr>
            	<tr>
        	<td>Your Password</td>
            <td>:</td>
            <td><input type="password" id="memberpassword" name="memberpassword" class="commenttextfield" required placeholder="Enter your password" ></td>
        </tr>
        <tr>
        	<td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" id="registersubmit" name="registersubmit" class="commenttextfield" value="Register"></td>
        </tr>

    </table>
</form>
<?php } ?>

<?php 
	function get_registersubmit(){
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
	}
?>

<?php function get_sidebar(){ ?>
<div id="contentright">
            	<div id="recentcomment">
                	<div class="recentcomentbox">
                    <h2>Recent Comment</h2>
                    	<?php 
						// 1. koneksi database
						$koneksi=mysql_connect("localhost","root","");
						
						//2. pilih database
						mysql_select_db("wcl",$koneksi);
						//6. Buat Syntax SQL
							$sql="select id, title from news_tbl order by id LIMIT 0,4";
							
							//7.Melakukan syntax sql
							$qrecentnews=mysql_query($sql,$koneksi);
							
							//8. Memasukkan hasil query ke array
							$rowrecentnews=mysql_fetch_array($qrecentnews);
						?>
                        <?php do {?>
                        <p class="pagerecentcomment"><a href="index.php?newsdetail&id=<?php echo $rowrecentnews["id"]; ?>"><?php echo $rowrecentnews["title"]; ?></a></p>
                        <?php } while ($rowrecentnews=mysql_fetch_array($qrecentnews)); ?>
                    </div>
                </div>
                
                <div id="recentpost">
                	<div class="recentpostbox">
                    <h2>Recent Post</h2>
                    	<?php 
						// 1. koneksi database
						$koneksi=mysql_connect("localhost","root","");
						
						//2. pilih database
						mysql_select_db("wcl",$koneksi);
						//6. Buat Syntax SQL
							$sql="select id, title from news_tbl order by id LIMIT 0,4";
							
							//7.Melakukan syntax sql
							$qrecentcomment=mysql_query($sql,$koneksi);
							
							//8. Memasukkan hasil query ke array
							$recentcomment=mysql_fetch_array($qrecentcomment);
						?>
                        <?php do {?>
                        <p class="pagerecentcomment"><a href="index.php?newsdetail&id=<?php echo $recentcomment["id"]; ?>"><?php echo $recentcomment["title"]; ?></a></p>
                        <?php } while ($recentcomment=mysql_fetch_array($qrecentcomment)); ?>
                    </div>
                </div>
            </div>
            <!-- akhir kontent kanan -->
<?php }?>