<?session_start();
if (!isset($adminID)){?>
	<script language = "javascript">
		window.location="../index.php";
	</script>
<?}
	
include("../../initial/connect.php");
?>



<html>

<head>

<title></title>
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


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr> 
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                            <td class="hp">Edit Webboard</td>
                          </tr>
                        </table>
                        <!-- InstanceEndEditable --></td>
                    </tr>
                    <tr> 
                      <td><br> <!-- InstanceBeginEditable name="detial" -->
<?

if ($_REQUEST["doUpdate"] ) {

	 		if ($_REQUEST['submit'] == "Update") {
				        include("../../initial/connect.php");
						$strsql = "update wb_topic set tpTopic = '".$_REQUEST["txt_subject"]."', tpText ='".$_REQUEST["txt_ans1"]."'    where tpID = ".$_REQUEST['ID'];
						//die ($strsql);
						echo $strsql;
						
						mysql_query($strsql)  or die("Query failed sqlpicture    : ".mysql_error());
					?> <script language="JavaScript">window.location = "main.php";</script> <?	
 			} elseif ($_REQUEST['submit'] == "Add") {
						$strsql = "insert into  tbvote (vSubject,vAns1,vAns2,vAns3,vAns4  ) value ( '".$_REQUEST["txt_subject"]."', '".$_REQUEST["txt_ans1"]."', '".$_REQUEST["txt_ans2"]."', '".$_REQUEST["txt_ans3"]."', '".$_REQUEST["txt_ans4"]."' ) ";
						//die ($strsql);
						echo $strsql;
						mysql_query($strsql)  or die("Query failed sqlpicture    : ".mysql_error());
					?> <script language="JavaScript">window.location = "main.php";</script> <?	
			}
	 }else{ 

			if (isset($mode) and $mode="add"){
				$row = array();
			}else{

				$str = "select  *  from wb_topic where tpID = ".$_REQUEST['ID'];
				$rs = mysql_query($str);
				$row = mysql_fetch_array($rs) or die(C_CANNOTCONNECTDB);
			}
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
<FORM action="edit.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
                          <table width="551" border="0" align="center" cellpadding="1" cellspacing="2">
                            <tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right><font color="#FF0000">*</font>Subject</td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							  <input name="txt_subject" type="text" size="45" value="<? echo $row[tpTopic] ?>"></td>
                            </tr>
                            <tr> 
                              <td align="right" valign="middle" class="LabelB"><font color="#FF0000">*</font>Detail</td>
                              <td valign="middle"  class="LabelB"><div align="center">:</div></td>

                              <td align="left" valign="middle" class="LabelB">
							  <TEXTAREA NAME="txt_ans1" ROWS="5" COLS="30"><? echo $row[tpText] ?></TEXTAREA>
							  <br> <? echo  $row[tpName]  ?>
								<? if ( isset($row[tpFilepic] )   and   $row[tpFilepic]<> '' ){ ?>  
								         <a href="pic_disable.php?tppic=1&gaID=<?=$_REQUEST['ID']?>">ลบภาพประกอบ</a>
								<? } ?>
	
                              </td>
							  <input type="hidden" name="ID" value="<?=$_REQUEST['ID'] ?>">
                              <input type="hidden" name="new" value="1">
							  <input type="hidden" name="doUpdate" value="1">
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB">&nbsp;</td>
                              <td width="10" align="center" class="LabelB">&nbsp;</td>
                              <td>
								<?if (isset($mode) and $mode="add"){?>
								<input name="submit" type="submit" class="input" value="Add"> 
								<?}else{?>
								<input name="submit" type="submit" class="input" value="Update"> 
								<?}?>
                                &nbsp;&nbsp; &nbsp; 
								<input name="Reset2" type="reset" class="input" value="Reset"> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							</td>
                            </tr>
							<tr><td colspan=3>

							<!-- 
							
							CREATE TABLE wb_reply (
  rpID int(20) NOT NULL auto_increment,
  tpID int(20) unsigned default '0',
  rpText text,
  rpDate datetime default NULL,
  rpName varchar(200) default '0',
  rpEmail varchar(200) default NULL,
  rpFilepic varchar(200) default NULL,
  ipPost varchar(30) default NULL,
							
							-->
    <? 
 		$sWhere = ""; 
		$str = "select  *  from  wb_reply   where     tpID = ".$_REQUEST['ID'] . "   order by rpID asc";
		$rs = mysql_query($str);
    ?>
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                  <tr valign="middle"> 
                                    <td width="7%" align="center" bgcolor="#7AA0BA"> ลำดับ</td>
                                    <td width="50%" align="center" bgcolor="#7AA0BA"> Subject</td>
									 <td width="10%"  align="center" bgcolor="#7AA0BA" >Name</td>
                                    <td width="10%"  align="center" bgcolor="#7AA0BA" >Delete Pic </td>
                                    <td width="10%"  align="center" bgcolor="#7AA0BA" >Delete</td>
                                  </tr>
                                  <? 	
	$a = 1;
	while($row2=mysql_fetch_array($rs)) 
	{ 
	$a= $a+1;
     if  (($a%2) == 0)
	 	$col = "#CCCCCC";
	else
		$col = "#FFFFFF";
?>
                                  <tr bgcolor=<?echo $col?>> 
                                    <td align="center"><? echo $row2[rpID]; ?></td>
                                    
									<td><? echo $row2[rpText]; ?></td>
                                    

									

                                    <td><? echo $row2[rpName]; ?>  </td>
									<td  align="center">
								<? if ( isset($row2[rpFilepic] )   and   $row2[rpFilepic]<> '' ){ ?>  
								         <a href="pic_disable.php?tppic=0&gaID=<? echo $row2[rpID]?>">   <IMG SRC="../images/icon_delete.gif"  BORDER="0" ALT="edit"></a>
								<? }  else{?>
								     &nbsp;
								 <? } ?>
                                   
                                    </td> 
									  
									  <td align="center"><a onclick="goto_del('<? echo $row2[rpID] ?>'); " border ="0"> 
                                      <IMG SRC="../images/icon_delete.gif"  BORDER="0" ALT="remove"></a></td>
                                  </tr>
                                  <?  }
	  mysql_free_result($rs); 	?>
                                </table>

							</td>
                            </tr>

                          </table>
                          <p>&nbsp;</p>
                          </form>
                        <? } ?>
                        <!-- InstanceEndEditable --> 
                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>

  </tr>
</table>
</body>
</html>

<SCRIPT LANGUAGE="JavaScript">
function checkit(code){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_check.php?gaID='+code;
		frmmain.submit();
	}
function enableit(code, code2){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_disable.php?gaID='+code+'&value='+1;
		frmmain.submit();
	}
function disableit(code, code2){
		frmmain.checkbox1.checked=true;
		frmmain.action = 'vote_disable.php?gaID='+code+'&value='+0;
		frmmain.submit();
	}
function goto_del(code){
	if  (!confirm('คุณต้องการจะลบข้อมูลนี้ใช่หรือไม่')) {
			return false;
	}else{
		frmmain.action = 'rp_del.php?gaID='+code;
        alert (frmmain.action);
         window.location =  'rp_del.php?gaID='+code;
		frmmain.submit();
	}
}

</SCRIPT>
