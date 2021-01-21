<?php function head(){ ?>
<title>CMS Web Corporate</title>
<link rel="stylesheet" type="text/css" href="../style/adminstyle.css" />
<?php } ?>



<?php function get_head() { ?>
<h1>CMS Corporateweb</h1>
<h2>Content Management System</h2>
<script type="text/javascript" src="../js/tinymce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
	//general options
	mode : "textareas",
	theme: "advanced",
});
</script>
<?php } ?>



<?php function get_menu() { ?>
<ul>
          <li><a href="admin.php?news">News</a></li>
          <li><a href="admin.php?blogs">Blogs</a></li>
          <li><a href="admin.php?comments">Comments</a></li>
          <li><a href="admin.php?member">Member</a></li>
</ul>
<?php } ?>



<?php function get_news() {?>
 <h2>News</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          
          <?php
		  //1. Koneksi ke server
		  
		  //2. pilih database
		  
		  //3.buat syntax sql
		  $sql="select * from news_tbl order by createdate ASC";
		  //4. lakukan syntax sql
		  $qnews=mysql_query($sql,$GLOBALS["koneksi"]);
		  //5. masukkan hasil query ke variable array
		  $rownews=mysql_fetch_array($qnews);
		  //6. apakah hasil ada?
		  ?>
          
          <?php if (!empty($rownews)){?>
          <?php do { ?>
          <tr>
            <td class="tablevalue"><?php echo $rownews["id"]; ?></td>
            <td class="tablevalue"><?php echo $rownews["createdate"]; ?></td>
            <td class="tablevalue"><img src="../images/news/<?php echo $rownews["image"]; ?>" width="100"></td>
            <td class="tablevalue"><?php echo $rownews["title"]; ?></td>
            <td class="tablevalue"><?php echo $rownews["synopsis"]; ?></td>
            <td class="tablevalueright">
            <a href="admin.php?newseditform&id=<?php echo $rownews["id"]; ?>">
            <img src="../asset/b_edit.png" />
            </a>            
            &nbsp;&nbsp;
            <a onclick="javascript:return confirm('Anda Yakin akan menhapusnya???');" href="admin.php?newsdelete&id=<?php echo $rownews["id"]; ?>">
            <img src="../asset/b_drop.png" />
            </a>
            </td>
          </tr>
          <?php } while ($rownews=mysql_fetch_array($qnews)); ?>
          <?php 
		  } else {?>
          <tr>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalueright">
            <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
            <img src="../asset/b_drop.png" />
            </td>
          </tr>
        </table>
        <?php } ?>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>



<?php function get_blogs() {?>
 <h2>Blogs</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          <tr>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalueright">
            <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
            <img src="../asset/b_drop.png" />
            </td>
          </tr>
        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>



<?php function get_comments() {?>
 <h2>Comments</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          <tr>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalueright">
            <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
            <img src="../asset/b_drop.png" />
            </td>
          </tr>
        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>


<?php function get_member() {?>
 <h2>Member</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="6%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="25%" class="tableheader">Image</td>
            <td width="15%" class="tableheader">Title</td>
            <td width="31%" class="tableheader">Sinopsis</td>
            <td width="7%" class="tableheader">&nbsp;</td>
          </tr>
          <tr>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalue">&nbsp;</td>
            <td class="tablevalueright">
            <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
            <img src="../asset/b_drop.png" />
            </td>
          </tr>
        </table>
         <br />
         <a href="admin.php?newsadd">+&nbsp;Add</a>
<?php } ?>

<?php function get_footer(){ ?>
Copyrights &copy; 2011 Baba Studio
<?php } ?>

<?php function get_newsaddform(){ ?>
	<h2>News</h2>
   <br />
   <form id="frmnewsadd" name="frmnewsadd" action="admin.php?newsaddsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Title</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="title" id="title" required />
          </td>
        </tr> 
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>
           <select id="day" name="day">
           	<option value="">Day</option>
            <?php for($day=1;$day<=31;$day++){ ?>
            <?php 
				//cek apakah variable day = hari ini
				if ($day==get_currentsingledate("day")) { 
					$selected="selected='selected'";
				}
                else{
					$selected="";
                }
				?>
            <option value="<?php echo $day; ?>" <?php echo $selected; ?>><?php echo $day; ?> </option>
            <?php } ?>
           </select>
           &nbsp;
           <select id="month" name="month">
           	<option value="">Month</option>
            <?php for($month=1;$month<=12;$month++){ ?>
            <?php 
				//cek apakah variable day = hari ini
				if ($month==get_currentsingledate("month")) { 
					$selected="selected='selected'";
				}
                else{
					$selected="";
                }
				?>
            <option value="<?php echo $month; ?>" <?php echo $selected; ?>><?php echo bulan($month); ?></option>
            <?php } ?>
           </select>
           &nbsp;
           <select id="year" name="year">
           	<option value="">Year</option>
            <?php for($year=2013;$year>=1905;$year--){ ?>
            <?php 
				//cek apakah variable day = hari ini
				if ($year==get_currentsingledate("year")) { 
					$selected="selected='selected'";
				}
                else{
					$selected="";
                }
				?>
            <option value="<?php echo $year; ?>" <?php echo $selected; ?>><?php echo $year; ?></option>
            <?php } ?>
           </select>
           &nbsp;
           &nbsp;&nbsp;
           <input type="text" size="5" name="hour" id="hour" value="<?php echo get_currentsingledate("hours");?>" />
           &nbsp;:&nbsp;
           <input type="text" size="5" name="minutes" id="minutes" value="<?php echo get_currentsingledate("minutes");?>" />
          </td>
        </tr>  
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
           <input type="file" size="40" name="image" id="image" value="" />
          </td>
        </tr> 
        <tr>
          <td>Sinopsis</td>
          <td>:</td>
          <td>
           <textarea id="synopsis" name="synopsis" cols="40" rows="8" required></textarea>
          </td>
        </tr>     
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td>
           <textarea id="detail" name="detail" cols="40" rows="8" required></textarea>
          </td>
        </tr> 
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="submit" id="newssubmit" name="newssubmit" value="INSERT NEWS" />
          </td>
        </tr> 
                 
      </table>
   </form>
<?php } ?>

<?php function get_newseditform(){ ?>
	<?php 
	//1. koneksi
	
	
	//2. pilih db
	
	
	//3. buat syntax sql
	$id=$_GET["id"];
	
	//4. buat variable sql
	$sql="select * from news_tbl where id=$id";
	
	//5. jalankan sql
	$qedit=mysql_query($sql,$GLOBALS["koneksi"]);
	
	//6. masukkan query ke array
	$rowedit=mysql_fetch_array($qedit);
	
	//7. cek apakah hasil menjalankan perintah sql ada hasilnya?
	if(!empty($rowedit)){
		$title=$rowedit["title"];
		$createdate=$rowedit["createdate"];
		$yeardate=substr($createdate,0,4);
		$monthdate=substr($createdate,5,2);
		$daydate=substr($createdate,8,2);
		$hourdate=substr($createdate,11,2);
		$minutesdate=substr($createdate,14,2);
		$image=$rowedit["image"];
		$synopsis=$rowedit["synopsis"];
		$detail=$rowedit["detail"];
	}
	?>
	<h2>News</h2>
   <br />
   <form id="frmnewedit" name="frmnewedit" action="admin.php?newseditsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Title</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="title" id="title" required value="<?php echo $title; ?>" />
          </td>
        </tr> 
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>
           <select id="day" name="day">
           <option value="">Day</option>
            <?php $dayselected=""; ?>
            <?php for($day=1;$day<=31;$day++){ ?>
            <?php 
				if($day==$daydate){
					$dayselected="selected='selected'";
				}else{
					$dayselected="";
				}
			?>
            <option value="<?php echo $day; ?>" <?php echo $dayselected; ?>><?php echo $day; ?> </option>
            <?php } ?>
           </select>
           &nbsp;
           <select id="month" name="month">
           	<option value="">Month</option>
            <?php $monthselected=""; ?>
            <?php for($month=1;$month<=12;$month++){ ?>
            <?php 
				if($month==$monthdate){
					$monthselected="selected='selected'";
				}else{
					$monthselected="";
				}
			?>
            <option value="<?php echo $month; ?>" <?php echo $monthselected; ?>><?php echo bulan($month); ?></option>
            <?php } ?>
           </select>
           &nbsp;
           <select id="year" name="year">
           	<option value="">Year</option>
            <?php $yearselected=""; ?>
            <?php for($year=2013;$year>=1905;$year--){ ?>
            <?php 
				if($year==$yeardate){
					$yearselected="selected='selected'";
				}else{
					$yearselected="";
				}
			?>
            <option value="<?php echo $year; ?>" <?php echo $yearselected; ?>><?php echo $year; ?></option>
            <?php } ?>
           </select>
           &nbsp;
           &nbsp;&nbsp;
           <input type="text" size="5" name="hour" id="hour" value="<?php echo $hourdate ;?>" />
           &nbsp;:&nbsp;
           <input type="text" size="5" name="minutes" id="minutes" value="<?php echo $minutesdate;?>" />
          </td>
        </tr>  
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
          <img width="200" src="../images/news/<?php echo $image; ?>" />
           <input type="hidden" id="oldimage" name="oldimage" value="<?php echo $image; ?>" />
           <input type="file" size="40" name="image" id="image" value="" />
          </td>
        </tr> 
        <tr>
          <td>Sinopsis</td>
          <td>:</td>
          <td>
           <textarea id="synopsis" name="synopsis" cols="40" rows="8" required><?php echo $synopsis; ?></textarea>
          </td>
        </tr>     
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td>
           <textarea id="detail" name="detail" cols="40" rows="8" required><?php echo $detail; ?></textarea>
          </td>
        </tr> 
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
           <input type="submit" id="newssubmit" name="newssubmit" value="Update News" />
          </td>
        </tr> 
                 
      </table>
   </form>
<?php } ?>

<?php function get_newsaddsubmit() { 
	//1. koneksi ke server
	
	//2. pilih database
	
	//3. tampung hasil masukan form
	$title=$_POST["title"];
	$day=$_POST["day"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	$hour=$_POST["hour"];
	$minutes=$_POST["minutes"];
	$newsdate="$year-$month-$day $hour:$minutes";
	$synopsis=$_POST["synopsis"];
	$detail=$_POST["detail"];
	
	//cek apakah proses upload image berhasil
	if($_FILES["image"]["error"]==0){
		//jika berhasil
		$image=$_FILES["image"]["name"];
		//pindahkan hasil file
		move_uploaded_file($_FILES["image"]["tmp_name"],"../images/news/$image");
	}
	else{
		//gagal
		$image="";
	}
	//4. buat syntax sql
	$sql="insert into news_tbl(title,createdate,image,synopsis,detail) values('$title','$newsdate','$image','$synopsis','$detail')";
	
	//5. execute syntax sql
	mysql_query($sql,$GLOBALS["koneksi"]);
	
	//6.kembali ke admin php
	gotopage("admin.php?news");
}?>

<?php function get_newseditsubmit() { 
	//1. koneksi ke server
	
	//2. pilih database
	
	//3. tampung hasil masukan form
	$title=$_POST["title"];
	$day=$_POST["day"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	$hour=$_POST["hour"];
	$minutes=$_POST["minutes"];
	$newsdate="$year-$month-$day $hour:$minutes";
	$synopsis=$_POST["synopsis"];
	$detail=$_POST["detail"];
	$id=$_POST["id"];
	$oldimage=$_POST["oldimage"];
	
	//cek apakah proses upload image berhasil
	if($_FILES["image"]["error"]==0){
		//jika berhasil
		$image=$_FILES["image"]["name"];
		//pindahkan hasil file
		move_uploaded_file($_FILES["image"]["tmp_name"],"../images/news/$image");
	}
	else{
		//jika gagal cek old image ada isinya?
		if($oldimage!=""){
			//jika ada isinya sama dengan file sebelumnya
			$image=$oldimage;
		}else{
			//jika tidak ada memang kosong
			$image="";
		}
	}
	//4. buat syntax sql
	$sql="UPDATE news_tbl SET 
	title='$title',
	createdate='$newsdate',
	image='$image',
	synopsis='$synopsis',
	detail='$detail' 
	WHERE id=$id";
	
	//5. execute syntax sql
	mysql_query($sql,$GLOBALS["koneksi"]);
	
	//6.kembali ke admin php
	gotopage("admin.php?news");
}?>

<?php function get_newsdelete() {
	//1. koneksi database
	
	
	//2. pilih databaseb
	mysql_select_db("alif");
	
	//3. apakah ada image?
	//buat syntax sql untuk mendapatkan info image
	$id=$_GET["id"];
	$sqlimg="select image from news_tbl where id=$id";
	
//4. jalankan syntax sql
	$qimg=mysql_query($sqlimg, $GLOBALS["koneksi"]);
	
	//5. masukkan hasil query ke array
	$rowimg=mysql_fetch_array($qimg);
	
	//6. cek apakah hasil query ada hasilnya?
	if(!empty($rowimg)){
		//jika ada apakah file tersebut ada di dalam folder "../images/news/"
		$imgpath="../images/news/" . $rowimg["image"];
		//cek apakah file tersebut ada?
		if(file_exists($imgpath)){
			//jika ada file tersebut dihapus
			unlink($imgpath);
		}
	}
	
	//proses ke 2
	//buat syntax sql untuk menghapus news
	$sqlnews="delete from news_tbl where id=$id";
	
	//jalankan syntax sql untuk menghapus news
	mysql_query($sqlnews, $GLOBALS["koneksi"]);
	
	//kembali ke admin.php?news
	gotopage("admin.php?news");
} ?>

<?php function get_comment() {?>
 <h2>Comments</h2>
     <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="3%" class="tableheader">Id</td>
            <td width="16%" class="tableheader">Date</td>
            <td width="40%" class="tableheader">News</td>
            <td width="31%" class="tableheader">Comment</td>
            <td width="3%" class="tableheader">Allowed</td>
            <td width="10%" class="tableheader">&nbsp;</td>
          </tr>
          
          <?php
		  	//3. membuat syntax sql
		  	$sql="SELECT newscomment_tbl.*,news_tbl.title from newscomment_tbl INNER JOIN news_tbl on newscomment_tbl.newsid=news_tbl.id";
			//4. menjalankan perintah sql
			$qcomments=mysql_query($sql, $GLOBALS["koneksi"]);
			
			//5. masukkan hasil ke array
			$rowcomments=mysql_fetch_array($qcomments);
			
			//6. menampilkan data
		  ?>
          
          <?php if(!empty($rowcomments)) {?>
          <?php do { ?>
          <tr>
            <td class="tablevalue"><?php echo $rowcomments["id"]; ?></td>
            <td class="tablevalue"><?php echo $rowcomments["createdate"]; ?></td>
            <td class="tablevalue"><?php echo $rowcomments["title"]; ?></td>
            <td class="tablevalue"><?php echo $rowcomments["comments"]; ?></td>
            <td class="tablevalue"><?php if($rowcomments["allowed"]==1) {echo "yes"; }else{ echo"no";} ?></td>
            <td class="tablevalueright">
            <a href="admin.php?comentseditform&id=<?php echo $rowcomments["id"] ?>">
            <img src="../asset/b_edit.png" />
            </a>            
            &nbsp;&nbsp;
            <a onclick="javascript:return confirm('Anda Yakin akan menhapusnya???');" href="admin.php?commentsdelete&id=<?php echo $rowcomments["id"] ?>">
            <img src="../asset/b_drop.png" />
            </a>
            </td>
          </tr>
          <?php }while($rowcomments=mysql_fetch_array($qcomments)); ?>
          <?php }else {?>
          
          <tr>
            <td class="tablevalue"></td>
            <td class="tablevalue"></td>
            <td class="tablevalue"></td>
            <td class="tablevalue"></td>
            <td class="tablevalue"></td>
            <td class="tablevalueright">
            <a href="admin.php?commentseditform&id=">
            <img src="../asset/b_edit.png" />
            </a>            
            &nbsp;&nbsp;
            <a onclick="javascript:return confirm('Anda Yakin akan menhapusnya???');" href="admin.php?commentsdelete&id=<?php echo $rownews["id"]; ?>">
            <img src="../asset/b_drop.png" />
            </a>
            </td>
          </tr>
          <?php }?>
        </table>
         
<?php } ?>

<?php function get_commentseditform(){ ?>
	<?php 
	//3.buat perintah sql
	$id=$_GET["id"];
	$sql="select newscomment_tbl.*,news_tbl.title from newscomment_tbl INNER JOIN news_tbl on newscomment_tbl.newsid=news_tbl.id where newscomment_tbl. id='$id'";
	
	//4. jalankan perintah sql
	$qcomments=mysql_query($sql,$GLOBALS["koneksi"]);
	
	//5. masukkan hasil ke array
	$rowcomments=mysql_fetch_array($qcomments);
	
	//6. cek apakah hasil menjalankan perintah sql ada hasilnya?
		if(!empty($rowcomments)){
			$title=$rowcomments["title"];
			$createdate=$rowcomments["createdate"];
			$comments=$rowcomments["comments"];
			$allowed=$rowcomments["allowed"];
		}else{
			
		}
	?>
    
	<h2>Comments</h2>
   <br />
   <form id="frmnewedit" name="frmnewedit" action="admin.php?commentseditsubmit" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Date</td>
          <td>:</td>
          <td><?php echo $createdate; ?></td>
        </tr>
         
        <tr>
          <td>News</td>
          <td>:</td>
          <td><?php echo $title; ?></td>
        </tr>
          
        <tr>
          <td>Comments</td>
          <td>:</td>
          <td><?php echo $comments; ?></td>
        </tr> 
        
        <tr>
          <td>Allowed</td>
          <td>:</td>
          <td>
          <select id="allowed" name="allowed">
          	<?php if($allowed==1) {?>
            	<option value="0">0</option>
                <option value="1" selected>1</option>
            <?php } else{?>
            	<option value="0" selected>0</option>
                <option value="1">1</option>
            <?php }?>
          </select></td>
        </tr>
             
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>
           <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
           <input type="submit" id="newssubmit" name="newssubmit" value="Set Comments" />
          </td>
        </tr> 
                 
      </table>
   </form>
<?php } ?>

<?php function get_commentseditsubmit() {
		//3. tampung hasil input form
		$id=$_POST["id"];
		$allowed=$_POST["allowed"];
		$id=$_POST["id"];
		
		//4. buat syntax sql
		$sql="update newscomment_tbl set allowed=$allowed where id=$id";
		
		//5. jalankan perintah sql
		mysql_query($sql,$GLOBALS["koneksi"]);
		
		//6. kembali ke comments
		gotopage("admin.php?comments");
	}?>