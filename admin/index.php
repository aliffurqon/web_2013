<!DOCTYPE HTML>
<html>
<head>
<title>Login CMS</title> 
<link rel="stylesheet" type="text/css" href="../style/adminstyle.css" />
 <script language="javascript" type="text/javascript">
   function chkBeforeSubmit() {
     //Varibel untuk diisi object dari tag form
     var theform;
	 theform=document.getElementById("loginform");
	 
	 // tmp diisi textfield username yg merupakan anak
	 // dari tag form loginform
	 var tmp ;
	 
	 // Check username textfield ada isinya ?
	 tmp = theform.username.value ; 
	 
	 //Check apakah tmp ada isinya ? 
	 if (tmp=='' || tmp.length==0) {
	  //menampilkan pesan error
	  alert('Silahkan isi username ') ;
	  //focus ke textfied username
	  theform.username.focus() ;
	  // mengembalikan nilai false sehing form submit 
	  //dicancel
	  return false ;
	 } 
	 
	 //Check Password textfield ada isinya ?
	 tmp = theform.password.value ; 
	 
	 //Check apakah tmp ada isinya ? 
	 if (tmp=='' || tmp.length==0) {
	  //menampilkan pesan error
	  alert('Silahkan isi password ') ;
	  //focus ke textfied password
	  theform.password.focus() ;
	  // mengembalikan nilai false sehingga form submit 
	  //dicancel
	  return false ;
	 }
	 
	//form lakukan submnit data ke file yang 
   //direferansikan attribut action 
	theform.submit(); 
	
	return true ; 
	 
	 
   }
 </script>
</head>

<body> 

  <div id="loginwrapper">
    <div id="loginheader">Login</div>
    <div id="logincontent">
    	<?php if (isset($_GET["loginerror"])) {?>
       <div id="loginerror" style="color:#990000;">
        Username & Password that you are input are error..
        </div>
		<?php }?>
        
       <form id="loginform" name="loginform" method="post" action="loginsubmit.php" onsubmit="return chkBeforeSubmit();">
     <table width="100%" cellpadding="3" cellspacing="2">
       <tr>
         <td><strong>Username</strong></td>
         <td>:</td>
         <td>
         <input type="text" name="username" id="username" size="20" maxlength="100" />         </td>
       </tr> 
       <tr>
         <td><strong>Password</strong></td>
         <td>:</td>
         <td>
         <input type="password" name="userpassword" id="userpassword" size="20" maxlength="100" />         </td>
       </tr>  
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>
         <input type="submit" name="loginbtn" id="loginbtn" value="Login" />         </td>
       </tr>   
     </table>
     </form>
    </div>
  </div>

</body>
</html>
