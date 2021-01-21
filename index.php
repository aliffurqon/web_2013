<?php
//important, jika bermain session ini harus ada
	ob_start();
	session_start();
	ob_end_clean();
?>

<?php
error_reporting(0);
include("config/config.php");
include("function/function.php");
include("function/utility.php");
?>
<!doctype html>
<html>
<head>
	<?php head(); ?>
</head>

<body background="black">
	<div id="wrapper">
    	<div id="header">
        	<!--- Start Header --->
            <?php get_header();?>
            <!--- End Header --->
        </div>
        
        <div id="nav">
        <!--- Start Nav --->
        <?php get_menu(); ?>
        <!--- End Nav --->
        </div>
        
        <div id="content">
        <!--- Start Content --->
        <div id="membersearch" class="clearfloat">
        	<div id="member">
            	<?php if(isset($_SESSION["membername"])) { ?>
                	<strong><?php echo $_SESSION["membername"]?></strong> 
                    &nbsp;
                    <a href="memberlogout.php">LOGOUT</a>
				<?php } else {?>
                <form id="loginmember" name="loginmember" method="post" action="loginmembersubmit.php">
                	email&nbsp;&nbsp;
                    <input type="email" id="membername" name="membername" size="15" required>
                    &nbsp;&nbsp;
                    password&nbsp;&nbsp;
                    <input type="password" id="memberpassword" name="memberpassword" size="15" required>
                    &nbsp;
                    <input type="submit" id="loginmembersubmit" value="login">
                </form>
                <div id="registerclick">
                	if you not have account please register <a href="index.php?registermember">HERE</a>
                </div>
				<?php }?>
                
                <?php if(isset($_GET["loginerror"])){ ?>
                <br>
                <span style="color:#F00">
                EMAIL & PASSWORD ERROR, Please login again..
                </span>
                <?php } ?>
            </div>
            
            <div id="search">
            <form id="searchform" name="searchform" method="post" action="index.php?searchtext">
            search&nbsp;&nbsp;
            	<input type="text" id="searchtext" name="searchtext">
                &nbsp;
                <input type="submit" id="searchsubmit" value="GO">
            </form>
            </div>
        </div>

        
		<?php
		// cek apakah url paramater ada? 
			if(isset($_GET["home"])) {
				//jika ada, panggil function get_home
				//get_home();
				//atau
				include("function/home.php");
			}
			else if (isset($_GET["about"])){
				get_about();
			}
			else if(isset($_GET["blogs"])){
				get_blogs();
			}
			else if (isset($_GET["contact"])){
				get_contact();
			}
			else if (isset($_GET["newsdetail"])){
				get_detail();
			}
			else if (isset($_GET["gallery"])){
				gallery();
			}
			else if (isset($_GET["searchtext"])){
				get_searchresult();
			}
			else if (isset($_GET["commentsubmit"])){
				get_commentsubmit();
			}
			else if (isset($_GET["registermember"])){
				get_registerform();
			}
			else if (isset($_GET["registersubmit"])){
				get_registersubmit();
			}
			else {
				//jika tidak ada url parameter yang diatas maka,
				include("function/home.php");
			}
		?>
        <!--- End Content --->
        </div>
        
        <div id="footer">
        <!--- Start Footer --->
       <?php get_footer(); ?>
        <!--- End Footer --->
        </div>
    </div>
</body>
</html>
