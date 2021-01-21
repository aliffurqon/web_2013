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
          <li><a href="admin.php?blogs">Blogs</a></li>
          <li><a href="admin.php?comments">Comments</a></li>
          <li><a href="admin.php?member">Member</a></li>
        </ul>
     </div><!--End Admin Menu -->
     <div id="admincontent"><!--Start Admin Content -->
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
     </div><!--Start Admin Content -->
     <div id="adminfooter"><!--Start Admin Footer -->
        Copyrights &copy; 2011 Baba Studio
     </div><!--Start Admin Footer -->
   </div>
</body>
</html>
