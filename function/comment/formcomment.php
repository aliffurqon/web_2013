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