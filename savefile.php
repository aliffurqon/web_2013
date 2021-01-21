<?php
//tampung hasil form &cek
if($_FILES["thefile"]["error"]==0){
	//jika berhasil
	//tampung nama file
	$thefile=$_FILES["thefile"]["name"];
	//pindahkan file yang du upload ke file images
	move_uploaded_file($_FILES["thefile"]["tmp_name"],"images/$thefile");
}else{
	//jika gagal
	$thefile="";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if($thefile!=""){
?>
<img src="images/<?php echo $thefile; ?>" width="500"
<?php } ?>
</body>
</html>