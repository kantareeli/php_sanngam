<?session_start();
if (!isset($adminID)){?>
	<script language = "javascript">
		window.location="../index.php";
	</script>
<?}
	
include("../../initial/connect.php");
?>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Manage Beauty Talk</title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #05588A;}
a:hover {color: #4F3EA4;}
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#F6FBFE" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->


</td>
  </tr>
  <tr> 
    <td height="18" bgcolor="#D5C598">&nbsp; </td>
  </tr>
  <tr> 
    <td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="1" bgcolor="#D5C598"><img src="/_admin/images/clear.gif" width="1" height="1"></td>
          <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50">&nbsp;</td>
                <td height="280" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td><!-- InstanceBeginEditable name="topic" -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="hp">Webboard Management</td>
                          </tr>
                        </table>
                        <!-- InstanceEndEditable --></td>
                    </tr>
                    <tr> 
                      <td><br> <!-- InstanceBeginEditable name="detial" -->
<FORM action="main.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
                        <table width="95%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>

                    <?	
				$str = "select * from wb_topic";
				$rs = mysql_query($str);
				if (mysql_num_rows($rs) > 0)		{?>
                    &nbsp; 
</td>
                          </tr>
                          <tr>
                            <td>
     <? 
 		$sWhere = ""; 
		$str = "select  *  from  wb_topic order by tpID desc";
		$rs = mysql_query($str);
?>
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                  <tr valign="middle"> 
                                    <td width="7%" align="center" bgcolor="#7AA0BA"> ID</td>
                                    <td width="40%" align="center" bgcolor="#7AA0BA">Vote Subject</td>
									<td width="10%" align="center" bgcolor="#7AA0BA">IP Post fsdgdfgf</td>
                                    <td width="10%"  align="center" bgcolor="#7AA0BA" >Enabled</td>
                                    <td width="10%"  align="center" bgcolor="#7AA0BA" >Edit</td>
                                    <td width="10%"  align="center" bgcolor="#7AA0BA" >Delete</td>
                                  </tr>
                                  <? 	
	$a = 1;
	while($row=mysql_fetch_array($rs)) 
	{ 
	$a= $a+1;
     if  (($a%2) == 0)
	 	$col = "#CCCCCC";
	else
		$col = "#FFFFFF";
?>



<!-- 

CREATE TABLE wb_topic (
  tpID int(20) NOT NULL auto_increment,
  tpTopic varchar(255) default NULL,
  tpText text,
  tpDate date default NULL,
  tpName varchar(200) default NULL,
  tpEmail varchar(200) default '0',
  tpFilepic varchar(200) default NULL,
  Enable tinyint(3) default '1',
  ipPost varchar(30) default NULL,
  counter int(5) default '0',

-->
                                  <tr bgcolor=<?echo $col?>> 
                                    <td align="center"><? echo $row[tpID]; ?></td>
                                    
									<td><? echo $row[tpTopic]; ?></td>
                                    <td><? echo $row[ipPost]; ?></td>
									<td align="center">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">
										<input type="checkbox" name="checkbox1"  <?if ($row[Enable] == '1'){ print "checked";?>	onclick='disableit(<?print $row[tpID]?>)' <?}else {?>onclick='enableit(<?print $row[tpID]?>)' <?}?>></FONT></td>
									

                                    
									<td  align="center"><a href="edit.php?ID=<? echo $row[tpID]?>" border="0" class="menulist"> 
                                      <IMG SRC="../images/icon_edit.gif"  BORDER="0" ALT="edit">
                                      </a></td> 
									  
									  <td align="center"><a onClick="goto_del('<? echo $row[tpID] ?>'); " border ="0"> 
                                      <IMG SRC="../images/icon_delete.gif"  BORDER="0" ALT="remove"></a></td>
                                  </tr>
                                  <?  }
	  mysql_free_result($rs); 	?>
                                </table></td>
                          </tr>
						  <tr valign="center" >
								<td colspan="7" bgcolor="#4FAEFF" align=center>
											<a href="edit.php?mode=add"
                  onMouseOut="document.add1.src='../images/add_but2.gif'; return true" 
                  onMouseOver="document.add1.src='../images/add_but1.gif'; return true"><img 
                  alt="เพิ่มข้อมูล" border=0 height=18 name=add1 
                  src="../images/add_but2.gif" width=72 style="cursor:hand"></a>
								</td>
						</tr>

                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right">
                              <? }
 		else { 
		  	echo "ไม่มีข้อมูล";
	   } ?>
                        
							</td>
                          </tr>
                        </table>
						</form>
                        <!-- InstanceEndEditable --> 
                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td align="center" valign="middle">
 </td>
  </tr>
</table>
</body>
<!--#include file="../../initial/disconnect.php" -->
<!-- InstanceEnd --></html>

<SCRIPT LANGUAGE="JavaScript">
function checkit(code){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_check.php?gaID='+code;
		frmmain.submit();
	}
function enableit(code){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_disable.php?gaID='+code+'&value='+1;
		frmmain.submit();
	}
function disableit(code){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_disable.php?gaID='+code+'&value='+0;
		frmmain.submit();
	}
function goto_del(code){
	if  (!confirm('คุณต้องการจะลบข้อมูลนี้ใช่หรือไม่')) {
			return false;
	}else{
		frmmain.action = 'tp_del.php?gaID='+code;
		frmmain.submit();
	}
}

</SCRIPT>
