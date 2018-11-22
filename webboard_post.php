<? session_start(); ?>
 <?
include("initial/connect.php");
include("initial/displayfnc.php");
	$sqlcounter = "update    wb_topic  set  counter = counter +1   where  tpID='$tpID'  ";
	$rscounter = mysql_query($sqlcounter) or die("Query failed sqlpicture    : ".mysql_error());

	$sqlpicture = "select * from wb_topic  where  tpID='$tpID' and  Enable='1' ";
	//echo  $sqlpicture;
	$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
	while($row=mysql_fetch_array($rs)) { 

		$tpTopic= $row[tpTopic];
		$tpText= $row[tpText];
		$update_date= $row[tpDate];
		$tpName= $row[tpName];
		$tpEmail= $row[tpEmail];
		$tpFilepic= $row[tpFilepic];
$tpText = ereg_replace (chr(13),"<br>",$tpText );
$tpText = ereg_replace ("<003>", "<IMG height=22 src=images/webboard/003.gif width=22 border=0 >", $tpText);
$tpText = ereg_replace ("<004>", "<IMG height=22 src=images/webboard/004.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<005>", "<IMG height=22 src=images/webboard/005.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<006>", "<IMG height=22 src=images/webboard/006.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<007>", "<IMG height=22 src=images/webboard/007.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<008>", "<IMG height=22 src=images/webboard/008.gif width=22 border=0 >", $tpText);
$tpText = ereg_replace ("<009>", "<IMG height=22 src=images/webboard/009.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<010>", "<IMG height=22 src=images/webboard/010.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<011>", "<IMG height=22 src=images/webboard/011.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<012>", "<IMG height=22 src=images/webboard/012.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<013>", "<IMG height=22 src=images/webboard/013.gif width=22 border=0 >", $tpText); 
$tpText = ereg_replace ("<014>", "<IMG height=22 src=images/webboard/014.gif width=22 border=0 >", $tpText);
$tpText = ereg_replace ("<015>", "<IMG height=22 src=images/webboard/015.gif width=22 border=0 >", $tpText);
$tpText = ereg_replace ("<016>", "<IMG height=22 src=images/webboard/016.gif width=22 border=0 >", $tpText);
 $tpText = ereg_replace ("<018>", "<IMG height=22 src=images/webboard/018.gif width=22 border=0 >", $tpText);
 $tpText = ereg_replace ("<019>", "<IMG height=22 src=images/webboard/019.gif width=22 border=0 >", $tpText);
 $tpText = ereg_replace ("<020>", "<IMG height=22 src=images/webboard/020.gif width=22 border=0 >", $tpText);

$tpText = ereg_replace ("<1>", "<IMG height=19 src=images/webboard/1.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<2>", "<IMG height=19 src=images/webboard/2.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<3>", "<IMG height=19 src=images/webboard/3.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<4>", "<IMG height=19 src=images/webboard/4.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<5>", "<IMG height=19 src=images/webboard/5.gif width=19   border=0 >", $tpText); 
$tpText = ereg_replace ("<6>", "<IMG height=19 src=images/webboard/6.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<7>", "<IMG height=19 src=images/webboard/7.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<8>", "<IMG height=19 src=images/webboard/8.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<9>", "<IMG height=19 src=images/webboard/9.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<10>", "<IMG height=19 src=images/webboard/10.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<11>", "<IMG height=19 src=images/webboard/11.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<12>", "<IMG height=19 src=images/webboard/12.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<13>", "<IMG height=19 src=images/webboard/13.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<14>", "<IMG height=19 src=images/webboard/14.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<15>", "<IMG height=19 src=images/webboard/15.gif width=19   border=0 >", $tpText); 
$tpText = ereg_replace ("<16>", "<IMG height=19 src=images/webboard/16.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<17>", "<IMG height=19 src=images/webboard/17.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<18>", "<IMG height=19 src=images/webboard/18.gif width=19   border=0 >", $tpText);
$tpText = ereg_replace ("<20>", "<IMG height=19 src=images/webboard/20.gif width=19   border=0 >", $tpText);


		//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$utime = substr($update_date,11,8);
		$update_date= $uday." ".$month[(int)($umonth)]." ".$uyear."    ".$utime;
?>           

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Beauty Talk : <?=$tpTopic?></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<link href="css_main.css" rel="stylesheet" type="text/css">
</head>


<body  background="images/BG_flower.gif"   >
<table width="100%" border="0" cellpadding="0" cellspacing="5">
  <tr>
    <td align="center" valign="top">
	<!-- intable 760 px -->
	<table width="760" border="0" cellpadding="5" cellspacing="0" bgcolor=white >
		<tr>
		<td align="center" valign="top">
	
	<!-- webboard  New-->
	<div align=right class=m12 ><IMG SRC="images/head_talk.jpg"  BORDER="0" ALT="" ></div><BR>
		<div align=left ><A HREF="webboard.php"  class="newlinkPink"  >หน้าหลักห้องสนทนา</A> &#187 <A HREF="#" class="newlinkPink" ><B><?=$tpTopic?></B></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		
	<div align=center class=m12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="webboard_newtopic.php"  class="newlinkPink" ><B>ตั้งกระทู้ใหม่</B></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- ค้นหา : <INPUT TYPE="text" NAME="searchtext"> --></div>
	              <TABLE  cellSpacing=0 cellPadding=5 width="522"  bordercolor="9bd1e7"            align=center border=1>
				   
			  <TR align=middle>
                <TD class=m10 align=left bgColor=#9bd1e7 class=m10w>&nbsp;หัวข้อกระทู้ : <B><?=$tpTopic?></B><BR>
				<?if($tpFilepic<>""){ ?><IMG   src="images/webboardfile/<?=$tpFilepic?>"  ><BR><?}?>
				<?=$tpText?><BR>
				จาก <A HREF="mailto:<?=$tpEmail?>"><?=$tpName?></A> (<?=$update_date?>)
                
				</TD></TR>
<?}?>
			  <TR align=middle>
                <TD class=m10 align=center bgColor=#F6FBFE class=m10w>
				<!-- reply -->
   
				<? if (($_REQUEST['doInsert'])  and  (ereg_replace(" ","",$txt_name) <> "แอบแมน"))  {
							include("initial/connect.php");

							$strsql = sprintf("insert into wb_reply (tpID, rpName, rpDate, rpText, rpEmail) values (".$tpID.",%s, %s, %s, %s)",										 
										  GetSQLValueString($_REQUEST["txt_name"], "text"),  
										  GetSQLValueString(date("Y-m-d H:m:s"), "date"), 
										  GetSQLValueString($_REQUEST["txt_detail"], "text"), 
										  GetSQLValueString($_REQUEST["txt_email"], "text")
										  );   
							//echo $strsql;
							//die ($strsql);
							mysql_query($strsql) or die("Query failed sqlpicture    : ".mysql_error());
							if(isset($txt_filepic)){
								
								$thissize = $txt_filepic_size/1024;
								if($thissize>200){?>
									<SCRIPT LANGUAGE="JavaScript">
										alert("ขนาดภาพเกิน 100 K  ไม่สามารถบันทึกได้")
									</SCRIPT>
									<? echo "<script language=\"JavaScript\">window.location = \"webboard_post.php?tpID=".$tpID."\";</script>"; 
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
						$sqlLAST_ID = "select  max(rpID) LAST_ID from wb_reply";
						$rs = mysql_query($sqlLAST_ID) or die("Query failed sqlLAST_ID    : ".mysql_error());
						while($row=mysql_fetch_array($rs)) { 
								$LAST_ID= $row[LAST_ID];
						}
						$filesavename=$tpID.'wb'.$LAST_ID.'.'.$pext;
							 
					//End creat filename 
					$newfile2 = $uploaddir.$filesavename;
					echo  $newfile2;
					
					if (copy($txt_filepic,"$newfile2")) {

					//Update Database
					$daynow=date("Y-m-d");
					$sql_insert="update   wb_reply set  rpFilepic = '$filesavename' where rpID='$LAST_ID' ";
					//echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){
									echo "<script language=\"JavaScript\">window.location = \"webboard_post.php?tpID=".$tpID."\";</script>"; 
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

                            echo "<script language=\"JavaScript\">window.location = \"webboard_post.php?tpID=".$tpID."\";</script>"; 
				 	   }
					   else 
					   { ?>
<form name="newtopic" method="post" action="<? echo $_SERVER['PHP_SELF'] ?>" onSubmit="return checkbae()" enctype="multipart/form-data">				
<?
include("initial/connect.php");

	$sql = "select  *  from wb_reply  where  tpID = '$tpID' ORDER BY  rpID ASC";
	$stmt = mysql_query($sql) or die("Query failed sqlpicture    : ".mysql_error());
	$inicount = 0;
	while ($row = mysql_fetch_array($stmt)) {

		$rpID= $row[rpID];
		$rpText= $row[rpText];

$rpText = ereg_replace (chr(13),"<br>",$rpText );
$rpText = ereg_replace ("<003>", "<IMG height=22 src=images/webboard/003.gif width=22 border=0 >", $rpText);
$rpText = ereg_replace ("<004>", "<IMG height=22 src=images/webboard/004.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<005>", "<IMG height=22 src=images/webboard/005.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<006>", "<IMG height=22 src=images/webboard/006.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<007>", "<IMG height=22 src=images/webboard/007.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<008>", "<IMG height=22 src=images/webboard/008.gif width=22 border=0 >", $rpText);
$rpText = ereg_replace ("<009>", "<IMG height=22 src=images/webboard/009.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<010>", "<IMG height=22 src=images/webboard/010.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<011>", "<IMG height=22 src=images/webboard/011.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<012>", "<IMG height=22 src=images/webboard/012.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<013>", "<IMG height=22 src=images/webboard/013.gif width=22 border=0 >", $rpText); 
$rpText = ereg_replace ("<014>", "<IMG height=22 src=images/webboard/014.gif width=22 border=0 >", $rpText);
$rpText = ereg_replace ("<015>", "<IMG height=22 src=images/webboard/015.gif width=22 border=0 >", $rpText);
$rpText = ereg_replace ("<016>", "<IMG height=22 src=images/webboard/016.gif width=22 border=0 >", $rpText);
 $rpText = ereg_replace ("<018>", "<IMG height=22 src=images/webboard/018.gif width=22 border=0 >", $rpText);
 $rpText = ereg_replace ("<019>", "<IMG height=22 src=images/webboard/019.gif width=22 border=0 >", $rpText);
 $rpText = ereg_replace ("<020>", "<IMG height=22 src=images/webboard/020.gif width=22 border=0 >", $rpText);

$rpText = ereg_replace ("<1>", "<IMG height=19 src=images/webboard/1.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<2>", "<IMG height=19 src=images/webboard/2.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<3>", "<IMG height=19 src=images/webboard/3.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<4>", "<IMG height=19 src=images/webboard/4.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<5>", "<IMG height=19 src=images/webboard/5.gif width=19   border=0 >", $rpText); 
$rpText = ereg_replace ("<6>", "<IMG height=19 src=images/webboard/6.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<7>", "<IMG height=19 src=images/webboard/7.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<8>", "<IMG height=19 src=images/webboard/8.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<9>", "<IMG height=19 src=images/webboard/9.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<10>", "<IMG height=19 src=images/webboard/10.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<11>", "<IMG height=19 src=images/webboard/11.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<12>", "<IMG height=19 src=images/webboard/12.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<13>", "<IMG height=19 src=images/webboard/13.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<14>", "<IMG height=19 src=images/webboard/14.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<15>", "<IMG height=19 src=images/webboard/15.gif width=19   border=0 >", $rpText); 
$rpText = ereg_replace ("<16>", "<IMG height=19 src=images/webboard/16.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<17>", "<IMG height=19 src=images/webboard/17.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<18>", "<IMG height=19 src=images/webboard/18.gif width=19   border=0 >", $rpText);
$rpText = ereg_replace ("<20>", "<IMG height=19 src=images/webboard/20.gif width=19   border=0 >", $rpText);


//$rpText = ereg_replace (chr(13),"<br>",$rpText );

		$rpEmail= $row[rpEmail];
		$rpName= $row[rpName];
		$update_date= $row[rpDate];
		$rpFilepic= $row[rpFilepic];

//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$utime = substr($update_date,11,8);
		$update_date= $uday." ".$month[(int)($umonth)]." ".$uyear."    ".$utime;


		//$update_date= $uday." ".$month[(int)($umonth)]." ".$uyear;

		


?>
<?if ($inicount%2 <> 1){?>
<!--Table None -->
<TABLE cellSpacing=7 cellPadding=0 width="100%" border=0>
	  <TBODY>

	  <!-- Begin Each Album  Block -->
       
        <TR>
          <TD vAlign=top align=left class="m10"  >
				<B>ความคิดเห็นที่ <?=$inicount+1?></B><BR>
				<?if($rpFilepic<>""){ ?> <IMG   src="images/webboardfile/<?=$rpFilepic?>"  ><BR><?}?>
				<?=$rpText?><BR>
				จาก&nbsp;<A HREF="mailto:<?=$rpEmail?>"><?=$rpName?></A>&nbsp;( <?=$update_date?> )
			</TD>
		</TR>
			

		 <!-- End Each Album  Block -->

</TBODY></TABLE>
<!--End Table None -->	
<?}else{?>
<!--Table Cerve -->
                  <TABLE  width="98%"  border="0" align="center" cellPadding="0" cellSpacing="0"   bgColor="#fce1f8" >
                    <TR> 
                      <TD  valign="top"  align="left" width=5 height="5"><IMG  src="images/webboard/a1.gif"   hspace="0" vspace="0"></TD>
                      <TD  align=middle ></TD>
                      <TD  valign="top"  align="right"  width=5 height="5"><IMG src="images/webboard/a2.gif"  hspace="0" vspace="0"></TD>
                    </TR>
                    <TR> 
                      <TD>&nbsp;</TD>
                      <TD class=m10><TABLE cellSpacing=7 cellPadding=0 width="100%" border=0>
	  
	
	  <!-- Begin Each Album  Block -->
       
        <TR>
          <TD vAlign=top align="left" colspan=2 class="m10" >
				<B>ความคิดเห็นที่ <?=$inicount+1?></B><BR>
				<?if($rpFilepic<>""){ ?><IMG   src="images/webboardfile/<?=$rpFilepic?>"    ><BR><?}?>
				<?=$rpText?><BR>
				จาก&nbsp;<A HREF="mailto:<?=$rpEmail?>"><?=$rpName?></A>&nbsp;( <?=$update_date?> )
				
			</TD>
		</TR>

		 <!-- End Each Album  Block -->

</TBODY></TABLE></TD>
                      <TD>&nbsp;</TD>
                    </TR>
                    <TR> 
                      <TD vAlign=bottom align=left><IMG height=5  src="images/webboard/a3.gif" width=5></TD>
                      <TD class=m8 align=right></TD>
                      <TD vAlign=bottom align=right><IMG height=5  src="images/webboard/a4.gif"  width=5></TD>
                    </TR>
                    </TBODY> 
          </TABLE>
		<!--End Table Cerve -->
	<?}$inicount++;}?>		

<BR>
	              <TABLE  cellSpacing=1 cellPadding=2 width="500"             align=center border=0>
              <TBODY>
			   <TR align=middle>
                <TD class=m10 align=left bgColor=#c3e3f1 colspan=2> <B>ตอบกระทู้นี้</B></TD>
               
               </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>ชื่อ</TD>
                <TD class=m10  bgColor=#c3e3f1 align=left ><input name="txt_name" type="text" size="30"></TD>
               </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>E - mail</TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><input name="txt_email" type="text" size="55"></TD>
               </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>รายละเอียด
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><textarea name="txt_detail" id="txt_detail" cols="55" rows="5"></textarea></TD>
             </TR>
              <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>Emotion
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left >
<IMG height=22 src="images/webboard/003.gif" width=22 border=0 onClick="emoticon('<003>')" alt="<003>"> 
<IMG height=22 src="images/webboard/004.gif" width=22  border=0 onClick="emoticon('<004>')" alt="<004>"> 
<IMG height=22 src="images/webboard/005.gif" width=22  border=0 onClick="emoticon('<005>')" alt="<005>"> 
<IMG height=22 src="images/webboard/006.gif" width=22  border=0 onClick="emoticon('<006>')" alt="<006>"> 
<IMG height=22 src="images/webboard/007.gif" width=22  border=0 onClick="emoticon('<007>')" alt="<007>"> 
<IMG height=22 src="images/webboard/008.gif" width=22  border=0 onClick="emoticon('<008>')" alt="<008>"> 
<IMG height=22 src="images/webboard/009.gif" width=22  border=0 onClick="emoticon('<009>')" alt="<009>"> 
<IMG height=22 src="images/webboard/010.gif" width=22  border=0 onClick="emoticon('<010>')" alt="<010>"> 
<IMG height=22 src="images/webboard/011.gif" width=22  border=0 onClick="emoticon('<011>')" alt="<011>"> 
<IMG height=22 src="images/webboard/012.gif" width=22  border=0 onClick="emoticon('<012>')" alt="<012>"> 
<IMG height=22 src="images/webboard/013.gif" width=22  border=0 onClick="emoticon('<013>')" alt="<013>"> 
<IMG height=22 src="images/webboard/014.gif" width=22  border=0 onClick="emoticon('<014>')" alt="<014>"> 
<IMG height=22 src="images/webboard/015.gif" width=22  border=0 onClick="emoticon('<015>')" alt="<015>"> 
<IMG height=22 src="images/webboard/016.gif" width=22  border=0 onClick="emoticon('<016>')" alt="<016>"> 
 <IMG height=22 src="images/webboard/018.gif" width=22  border=0 onClick="emoticon('<018>')" alt="<018>"> 
 <IMG height=22 src="images/webboard/019.gif" width=22  border=0 onClick="emoticon('<019>')" alt="<019>"> 
 <IMG height=22 src="images/webboard/020.gif" width=22 border=0 onClick="emoticon('<020>')" alt="<020>"> 
<BR>
<IMG height=19 src="images/webboard/1.gif" width=19  border=0 onClick="emoticon('<1>')" alt="<1>"> 
<IMG height=19 src="images/webboard/2.gif" width=19  border=0 onClick="emoticon('<2>')" alt="<2>"> 
<IMG height=19 src="images/webboard/3.gif" width=19  border=0 onClick="emoticon('<3>')" alt="<3>"> 
<IMG height=19 src="images/webboard/4.gif" width=19  border=0 onClick="emoticon('<4>')" alt="<4>"> 
<IMG height=19 src="images/webboard/5.gif" width=19  border=0 onClick="emoticon('<5>')" alt="<5>"> 
<IMG height=19 src="images/webboard/6.gif" width=19  border=0 onClick="emoticon('<6>')" alt="<6>"> 
<IMG height=19 src="images/webboard/7.gif" width=19  border=0 onClick="emoticon('<7>')" alt="<7>"> 
<IMG height=19 src="images/webboard/8.gif" width=19  border=0 onClick="emoticon('<8>')" alt="<8>"> 
<IMG height=19 src="images/webboard/9.gif" width=19  border=0 onClick="emoticon('<9>')" alt="<9>"> 
<IMG height=19 src="images/webboard/10.gif" width=19  border=0 onClick="emoticon('<10>')" alt="<10>"> 
<IMG height=19 src="images/webboard/11.gif" width=19  border=0 onClick="emoticon('<11>')" alt="<11>"> 
<IMG height=19 src="images/webboard/12.gif" width=19  border=0 onClick="emoticon('<12>')" alt="<12>"> 
<IMG height=19 src="images/webboard/13.gif" width=19  border=0 onClick="emoticon('<13>')" alt="<13>"> 
<IMG height=19 src="images/webboard/14.gif" width=19  border=0 onClick="emoticon('<14>')" alt="<14>"> 
<IMG height=19 src="images/webboard/15.gif" width=19  border=0 onClick="emoticon('<15>')" alt="<15>"> 
<IMG height=19 src="images/webboard/16.gif" width=19  border=0 onClick="emoticon('<16>')" alt="<16>"> 
<IMG height=19 src="images/webboard/17.gif" width=19  border=0 onClick="emoticon('<17>')" alt="<17>"> 
<IMG height=19 src="images/webboard/18.gif" width=19  border=0 onClick="emoticon('<18>')" alt="<18>"> 
<IMG height=19 src="images/webboard/20.gif" width=19  border=0 onClick="emoticon('<20>')" alt="<20>"> 

				</TD>
             </TR>
			 <TR align=middle>
                <TD class=m10 align=right bgColor=#c3e3f1>ภาพประกอบ
               </TD>
                <TD class=m10 bgColor=#c3e3f1 align=left ><INPUT TYPE="file" NAME="txt_filepic">ขนาดภาพไม่เกิน 100 K</TD>
             </TR>
			 </TBODY></TABLE>
			 <input type="hidden" name="doInsert" value="1">
			 <input type="hidden" name="tpID" value="<?=$tpID?>">
			 <INPUT TYPE="submit" value="Post กระทู้">&nbsp;&nbsp;<INPUT TYPE="reset" value="ยกเลิก">
			 </form>
<? } ?>
				<!--End  reply -->
				</TD>
				</TR>
</TBODY></TABLE>
	<!-- End   webboard New-->
	
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
</body>
</html>


<script language="JavaScript1.2">
var testresults
function checkemail(){
if(newtopic.txt_name.value == "")
{
	alert ("กรุณากรอกชื่อของท่าน")
	newtopic.txt_name.focus()
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