<?
session_start();
include("../../initial/connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
####################################################
########## Department : Broadband Contents  			      ##########
########## Company : Asianet Corporation Limited         ##########
########## Project : MCU     				                                          ##########
########## Date : 12 September  2003							          ##########
####################################################
-->
<HTML>
<HEAD>
<TITLE>!!!! www.Phak2.go.th !!!!</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #05588A;}
a:hover {color: #4F3EA4;}

.EditControl       {       
width:500px;               
height:300px;      }       
.tblTable          {       
width : 500px;             
height: 30px;              
border:0;                  
cellspacing:0;             
cellpadding:0;             
background-color:#D4D0C8;
                   }     
.butClass          {       
width:22;                  
height:22;                 
border: 0px solid;         
border-color: #D6D3CE ;    
background-color:#D4D0C8;
                   }       
.tdClass           {       
padding-left: 0px;         
padding-top:0px;           
background-Color: #D4D0C8; }       

</style>

<script language="JavaScript"> 
nereidFadeObjects = new Object();
nereidFadeTimers = new Object();
function nereidFade(object, destOp, rate, delta){
if (!document.all)
return
    if (object != "[object]"){  //do this so I can take a string too
        setTimeout("nereidFade("+object+","+destOp+","+rate+","+delta+")",0);
        return;
    }
    clearTimeout(nereidFadeTimers[object.sourceIndex]);
    diff = destOp-object.filters.alpha.opacity;
    direction = 1;
    if (object.filters.alpha.opacity > destOp){
        direction = -1;
    }
    delta=Math.min(direction*diff,delta);
    object.filters.alpha.opacity+=direction*delta;
    if (object.filters.alpha.opacity != destOp){
        nereidFadeObjects[object.sourceIndex]=object;
        nereidFadeTimers[object.sourceIndex]=setTimeout("nereidFade(nereidFadeObjects["+object.sourceIndex+"],"+destOp+","+rate+","+delta+")",rate);
    }
}
</script>

<script language="javascript">
var win = null;
function NewWindow(mypage,myname,w,h){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>

<script language=JavaScript>
<!--

//Disable right click script III

var message="";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>


<?

		// To Show  gallery_subject
		$stmt_edit=mysql_query("select gaName from galleryalbum  where gaID='$gaID' ");
		$gallerysub_subject=mysql_result($stmt_edit, 0,"gaName");

		if(isset($mode)and$mode=="edit"){
	
			$sqlpicture = "select * from gallerypicture where gpID ='$gpID' ";
			$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
			while($row=mysql_fetch_array($rs)) { 

				$gpName= $row[gpName];
				$gpFileName= $row[gpFileName];

			}
		
		}
		if(!isset($gpName))$gpName="";
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#DCEECB">
<FORM  ACTION="" name="frmmain" method="POST" enctype="multipart/form-data">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

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




<!--Out Table----------------------------------------------------------------------------------------------------------------------------------------------->
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
	<tr>
		<td valign="top">

			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="505" bgcolor="#DCEECB">
				<tr>
					<td valign="top" bgcolor="">
<!--Middle Table-------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="">
							<tr>
								<td align="" valign="top" colspan="1" width="85%">
									
								
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr  width="100%">
											<td width="100%" align="">
												<FONT FACE="ms sans serif" SIZE="1" COLOR="#000000">				<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#DCEECB">
															<tr bgcolor="#F6FBFE">
														<td colspan =7 align="left">
														<a href="gallery_view.php?gaID=<?=$gaID?>">รายการทั้งหมด</a><BR></td>
														</tr>
														<tr bgcolor="#29672B">
														<td colspan=5></td>
<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#DCEECB">

							<tr bgcolor="#29672B"> 
                              <td align="">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แฟ้มภาพ  "<?print$gallerysub_subject?>"  >>> <?	if(isset($mode)and$mode=="edit") print "แก้ไขข้อมูล"; else print "เพิ่มข้อมูล" ?></B></FONT></td>
                            </tr>

                            <tr bgcolor="#DCEECB"> 
                              <td align=""><BR>
                                &nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B> 
                                </B></FONT> 
                                <table width="600" border="3" cellspacing="2" cellpadding="3" align="center" bordercolor="#336633">
                                  <tr> 
                                    <td> 
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
									  <!----------------
                                        <tr> 
                                          <td height="12" colspan="2"><b><b>1. 
                                            หัวข้อแฟ้มภาพ</b></b></td>
                                        </tr>
										<tr> 
                                          <td height="12" width="110"><b>&nbsp;<b></b></b></td>
                                          <td height="12" width="412"> 
                                            <input type="text" name="gallerysub_subject" size="83" value="<?print$gallerysub_subject?>">
                                          </td>
                                        </tr>
										------------------------>
                                        <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412">&nbsp;</td>
                                        </tr>

<tr> 
                                          <td height="12" colspan="2"><b><H1>Upload Image</H1></b><HR></td>
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                           
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                                        </tr>
										 <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412"><IMG name="upload_img" SRC="../../images/galleryfile/<?=$gpFileName?>" WIDTH="160" HEIGHT="120"  BORDER="1" ALT="Image Sample" ><?if(isset($mode)and$mode=="edit") {}else{?><br>Click browse to upload a local file :<br><input type="file" name="imgfile" onchange = "getimg()" style="cursor:hand" size="50"><input type="hidden" name="MAX_FILE_SIZE" value=""><?}?></td>
                                        </tr>
 <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412">บรรยายภาพ :<br><TEXTAREA NAME="gallery_title" ROWS="3" COLS="50"><?print$gpName?></TEXTAREA></td>
                                        </tr>
                                        <tr> 
                                          <td width="110"> 
                                            <div align="center"> 
                                              <input type="hidden" value="" name="count" size=10 readonly >
                                              <br>
                                             </div>
                                          </td>
                                          <td height="12" width="412"> 
                                          </td>                                      
                                        <tr> 
                                          <td height="12" colspan="2" align="center">
										  <INPUT TYPE="hidden" name="mode" >
										  <INPUT TYPE="hidden" name="gpID" value="<?=$gpID?>" >
										  <input type="submit" <?if(isset($mode)and$mode=="edit"){?> value="แก้ไข" onclick="return save_dataedit()" <?}else{?>  value="เพิ่มภาพ" onclick="return save_data()"  <?}?>  style="cursor:hand"></td>
        <!--                                  <td height="12" width="412"> -->
                                            
<!--                                            <input type="submit" name="Submit2" value="ยกเลิก">-->
                            <!--              </td>-->
                                        </tr>
                                        <tr> 
                                          <td height="12" colspan="2">&nbsp;</td>
                                        </tr>
										<!-------------------
                                        <tr> 
                                          <td height="12" width="110">&nbsp;* 
                                            ปรับปรุงข้อมูลเมื่อ</td>
                                          <td height="12" width="412">dd/mm/yyyy 
                                            xx:xx</td>
                                        </tr>
										------------------------>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                                <br>
                                <br>
                                <FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B> 
                                </B></FONT></td>
                            </tr>
                            <tr bgcolor="#336633"> 
                              <td align="center"><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT> 
                                <div align="center"></div>
                                &nbsp; <FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B></B></FONT></td>
                            </tr>
                          </table>
																										
														
														</tr>
														
													</table>
												</FONT>
											</td>
										</tr>
										
									</table>

								</td>
							</tr>
						</table>
<!--End Middle Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>

<!--Bottom Table----------------------------------------------------------------------------------------------------------------------------------------------->			

<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->

</font>
<INPUT TYPE="hidden" NAME="gaID" value="<?print $gaID?>">




</form>

</BODY>
	<SCRIPT language=JavaScript src="../connect/menu_array.js" type=text/javascript></SCRIPT>
	<SCRIPT language=JavaScript src="../connect/mmenu.js" type=text/javascript></SCRIPT>
</HTML>

<script language=javascript>
function getimg(){
		frmmain.upload_img.src = frmmain.imgfile.value ;
	}

function save_data(){
if(!frmmain.imgfile.value){
	alert("กรุณาเลือกรูปที่ต้องการ Upload");
	frmmain.imgfile.focus();
	return false
}
//alert(frmmain.imgfile.value);
	frmmain.action="gallery_view_save.php";
}

function save_dataedit(){
	frmmain.mode.value="edit";
	//alert(frmmain.imgfile.value);
	frmmain.action="gallery_view_save.php";
}

	</script>
