<?session_start(); 
if (!isset($adminID)){?>
<script language = "javascript">
//window.location="index.php";
//alert("ss")
</script>
<?}?>

<HTML>
<HEAD>
<TITLE>Beauty Gossip</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>
<?
	function getFileExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }


if (isset($modesave) && ($modesave=="EDITTEXT")) {	

//start ถ้ามีถาพ
    if(isset($imgfile) AND $imgfile<>''){
        $pext = getFileExtension($imgfile_name);
        $pext = strtolower($pext);
        if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
            <script language = "javascript">
                alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
				 window.history.back();
            </script> 
 <?  }else{
            $uploaddir = "../../images/beautyalertfile/";
			//To creat filename 
			$filesavename='bar_head.jpg';
			//End creat filename 

            $newfile2 = $uploaddir.$filesavename;
            //echo  $newfile2;
					
						if (copy($imgfile,"$newfile2")) { 
							?><script language = "javascript">
								alert("บันทึกภาพ Head แล้ว")
							</script><?
						}else{
							?><script language = "javascript">
								alert("ไม่สามารถบันทึกภาพ Head ")
							</script><?			
						}
			
        }
														
												 
    }
						//End ถ้ามีภาพ
						//start ถ้ามีถาพ2
									if(isset($imgfile2) AND $imgfile2<>''){
													$pext = getFileExtension($imgfile2_name);
													$pext = strtolower($pext);
													if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
														<script language = "javascript">
															alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
															window.history.back();
														</script> 
												<? }else{
								 			$uploaddir = "../../images/beautyalertfile/";
											//To creat filename 
											$filesavename='bar_bannerA.jpg';
											//End creat filename 
								
											$newfile2 = $uploaddir.$filesavename;
														//echo  $newfile2;
					
														if (copy($imgfile2,"$newfile2")) {
															?><script language = "javascript">
																alert("บันทึกภาพ Banner A แล้ว")
															</script><?
														}else{
															?><script language = "javascript">
																alert("ไม่สามารถบันทึกภาพ Banner A ")
															</script><?			
														}
												 }
									}
						//End ถ้ามีภาพ2
					    //start ถ้ามีถาพ3
									if(isset($imgfile3) AND $imgfile3<>''){
													$pext = getFileExtension($imgfile3_name);
													$pext = strtolower($pext);
													if (($pext != "jpg")  && ($pext != "jpeg") && ($pext != "gif")){  ?>
														<script language = "javascript">
															alert("ไม่สามารถบันทึกข้อมูลชนิด <?print  $pext?>   ชนิดของไฟล์ภาพ ต้องเป็น jpg jpeg และ gif เท่านั้น<BR>");
															window.history.back();
														</script> 
												<? }else{
								 			$uploaddir = "../../images/beautyalertfile/";
											//To creat filename 
											$filesavename='bar_bannerB.jpg';
											//End creat filename 
								
											$newfile2 = $uploaddir.$filesavename;
														//echo  $newfile2;
					
														if (copy($imgfile3,"$newfile2")) {
															?><script language = "javascript">
																alert("บันทึกภาพ Banner B แล้ว")
															</script><?
														}else{
															?><script language = "javascript">
																alert("ไม่สามารถบันทึกภาพ Banner B ")
															</script><?			
														}
												 }
									}
						//End ถ้ามีภาพ3
						?>
																		<script language = "javascript">
																					window.location="http://www.sanngam.com/backoffice/home.php";
																		</script>		<?

					
				
} else {
?>
<BODY  topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<form action="" name="frmmain" id="frmmain" method="post" enctype="multipart/form-data">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#DCEECB" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->


<TABLE>
<TR>
	<TD>
<A HREF="http://www.sanngam.com/backoffice/home.php">	กลับหน้าหลัก</A>	</TD>
</TR>
<TR>
	<TD align="center">
	<?
					if (!isset($ntittle))$ntittle=""; 
					if (!isset($ndesc))$ndesc=""; 
					if (!isset($nPicture))$nPicture=""; 
	?>

	<TABLE cellpadding="5" cellspacing="0" border="0" width="90%">
	<TR>
		<TD width=200>&nbsp;</TD>
		<TD><b>แก้ไขภาพประกอบและ banner</b></TD>
	</TR>
	<TR>
		<TD><img src="exam_head.jpg"></TD>
		<TD><IMG name="upload_img" SRC="../../images/beautyalertfile/bar_head.jpg"  BORDER="1" ALT="Image Sample" >
		<br> ต้องมีขนาด  987 X 175 Pixel เท่านั้น :<br><input type="file" name="imgfile" onchange = "getimg()" style="cursor:hand" size="50"><input type="hidden" name="MAX_FILE_SIZE" value=""></TD>
	</TR>
<TR>
		<TD><img src="exam_banA.jpg"></TD>
		<TD><p><IMG name="upload_img2" SRC="../../images/beautyalertfile/bar_bannerA.jpg" WIDTH="765" BORDER="1" ALT="Image Sample" ><br>ต้องมีขนาด  765 X 106 Pixel เท่านั้น<br>
		<br>
		        <input type="file" name="imgfile2" onchange = "getimg2()" style="cursor:hand" size="50">
		        <input type="hidden" name="MAX_FILE_SIZE2" value="">
		    </p></TD>
	</TR>		
<TR>
		<TD><img src="exam_banB.jpg"></TD>
		<TD><p><IMG name="upload_img3" SRC="../../images/beautyalertfile/bar_bannerB.jpg" WIDTH="765"   BORDER="1" ALT="Image Sample" ><br>ต้องมีขนาด  765 X 106 Pixel เท่านั้น<br>
		<br>
		        <input type="file" name="imgfile3" onchange = "getimg3()" style="cursor:hand" size="50">
		        <input type="hidden" name="MAX_FILE_SIZE3" value="">
		    </p></TD>
	</TR>	
		
	<TR>
		<TD colspan=2 align="center">	<p>
		  <INPUT TYPE="submit" value="save"  onClick="editsave()">
		</p>
		  <hr></TD>
	</TR>
	</TABLE>  	  <div align="left"><a href="ann_main.php"><img src="exam_banC.jpg" width="201" height="307" align="left" border="0">คลิ๊กที่นี่</a><BR>
	  
	  </div></TD>
</TR>
</TABLE>
<input type='hidden' name='modesave' >
<input type='hidden' name='Id'  value=<?=$Id?>>
<input type='hidden' name='mode' value=<?=$mode?> >
</form>
</BODY>
</HTML>
<SCRIPT LANGUAGE="JavaScript">
function addsave(){
			frmmain.modesave.value = 'ADDTEXT';
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function editsave(){
			frmmain.modesave.value = 'EDITTEXT';
			frmmain.action = '<?echo $PHP_SELF;?>';
		    frmmain.submit();
}

function getimg(){
		frmmain.upload_img.src = frmmain.imgfile.value ;
	}

function getimg2(){
		frmmain.upload_img2.src = frmmain.imgfile2.value ;
	}
function getimg3(){
		frmmain.upload_img3.src = frmmain.imgfile3.value ;
	}
function getimg4(){
		frmmain.upload_img4.src = frmmain.imgfile4.value ;
	}		
</SCRIPT>
<?}?>