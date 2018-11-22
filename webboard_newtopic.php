<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Beauty Talk New Topic </title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link href="sanngam_main.css" rel="stylesheet" type="text/css">
</head>


              <? if ($_REQUEST['doInsert'])  {
include("initial/connect.php");
include("initial/displayfnc.php");

									
							$strsql = sprintf("insert into wb_topic (tpTopic, tpName, tpDate, tpText, tpEmail, ipPost) values (%s, %s, %s, %s, %s, '$_SERVER[REMOTE_ADDR]')",
										  GetSQLValueString($_REQUEST["txt_topic"], "text"),  
										  GetSQLValueString($_REQUEST["txt_name"], "text"),  
										  GetSQLValueString(date("Y-m-d H:m:s"), "date"), 
										  GetSQLValueString($_REQUEST["txt_detail"], "text"), 
										  GetSQLValueString($_REQUEST["txt_email"], "text")
										  );   
							//echo $strsql;
							//die ($strsql);
							mysql_query($strsql) or die("Query failed sql    : ".mysql_error()); 
														if(isset($txt_filepic)){
								
								$thissize = $txt_filepic_size/1024;
								if($thissize>100){?>
									<SCRIPT LANGUAGE="JavaScript">
										alert("ขนาดภาพเกิน 100 K  ไม่สามารถบันทึกได้")
									</SCRIPT>
									<? echo "<script language=\"JavaScript\">window.location = \"webboard.php\";</script>"; 
								}else{
								$uploaddir = "images/webboardfile/";
										//To check File type
    function getFileExtension($str) {

        $i = strrpos($str,".");
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);

        return $ext;

    }
		if(isset($txt_filepic) AND $txt_filepic<>''){
			$pext = getFileExtension($txt_filepic_name);
			$pext = strtolower($pext);
			if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  
				?>
				<script language = "javascript">
				alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
				window.history.back();
				</script> 
				<?
			}else{


				//Upload file 
					//To creat filename 
						$sqlLAST_ID = "select  max(tpID) LAST_ID from wb_topic";
						$rs = mysql_query($sqlLAST_ID) or die("Query failed sqlLAST_ID    : ".mysql_error());
						while($row=mysql_fetch_array($rs)) { 
								$LAST_ID= $row[LAST_ID];
						}
						$filesavename=$LAST_ID.'wbTopic.'.$pext;
							 
					//End creat filename 
					$newfile2 = $uploaddir.$filesavename;
					echo  $newfile2;
					
					if (copy($txt_filepic,"$newfile2")) {

					//Update Database
					$daynow=date("Y-m-d");
					$sql_insert="update  wb_topic set  tpFilepic = '$filesavename' where tpID='$LAST_ID' ";
					echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){
									echo "<script language=\"JavaScript\">window.location = \"webboard.php\";</script>"; 
							}else{
									echo "Unsuccess : ".mysql_error();
							}
					//END Update Database
	
				}else {		
					print ("failed to copy $w_pict...<br>\n");
				}
			
		}
}}
								//End Upload File Picture
							}
                            echo "<script language=\"JavaScript\">window.location = \"webboard.php\";</script>"; 
				 	   }
					   else 
					   { ?>
<body  background="images/BG_flower.gif">
<form name="newtopic" method="post" action="<? echo $_SERVER['PHP_SELF'] ?>" onSubmit="return checkbae()" enctype="multipart/form-data">		

<table width="100%" border="0" cellpadding="0" cellspacing="5">
  <tr>
    <td align="center" valign="top">
	<!-- intable 760 px -->
	<table width="760" border="0" cellpadding="0" cellspacing="5" bgcolor=white>
		<tr>
		<td align="center" valign="top">
	
	<!-- webboard  New-->
	<IMG SRC="images/head_talk.jpg" BORDER="0" ALT="" ><BR>
	<div align=left ><A HREF="webboard.php"  class="newlinkPink"  >หน้าหลักห้องสนทนา</A> &#187 <A HREF="webboard_newtopic.php" class="newlinkPink" ><B>ตั้งกระทู้ใหม่</B></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	              <TABLE  cellSpacing=1 cellPadding=2 width="522" 
            align=center border=0>
              <TBODY>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1 class=m10w>ชื่อ</TD>
                <TD class=m10  bgColor=#c3e3f1 align=left ><input name="txt_name" type="text" size="30"></TD>
               </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>E - mail</TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><input name="txt_email" type="text" size="55"></TD>
               </TR>
               <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>หัวข้อ</TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><input name="txt_topic" type="text" size="55"></TD>
               </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>รายละเอียด
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><textarea name="txt_detail" cols="55" rows="5"></textarea></TD>
             </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>Emotion
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left >
<IMG height=22 src="images/webboard/003.gif" width=22 border=0 style="cursor:hand"  onClick="emoticon('<003>')" alt="<003>">
<IMG height=22 src="images/webboard/004.gif" width=22  border=0 style="cursor:hand"  onClick="emoticon('<004>')" alt="<004>">
<IMG height=22 src="images/webboard/005.gif" width=22  border=0 style="cursor:hand"  onClick="emoticon('<005>')" alt="<005>">
<IMG height=22 src="images/webboard/006.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<006>')" alt="<006>">
<IMG height=22 src="images/webboard/007.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<007>')" alt="<007>"> 
<IMG height=22 src="images/webboard/008.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<008>')" alt="<008>">
<IMG height=22 src="images/webboard/009.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<009>')" alt="<009>">
<IMG height=22 src="images/webboard/010.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<010>')" alt="<010>">
<IMG height=22 src="images/webboard/011.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<011>')" alt="<011>">
<IMG height=22 src="images/webboard/012.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<012>')" alt="<012>">
<IMG height=22 src="images/webboard/013.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<013>')" alt="<013>">
<IMG height=22 src="images/webboard/014.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<014>')" alt="<014>">
<IMG height=22 src="images/webboard/015.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<015>')" alt="<015>">
<IMG height=22 src="images/webboard/016.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<016>')" alt="<016>">
 <IMG height=22 src="images/webboard/018.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<018>')" alt="<018>">
 <IMG height=22 src="images/webboard/019.gif" width=22  border=0 style="cursor:hand" onClick="emoticon('<019>')" alt="<019>">
 <IMG height=22 src="images/webboard/020.gif" width=22 border=0 style="cursor:hand" onClick="emoticon('<020>')" alt="<020>">
<BR>
<IMG height=19 src="images/webboard/1.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<1>')" alt="<1>">
<IMG height=19 src="images/webboard/2.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<2>')" alt="<2>">
<IMG height=19 src="images/webboard/3.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<3>')" alt="<3>">
<IMG height=19 src="images/webboard/4.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<4>')" alt="<4>">
<IMG height=19 src="images/webboard/5.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<5>')" alt="<5>">
<IMG height=19 src="images/webboard/6.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<6>')" alt="<6>">
<IMG height=19 src="images/webboard/7.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<7>')" alt="<7>">
<IMG height=19 src="images/webboard/8.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<8>')" alt="<8>">
<IMG height=19 src="images/webboard/9.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<9>')" alt="<9>">
<IMG height=19 src="images/webboard/10.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<10>')" alt="<10>">
<IMG height=19 src="images/webboard/11.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<11>')" alt="<11>">
<IMG height=19 src="images/webboard/12.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<12>')" alt="<12>">
<IMG height=19 src="images/webboard/13.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<13>')" alt="<13>">
<IMG height=19 src="images/webboard/14.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<14>')" alt="<14>">
<IMG height=19 src="images/webboard/15.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<15>')" alt="<15>">
<IMG height=19 src="images/webboard/16.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<16>')" alt="<16>">
<IMG height=19 src="images/webboard/17.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<17>')" alt="<17>">
<IMG height=19 src="images/webboard/18.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<18>')" alt="<18>">
<IMG height=19 src="images/webboard/20.gif" width=19  border=0 style="cursor:hand" onClick="emoticon('<20>')" alt="<20>">
				</TD>
             </TR>
			 <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>ภาพประกอบ
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><INPUT TYPE="file" NAME="txt_filepic">ขนาดภาพไม่เกิน 100 K</TD>
             </TR>
			 </TBODY></TABLE>
			 <input type="hidden" name="doInsert" value="1">
			 <INPUT TYPE="submit" value="Post กระทู้">&nbsp;&nbsp;<INPUT TYPE="reset" value="ยกเลิก">
			 
<? } ?>
	<!-- End   webboard New-->
	<BR>
<BR>

	

		  </td>
        </tr>
      </table></td>
  </tr>
    <tr><td>
  
  <? include("menu_bottom.php"); ?>
  </td>
  </tr>
</table>
	<!-- intable 760 px -->
</td>
  </tr>
</table>
</form>
</body>
</html>
<!-- Star t-TIme-->





<!-- End TIme-->


<script language="JavaScript1.2">
var testresults
function checkemail(){
if(newtopic.txt_name.value == "")
{
	alert ("กรุณากรอกชื่อของท่าน")
	newtopic.txt_name.focus()
	return false
}

if(newtopic.txt_topic.value == "")
{
	alert ("กรุณากรอกหัวข้อของท่าน")
	newtopic.txt_topic.focus()
	return false
}

if(newtopic.txt_detail.value == "")
{
	alert ("กรุณากรอกรายละเอียดของท่าน")
	newtopic.txt_detail.focus()
	return false
}
}
</script>
<script>
function checkbae(){
	if (document.layers||document.getElementById||document.all)
		return checkemail()
	else
		return true
}

function emoticon(text) {
	text = ' ' + text + ' ';
		newtopic.txt_detail.value  += text;
		newtopic.txt_detail.focus();
}

</script>