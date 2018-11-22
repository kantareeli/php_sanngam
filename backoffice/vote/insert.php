<? session_start(); ?>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<? require_once('../authen.php'); ?>
<? require_once("../../libs/displayfnc.php"); ?>	
<? require_once("../../initial/constant.php"); ?>   
<? require_once("../../initial/connect.php"); ?>
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title><? echo C_COMPANYHEADER; ?> Backend System</title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<script language="JavaScript"  src="/libs/validatefnc.js"></script>
<link href=".././css/style.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="77" align="right">
 <?php require_once('../logo.php'); ?>    </td>
  </tr>
  <tr> 
    <td height="62" bgcolor="#7AA0BA"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="12"><img src="/_admin/images/clear.gif" width="12" height="1"></td>
          <td><img src=".././images/back.gif" width="202" height="29"></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td height="18" bgcolor="#D5C598">&nbsp; </td>
  </tr>
  <tr> 
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="180" align="center" valign="top"><?php require_once('../menu.php'); ?></td>
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
                            <td class="hp">Insert Vote</td>
                          </tr>
                        </table>
                        <!-- InstanceEndEditable --></td>
                    </tr>
                    <tr> 
                      <td><br> <!-- InstanceBeginEditable name="detial" -->
<?
if ($_REQUEST["doUpdate"] ) {
	 require_once("../../libs/displayfnc.php"); 
	 		if ($_REQUEST['submit'] == "Insert") {
						if (GetSQLValueString($_REQUEST["txt_enable"], "boolean") == 1){
							$sql = "update tbvote set vEnable = 0";
							mysql_query($sql);
						}
                        $strsql = sprintf("insert into tbvote (vSubject, vAns1, vAns2,vAns3, vAns4, vEnable,vReEnable) values (%s, %s,%s,%s,%s,%b,%b)",
					  	GetSQLValueString($_REQUEST["txt_subject"], "text"), 
					  	GetSQLValueString($_REQUEST["txt_ans1"], "text"), 
					  	GetSQLValueString($_REQUEST["txt_ans2"], "text"), 
					  	GetSQLValueString($_REQUEST["txt_ans3"], "text"), 
					  	GetSQLValueString($_REQUEST["txt_ans4"], "text"), 
						GetSQLValueString($_REQUEST["txt_enable"], "boolean"),    
						GetSQLValueString($_REQUEST["txt_reenable"], "boolean"));    
						//die ($strsql);
						mysql_query($strsql)  or die(C_CANNOTCONNECTDB); 
						?><script language="JavaScript">window.location = "main.php";</script>
                        <? }
		} else { 
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
			<form name="pro" method="post"  enctype="multipart/form-data"   onSubmit="return  checkpro()">
                          <table width="551" border="0" align="center" cellpadding="1" cellspacing="2">
                            <tr> 
                              <td width="126" height="35" align="right"" valign="middle" class="LabelB"right><font color="#FF0000">*</font>Subject</td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB"><input name="txt_subject" type="text" size="45"></td>
                            </tr>
                            <tr> 
                              <td align="right" valign="middle" class="LabelB"><font color="#FF0000">*</font>Answer1</td>
                              <td valign="middle" class="LabelB"><div align="center">:</div></td>
                              <td align="left" valign="top" class="LabelB"><input name="txt_ans1" type="text" size="30"> 
                              </td>
                              <input type="hidden" name="new" value="1">
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer2</td>
                              <td align="center" class="LabelB">:</td>
                              <td><input name="txt_ans2" type="text" size="30"></td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer3</td>
                              <td align="center" class="LabelB">:</td>
                              <td><input name="txt_ans3" type="text" size="30"></td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB"><font color="#FF0000">*</font>Answer4</td>
                              <td align="center" class="LabelB">:</td>
                              <td><input name="txt_ans4" type="text" size="30"></td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB">Enable</td>
                              <td align="center" class="LabelB">:</td>
                              <td><input name="txt_enable" type="checkbox"> <input type="hidden" name="doUpdate" value="1"> 
                              </td>
                            </tr>
                            <tr>
                              <td align="right" class="LabelB">ReEnable</td>
                              <td align="center" class="LabelB">:</td>
                              <td><input name="txt_reenable" type="checkbox"></td>
                            </tr>
                            <tr> 
                              <td align="right" class="LabelB">&nbsp;</td>
                              <td width="10" align="center" class="LabelB">&nbsp;</td>
                              <td><input name="submit" type="submit" class="input" value="Insert"> 
                                &nbsp;&nbsp; &nbsp; <input name="Reset" type="reset" class="input" value="Reset"> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                            </tr>
                          </table>
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
  <tr> 
    <td align="center" valign="middle"><?php require_once('../foot.php'); ?>
 </td>
  </tr>
</table>
</body>
<!--#include file="../../initial/disconnect.php" -->
<!-- InstanceEnd --></html>
