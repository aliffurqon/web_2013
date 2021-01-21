<!DOCTYPE HTML>
<html>
<head>
<title>CMS Web Corporate</title>
<link rel="stylesheet" type="text/css" href="../style/adminstyle.css" />
</head>

<body>
   <div id="adminwrapper">
     <div id="adminheader"><!--Start Admin Header -->
          <h1>CMS Corporateweb</h1>
          <h2>Content Management System</h2>
     </div><!--End Admin Header -->
     <div id="adminmenu"><!--Start Admin Menu -->
        <ul>
          <li><a href="admin.php?news">News</a></li>
          <li><a href="admin.php?imagerandom">Image Random</a></li>
        </ul>
     </div><!--End Admin Menu -->
     <div id="admincontent"><!--Start Admin Content -->
        <h2>News</h2>
   <br />
   
   <form id="frmnewsadd" name="frmnewsadd" action="newsaddsubmit.php" method="post" enctype="multipart/form-data">
      <table width="500">
        <tr>
          <td>Title</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="newstitle" id="newstitle" value="" />
          </td>
        </tr> 
        <tr>
          <td>Date</td>
          <td>:</td>
          <td>
           <input type="text" size="40" name="newsdate" id="newsdate" value="" />
           
           &nbsp;&nbsp;
           <input type="text" size="5" name="newshour" id="newshour" />
           &nbsp;:&nbsp;
           <input type="text" size="5" name="newsminutes" id="newsminutes" />
          </td>
        </tr>  
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
           <input type="file" size="40" name="newsimage" id="newsimage" value="" />
          </td>
        </tr> 
        <tr>
          <td>Sinopsis</td>
          <td>:</td>
          <td>
           <textarea id="newssinopsis" name="newssinopsis" cols="40" rows="8"></textarea>
          </td>
        </tr>     
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td>
           <textarea id="newsdetail" name="newsdetail" cols="40" rows="8"></textarea>
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
       
     </div><!--Start Admin Content -->
     <div id="adminfooter"><!--Start Admin Footer -->
        Copyrights &copy; 2011 Baba Studio
     </div><!--Start Admin Footer -->
   </div>
</body>
</html>
