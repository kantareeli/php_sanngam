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
                            <td class="hp">Edit Vote</td>
                          </tr>
                        </table>
                        <!-- InstanceEndEditable --></td>
                    </tr>
                    <tr> 
                      <td><br> <!-- InstanceBeginEditable name="detial" -->
<?

if ($_REQUEST["doUpdate"] ) {

	 		if ($_REQUEST['submit'] == "Update") {
						$strsql = "update tbvote set vSubject = '".$_REQUEST["txt_subject"]."', vAns1 ='".$_REQUEST["txt_ans1"]."',  vAns2 = '".$_REQUEST["txt_ans2"]."',vAns3 = '".$_REQUEST["txt_ans3"]."', vAns4 = '".$_REQUEST["txt_ans4"]."'  where ID = ".$_REQUEST['ID'];
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
				$str = "select  *  from tbvote where ID = ".$_REQUEST['ID'];
				$rs = mysql_query($str);
				$row = mysql_fetch_array($rs) or die(C_CANNOTCONNECTDB);
			}
?>
                        <script language="JavaScript">
				function checkpro()
				{
						if (pro.txt_subject.value == "")
							    {
								alert("ADD YOUR SUBJECT PLEASE !!")
								pro.txt_subject.focus();
								return false;
								}
						if (pro.txt_ans1.value == "")
							    {
								alert("ADD YOUR ANSWER1 PLEASE !!")
								pro.txt_ans1.focus();
								return false;
								}
						if (pro.txt_ans2.value == "")
							    {
								alert("ADD YOUR ANSWER2 PLEASE !!")
								pro.txt_ans2.focus();
								return false;
								}
						if (pro.txt_ans3.value == "")
							    {
								alert("ADD YOUR ANSWER3 PLEASE !!")
								pro.txt_ans3.focus();
								return false;
								}
						if (pro.txt_ans4.value == "")
							    {
								alert("ADD YOUR ANSWER4 PLEASE !!")
								pro.txt_ans4.focus();
								return false;
								}
				} 
			</script>
					<form name="pro"  enctype="multipart/form-data"  method="post"   onSubmit="return checkpro()">
                          <table width="551" border="0" align="center" cellpadding="1" cellspacing="2">
                            <tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right><font color="#FF0000">*</font>Subject</td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB"><input name="txt_subject" type="text" size="45" value="<? echo $row[vSubject] ?>"></td>
                            </tr>
                            <tr> 
                              <td align="right" valign="middle" class="LabelB"><font color="#FF0000">*</font>Answer1</td>
                              <td valign="middle"  class="LabelB"><div align="center">:</div></td>
                              <td align="left" valign="middle" class="LabelB"><input name="txt_ans1" type="text" size="30" value="<? echo $row[vAns1] ?>">&nbsp;<? echo $row[vAns1_p] ?>&nbsp;points
                              </td>
                              <input type="hidden" name="new" value="1">
							  <input type="hidden" name="doUpdate" value="1">
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer2</td>
                              <td align="center" class="LabelB">:</td>
                              <td class="LabelB"  valign="middle"><input name="txt_ans2" type="text" size="30" value="<? echo $row[vAns2] ?>">&nbsp;<? echo $row[vAns2_p] ?>&nbsp;points</td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer3</td>
                              <td align="center" class="LabelB">:</td>
                              <td class="LabelB"  valign="middle"><input name="txt_ans3" type="text" size="30" value="<? echo $row[vAns3] ?>">&nbsp;<? echo $row[vAns3_p] ?>&nbsp;points</td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer4</td>
                              <td align="center" class="LabelB">:</td>
                              <td class="LabelB"  valign="middle"><input name="txt_ans4" type="text" size="30" value="<? echo $row[vAns4] ?>">&nbsp;<? echo $row[vAns4_p] ?>&nbsp;points</td>
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
