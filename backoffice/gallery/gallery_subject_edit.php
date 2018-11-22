<?
session_start();
include("../connect/connect_oci.php");
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
</HEAD>
<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #FFFFFF;}
a:hover {color: #00FFFF;}

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

<Script Language="javascript">
function doCommand(ctrl)
{
   //BackColor
   var mCommand, uInterface, vValue;
switch(ctrl.id)
{		
   case 'imgSuperScript' :
	    mCommand = 'superscript';			
	    uInterface = false;
		vValue = null;
		break;
	case 'imgSubScript' :
	    mCommand = 'subscript';			
	    uInterface = false;
	    vValue = null;
	    break;
   case 'imgBold' :
	    mCommand = 'bold';			
	    uInterface = false;
	    vValue = null;
	    break;
   case 'imgItalic' :
	    mCommand = 'italic';			
	    uInterface = false;
	    vValue = null;
	    break;	
   case 'imgBoldItalic' :
	    doCommand (document.all['imgBold'])
	    doCommand (document.all['imgItalic'])
	    doCommand (document.all['imgUnderLine'])
	    break;
   case 'imgUnderLine' :
	    mCommand = 'underline';			
	    uInterface = false;
	    vValue = null;
	    break;	
   case 'imgStrikeThrough' :
	    mCommand = 'strikethrough';		
	    uInterface = false;
	    vValue = null;
	    break;	
   case 'imgAlignLeft' :
	    mCommand = 'justifyleft';			
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgAlignRight' :
	    mCommand = 'justifyright';
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgAlignCenter' :
	    mCommand = 'justifycenter';
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgAlignJustify' :
	    mCommand = 'justifyfull';
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgCut' :
	    mCommand = 'cut';
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgCopy' :
	    mCommand = 'copy';
	    uInterface = false;
	    vValue = null;
	    break;				
   case 'imgPaste' :
	    mCommand = 'paste';
	    uInterface = false;
	    vValue = null;
	    break;			
   case 'imgImage' :
	    mCommand = 'insertimage';
	    uInterface = true;
	    vValue = null;
	    break;				
	case 'imgLink' :
	    mCommand = 'createlink';
	    uInterface = true;
	    vValue = null;
		break;				
	case 'imgLine' :
		mCommand = 'inserthorizontalrule';
		uInterface = false;
		vValue = null;
		break;	
	case 'imgUndo' :
       alert ('undo');		mCommand = 'undo';
		uInterface = false;
		vValue = null;
		break;				
	case 'imgRedo' :
		mCommand = 'redo';
		uInterface = false;
		vValue = null;
		break;				
	case 'imgOrderList' :
		mCommand = 'insertorderedlist';
		uInterface = false;
		vValue = null;
		break;				
	case 'imgUnOrderList' :
		mCommand = 'insertunorderedlist';
		uInterface = false;
		vValue = null;
		break;				
	case 'imgOutdent' :
		mCommand = 'outdent';
		uInterface = false;
		vValue = null;
		break;				
	case 'imgIndent' :
		mCommand = 'indent';
		uInterface = false;
		vValue = null;
		break;
	case 'lstStyle' :
		mCommand = 'formatblock';
		vValue = ctrl.options[ctrl.selectedIndex].value ;
		uInterface = false;
		break;
	case 'lstFontSize' :
		mCommand = 'fontsize';
		vValue = ctrl.options[ctrl.selectedIndex].value ;
		uInterface = false;
		break;
	case 'lstFont' :
		mCommand = 'fontname';
		vValue = ctrl.options[ctrl.selectedIndex].value ;			
		uInterface = false;
		break;
	case 'lstColor' :
		mCommand = 'forecolor';
		vValue = ctrl.options[ctrl.selectedIndex].value ;			
		uInterface = false;
		break;		
	case 'imgDelete' :
		mCommand = 'delete';
		vValue = null;
		uInterface = false;
		break;
	case 'imgPrint' :
		mCommand = 'delete';
		vValue = null;
		uInterface = true;						
		break;
	case 'imgSave' :
		mCommand = 'saveas';
		vValue = null;
		uInterface = true;						
		break;
	case 'imgCustom' :		
		var temp = table2.style.display;
		if (temp == 'none')
		{
			var mTemp1 = myRTF.document.body.innerText;
			table1.style.display = 'inline';
			table2.style.display = 'inline';		
			myRTF.document.body.innerHTML = mTemp1;
		}
	    else
		{				
			//First Set the  HTMLText in the TextBox
			var mTemp = myRTF.document.body.innerHTML;
			table1.style.display = 'none';
			table2.style.display = 'none';	
			myRTF.document.body.innerText = mTemp;	 
		}
		break;			
	case 'imgFontColor' :
		var oldcolor = GetEditBoxColor('forecolor');    		
		mCommand = 'forecolor';
		uInterface = false;
		vValue = GetColorFromUser(oldcolor);
		break;
	case 'imgHighLight' : 
		var oldcolor = GetEditBoxColor('backcolor');    		
		mCommand = 'backcolor';
		uInterface = false;
		vValue = GetColorFromUser(oldcolor);		
		break;
	case 'imgSpecialChar' :
		alert ('Special Characters will be provided soon.');
		return;    		
		break;
	case 'imgSmile' :
		var posX    = event.screenX;
		var posY    = event.screenY + 20;
		var screenW = screen.width;                                 // screen size
		var screenH = screen.height - 20;                           // take taskbar into account
		//if (posX + 232 > screenW) { posX = posX - 232 - 40; }       // if mouse too far right
		//if (posY + 164 > screenH) { posY = posY - 164 - 80; }       // if mouse too far down
		var wPosition   = 'dialogLeft:' +posX+ '; dialogTop:' +posY;
		var newimage = showModalDialog('../imagesArea/Smiles.html', '',
	            'dialogWidth:110px; dialogHeight: 140px; '
			+ 'resizable: no; help: no; status: no; scroll: no; '
			+ wPosition);		
       if (newimage == null) return;		newimage = '../imagesArea/icons/smiles' + '/' + newimage;
		mCommand = 'insertimage';
		vValue = newimage;
		uInterface = false;						
		break;
		break ;
	case 'imgAbout' :
		document.frmmain.gallerysub_desc.value = frames.myRTF.document.body.innerHTML
		frmmain.count.value = frmmain.gallerysub_desc.value.length;
		alert ('จำนวนตัวอักษรรวมกับ tag html ต้องไม่เกิน 4000 ตัวอักษร \nขณะนี้มีจำนวน '+frmmain.count.value+" ตัว");
		break;
}
	myRTF.focus ();
	myRTF.document.execCommand (mCommand, uInterface, vValue);
	myRTF.focus ();
} 
function GetColorFromUser(oldcolor)
{
	var posX    = event.screenX;
	var posY    = event.screenY + 20;
	var screenW = screen.width;                                 // screen size
	var screenH = screen.height - 20;                           // take taskbar into account
	if (posX + 232 > screenW) { posX = posX - 232 - 40; }       // if mouse too far right
	if (posY + 164 > screenH) { posY = posY - 164 - 80; }       // if mouse too far down
	var wPosition   = 'dialogLeft:' +posX+ '; dialogTop:' +posY;
	var newcolor = showModalDialog('../imagesArea/ColorPicker.html', oldcolor,
	        'dialogWidth:238px; dialogHeight: 187px; '
	+ 'resizable: no; help: no; status: no; scroll: no; '
	+ wPosition);
	        return newcolor
}
function GetEditBoxColor(colorCommand)
{
	return DecimalToRGB(myRTF.document.queryCommandValue(colorCommand));
}
function DecimalToRGB(value) {
	var hex_string = '';
	for (var hexpair = 0; hexpair < 3; hexpair++) {
   	var byte = value & 0xFF;            // get low byte
	    value >>= 8;                        // drop low byte
	    var nybble2 = byte & 0x0F;          // get low nybble (4 bits)
	    var nybble1 = (byte >> 4) & 0x0F;   // get high nybble
	    hex_string += nybble1.toString(16); // convert nybble to hex
	    hex_string += nybble2.toString(16); // convert nybble to hex
   }
	return hex_string.toUpperCase();
}
		</Script>
		<Script Language="javascript">
function selDown(ctrl)
{
   ctrl.style.backgroundColor = '#D4D0C8';
}
function selUp(ctrl)
{
   ctrl.style.backgroundColor = '#D4D0C8';
}
		</Script>
		<Script Language="javascript">
function selOff(ctrl)
{
   var mImage ;
   switch(ctrl.id)
   {
       case 'imgCuston' :
           mImage = 'customtag_off.gif';
           break;
       case 'imgAbout' :
           mImage = 'about_off.gif';
           break; 
       case 'imgBold' :
		    mImage = 'bold_off.gif';
	        break;
       case 'imgItalic' :
           mImage = 'italic_off.gif';
           break;	
       case 'imgBoldItalic' :
           mImage = 'bolditalicunderline_off.gif';
           break;				

       case 'imgSuperScript' :
           mImage = 'superscript_off.gif'
           break;
		case 'imgSubScript' :
	        mImage = 'subscript_off.gif'
           break;
       case 'imgSpecialChar' :
           mImage = 'specialchars_off.gif'
           break;
		case 'imgSave':
	        mImage = 'save_off.gif'
           break;
		case 'imgUnderLine' :
	        mImage = 'underline_off.gif';
           break;	
       case 'imgStrikeThrough' :
           mImage = 'strikethrough_off.gif';
           break;	
       case 'imgAlignLeft' :
           mImage = 'alignleft_off.gif';
           break;				
       case 'imgAlignRight' :
           mImage = 'alignright_off.gif';
           break;				
       case 'imgAlignCenter' :
           mImage = 'aligncenter_off.gif';
           break;				
       case 'imgAlignJustify' :
           mImage = 'alignjustify_off.gif';
           break;				
		case 'imgCut' :
	        mImage = 'cut_off.gif';
           break;				
       case 'imgCopy' :
           mImage = 'copy_off.gif';
           break;				
       case 'imgPaste' :
			mImage = 'paste_off.gif';
	        break;			
       case 'imgImage' :
           mImage = 'image_off.gif';
           break;				
       case 'imgLink' :
           mImage = 'link_off.gif';
           break;				
       case 'imgLine' :
           mImage = 'line_off.gif';
           break;	

       case 'imgUndo' :
           mImage = 'undo_off.gif';
           break;				
       case 'imgRedo' :
           mImage = 'redo_off.gif';
           break;			
       case 'imgOrderList' :
           mImage = 'orderedlist_off.gif';
           break;				
       case 'imgUnOrderList' :
           mImage = 'unorderedlist_off.gif';
           break; 				
       case 'imgOutdent' :
           mImage = 'outdent_off.gif';
           break; 				
       case 'imgIndent' :
           mImage = 'indent_off.gif';
           break; 	
       case 'imgHighLight' :
           mImage = 'highlight_off.gif';
           break;	
       case 'imgFontColor' :
           mImage = 'fontcolor_off.gif';
           break;	
	    case 'imgCustom' :
	        mImage = 'customtag_off.gif';
	        break;	
       default :
           mImage = ctrl.src;			
   }
   var mNewImage = new Image();
   mNewImage.src = '../imagesArea/icons/' + mImage ;
   if (! (mImage == ctrl.src) ) 
       ctrl.src = mNewImage.src;
}
		</Script>
		<Script Language="javascript">
function selOn(ctrl) {
   var mImage 
   switch(ctrl.id)
   {
       case 'imgCuston' :
           mImage = 'customtag_over.gif';
           break;
       case 'imgAbout' :
           mImage = 'about_over.gif';
           break; 
       case 'imgBold' :
           mImage = 'bold_over.gif';
           break;
       case 'imgItalic' :
           mImage = 'italic_over.gif';
           break;	
       case 'imgBoldItalic' :
           mImage = 'bolditalicunderline_over.gif';
           break;				
       case 'imgUnderLine' :
           mImage = 'underline_over.gif';
           break;				
       case 'imgStrikeThrough' :
           mImage = 'strikethrough_over.gif';
           break;	
       case 'imgSpecialChar' :
           mImage ='specialchars_over.gif'
           break;

       case 'imgSuperScript' :
           mImage = 'superscript_over.gif'
           break;
       case 'imgSubScript' :
           mImage = 'subscript_over.gif'
           break;
       case 'imgSave':
           mImage = 'save_over.gif'
           break;
       case 'imgAlignLeft' :
           mImage = 'alignleft_over.gif';
           break;				
       case 'imgAlignRight' :
           mImage = 'alignright_over.gif';
           break;				
       case 'imgAlignCenter' :
           mImage = 'aligncenter_over.gif';
           break;	
       case 'imgAlignJustify' :
           mImage = 'alignjustify_over.gif';
           break;				
       case 'imgCut' :
           mImage = 'cut_over.gif';
           break;				
       case 'imgCopy' :
           mImage = 'copy_over.gif';
           break;				
       case 'imgPaste' :
           mImage = 'paste_over.gif';
           break;	
       case 'imgImage' :
           mImage = 'image_over.gif';
           break;				
       case 'imgLink' :
           mImage = 'link_over.gif';
           break;				
       case 'imgLine' :
           mImage = 'line_over.gif';
	        break;	
       case 'imgUndo' :
           mImage = 'undo_over.gif';
           break;				
       case 'imgRedo' :
           mImage = 'redo_over.gif';
           break;	
       case 'imgOrderList' :
           mImage = 'orderedlist_over.gif';
           break;				
       case 'imgUnOrderList' :
           mImage = 'unorderedlist_over.gif';
           break;				
       case 'imgOutdent' :
           mImage = 'outdent_over.gif';
           break;				
       case 'imgIndent' :
           mImage = 'indent_over.gif';
           break;			
       case 'imgHighLight' :
           mImage = 'highlight_over.gif';
	        break;	
	    case 'imgFontColor' :
	        mImage = 'fontcolor_over.gif';
	        break;	
	    case 'imgCustom' :
	        mImage = 'customtag_over.gif';
	        break;	
	    default :
           mImage = ctrl.src;

   }
   var mNewImage = new Image();
   mNewImage.src = '../imagesArea/icons/' + mImage ;
   if (! (mImage == ctrl.src) ) 
       ctrl.src = mNewImage.src;
   ctrl.style.cursor = 'hand';	
}
</Script>
<?
//To show data Bafore Edit
$sql_edit = "select * from GALLERY_SUBJECT  where GALLERYSUB_ID='$gallerysub_id' ";
$stmt_edit = mysql_query($sql_edit ) or die ("Invalid query : " . mysql_error());

		$gallerysub_subject=mysql_result($stmt_edit , 0,"GALLERYSUB_SUBJECT");
		$gallerysub_desc=mysql_result($stmt_edit , 0,"GALLERYSUB_DESC");
		$update_date =  mysql_result($stmt_edit , 0,"UPDATE_DATE");

//Set Display Update time 
		$update_date = (string) $update_date;
		$uday = substr($update_date,8,2);
		$umonth = substr($update_date,5,2);
		$uyear = (string)(int)(substr($update_date,0,4))+543;
		$utime = substr($update_date,11,8);
		$update_date= $uday."/".$umonth."/".$uyear."    ".$utime;
?>

<BODY topmargin="0" leftmargin="0" bgcolor="#DCEECB">
<FORM METHOD=POST ACTION="" name="frmmain">

<FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="40">
				<tr>
					<td bgcolor="#DCEECB" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
					<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="40" frameborder="0" scrolling="NO" ></iframe>
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
													<tr bgcolor="#29672B">
														<td colspan =5 align="left"><!---<img 
                  alt="พัฒนาการ พ.ร.บ. มจร." border=0 height=17 name=law1
                  src="../images/menu_law31.gif" width=170 >----><a href="gallery_subject.php?countpage=<?print$countpage?>" 
                  onMouseOut="document.total.src='../images/menu_total2.gif'; return true" 
                  onMouseOver="document.total.src='../images/menu_total1.gif'; return true"><img 
                  alt="รายการทั้งหมด" border=0 height=17 name=total
                  src="../images/menu_total2.gif" width=170 style="cursor:hand"></a></td></tr>
														<tr bgcolor="#29672B">
														<td colspan=5></td>
<table  border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="#DCEECB">

							<tr bgcolor="#29672B"> 
                              <td align="">&nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B>แฟ้มภาพ >  แก้ไขข้อมูล</B></FONT></td>
                            </tr>

                            <tr bgcolor="#DCEECB"> 
                              <td align=""><BR>
                                &nbsp;<FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF"><B> 
                                </B></FONT> 
                                <table width="600" border="3" cellspacing="2" cellpadding="3" align="center" bordercolor="#336633">
                                  <tr> 
                                    <td> 
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
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
                                        <tr> 
                                          <td height="14" width="110">&nbsp;</td>
                                          <td height="14" width="412">&nbsp;</td>
                                        </tr>

<tr> 
                                          <td height="12" colspan="2"><b>2. รายละเอียด</b></td>
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                           
                                            <!-- Insert function----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                          </td>
                                        </tr>
                                        <tr> 
                                          <td width="110"> 
                                            <div align="center"> 
                                              <input type="hidden" value="" name="count" size=10 readonly >
                                              <br>
                                             </div>
                                          </td>
                                          <td height="12" width="412"> 
<TABLE border="0" width="100%">
	<TR>
		<TD>
			<TABLE id="table1" class="tblTable" width="100%">
				<TR>
					<td class="tdClass"><!--<img ID="imgSave" alt="Save" name="imgSave" class="butClass" src="../imagesArea/icons/save_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">----></td>
					<td class="tdClass"><!--<img ID="imgUndo" alt="Undo" name="imgUndo" class="butClass" src="../imagesArea/icons/undo_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">----></td>
					<td class="tdClass"><!----<img ID="imgRedo" alt="Redo" name="imgRedo" class="butClass" src="../imagesArea/icons/redo_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">----></td>
					<td class="tdClass"><img ID="imgSubScript" alt="Subscript" name="imgSubScript" class="butClass" src="../imagesArea/icons/subscript_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"><img ID="imgSuperScript" alt="SuperScript" name="imgSuperScript" class="butClass" src="../imagesArea/icons/superscript_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"><img ID="imgOrderList" alt="Ordered List" name="imgOrderList" class="butClass" src="../imagesArea/icons/orderedlist_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"><img ID="imgUnOrderList" alt="Unordered List" name="imgUnOrderList" class="butClass" src="../imagesArea/icons/unorderedlist_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"><img alt="Outdent" ID="imgOutdent" name="imgOutdent" class="butClass" src="../imagesArea/icons/outdent_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"><img alt="Indent" ID="imgIndent" name="imgIndent" class="butClass" src="../imagesArea/icons/indent_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					<td class="tdClass"> <!-- Insert the Style List -->
						<select id="lstStyle" width="30px" onChange="doCommand(this);">
							<option value="paragraph">Paragraph</option>
							<option value="Heading 1">H1</option>
							<option value="Heading 2">H2</option>
							<option value="Heading 3">H3</option>
							<option value="Heading 4">H4</option>
							<option value="Heading 5">H5</option>
							<option value="Heading 6">H6</option>
							<option value="Heading 7">H7</option>
						</select>
					</td>
					<td class="tdClass">
						<Select id="lstFont" name="lstFont" width="30px" onChange="doCommand(this);">
							<option value="Arial">Arial</option>
							<option value="Courier">Courier</option>
							<option value="Sans Serif">Sans Serif</option>
							<option value="Tahoma">Tahoma</option>
							<option value="Verdana">Verdana</option>
							<option value="Wingdings">Wingdings</option>
						</Select>
					</td>
					<td class="tdClass">
						<select id="lstFontSize" onChange="doCommand(this);" width="30px">
							<option value="1">Very Small</option>
							<option value="2">Small</option>
							<option value="3">Medium</option>
							<option value="4">Large</option>
							<option value="5">Larger</option>
							<option value="6">Very Large</option>
							<option value="7">Extra Large</option>
						</select>
					</td>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD class="tdClass">
			<TABLE id="table2" class="tblTable">
				<TR>
					<TD class="tdClass">
						<td class="tdClass"><img ID="imgBold" alt="Bold" name="imgBold" class="butClass" src="../imagesArea/icons/bold_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgItalic" alt="Italic" name="imgItalic" class="butClass" src="../imagesArea/icons/italic_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgUnderLine" alt="Underline" name="imgUnderLine" class="butClass" src="../imagesArea/icons/underline_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgBoldItalic" alt="Bold Italic UnderLine" name="imgBoldItalic" class="butClass" src="../imagesArea/icons/bolditalicunderline_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgStrikeThrough" alt="Strike Trhough" name="imgStrikeThrough" class="butClass" src="../imagesArea/icons/strikethrough_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img src="../imagesArea/icons/separator.gif"></td>
						<td class="tdClass"><img ID="imgAlignLeft" alt="Left Align" name="imgAlignLeft" class="butClass" src="../imagesArea/icons/alignleft_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgAlignCenter" alt="Center Align" name="imgAlignCenter" class="butClass" src="../imagesArea/icons/aligncenter_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgAlignRight" alt="Right Align" name="imgAlignRight" class="butClass" src="../imagesArea/icons/alignright_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgAlignJustify" alt="Justify" name="imgAlignJustify" class="butClass" src="../imagesArea/icons/alignjustify_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img src="../imagesArea/icons/separator.gif"></td>
						<td class="tdClass"><img ID="imgCut" alt="Cut" name="imgCut" class="butClass" src="../imagesArea/icons/cut_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgCopy" alt="Copy" name="imgCopy" class="butClass" src="../imagesArea/icons/copy_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgPaste" alt="Paste" name="imgPaste" class="butClass" src="../imagesArea/icons/paste_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><!---<img ID="imgSpecialChar" alt="Special Character" name="imgSpecialChar" class="butClass" src="../imagesArea/icons/specialchars_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">-----></td>
						<td class="tdClass"><img src="../imagesArea/icons/separator.gif"></td>
						<td class="tdClass"><img ID="imgImage" alt="Insert Image" name="imgImage" class="butClass" src="../imagesArea/icons/image_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgLink" alt="Hyper Link" name="imgLink" class="butClass" src="../imagesArea/icons/link_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgLine" alt="Insert Line" name="imgLine" class="butClass" src="../imagesArea/icons/line_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgFontColor" alt="Text Color" name="imgFontColor" class="butClass" src="../imagesArea/icons/fontcolor_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgHighLight" alt="Highlight Color" name="imgHighLight" class="butClass" src="../imagesArea/icons/highlight_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
						<td class="tdClass"><img ID="imgSmile" alt="Insert Smiles" name="imgSmile" class="butClass" src="../imagesArea/icons/1.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)"></td>
					</TR>
				</TABLE>
			</TD>
		</TR>
		<TR>
			<TD class="tdClass">
				<TABLE id="table3" class="tblTable">
					<TR>
						<TD class="tdClass">
<IFrame name="myRTF" ID="myRTF" class="EditControl" src="gallerysub_IE_textbox.php?gallerysub_id=<?print$gallerysub_id?>"></IFrame>
</TD>
					</TR>
					<TR>
						<td align="right" class="tdClass">
							<img alt="HTML View" ID="imgCustom" name="imgCustom" class="butClass" src="../imagesArea/icons/customtag_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">
							<img alt="About" ID="imgAbout" name="imgAbout" class="butClass" src="../imagesArea/icons/about_off.gif" onMouseOver="selOn(this)" onMouseOut="selOff(this)" onMouseDown="selDown(this)" onMouseUp="selUp(this)" onClick="doCommand(this)">
						</td>
					</TR>
				</TABLE>
			</TD>
		</TR>
	</TABLE>

                                          </td>
                                        </tr>
										   <tr> 
                                          <td height="12" colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr> 
                                          <td height="12" colspan="2" align="right"><input type="submit" name="Submit" value="บันทึก" onclick="return save_data()" style="cursor:hand"></td>
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
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="">
				<tr>
					<td valign="top">
<!--Down Table--------------------------------------------------------------------------------------------------------------------------------------------------->	
						<table cellpadding="0" cellspacing="0" border="0" width="100%" height="" bgcolor="#D4D0C8">
							<tr>
								<td align="" width="" colspan="2" background="../images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Production</B></FONT></td>
							</tr>
							<tr>
								<td align="" width="15%"><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;<B>Powered by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">True Corporation Plc. </FONT></td>
							</tr>
							<tr valign="top">
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Developed by</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><!-- Asia Multimedia Co., Ltd.<BR> -->Asianet Corporation Limited<BR>
								27th Floor, 1 Fortune Town, Ratchadaphisek Rd, Huay Khwang, Bangkok 10320, Thailand.
								</FONT></td>
							</tr>
<!-- 
							<tr>
								<td align="" width="">&nbsp;<B>Contact</B><FONT FACE="ms sans serif" SIZE="1" COLOR="">&nbsp;</FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="">Mr.Ramsak  Kaewsorn</FONT></td>
							</tr>
 -->
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>Tel. / Fax.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">+66 0 2699 5449 / +66 0 2641 1833</FONT></td>
							</tr>
							<tr>
								<td align="" width=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;">&nbsp;<B>E-mail.</B></FONT></td>
								<td align=""><FONT FACE="ms sans serif" SIZE="1" COLOR="" style="font-family: ms sans serif; font-size:7pt;"><A HREF="mailto:content@ims.co.th" style="text-decoration:none"><FONT FACE="ms sans serif" SIZE="1" COLOR="#000000" style="font-family: ms sans serif; font-size:7pt;">content@ims.co.th</FONT></A></FONT></td>
							</tr>
							<tr>
								<td align="" width="" colspan="2" background="../images/head_color_blue-1024x15.gif" BORDER=0 ALT=""><FONT FACE="ms sans serif" SIZE="1" COLOR="#FFFFFF" style="font-family: ms sans serif; font-size:7pt;"></FONT></td>
							</tr>
						</table>
<!--End Down Table-------------------------------------------------------------------------------------------------------------------------------------------->	
					</td>
				</tr>
			</table>
<!--End Bottom Table---------------------------------------------------------------------------------------------------------------------------------------------->
		</td>
	</tr>
</table>
<!--End Out Table----------------------------------------------------------------------------------------------------------------------------------------------->

</font>
<input type='hidden' name='countpage' value='<?print  $countpage?>'>
<input type="hidden" name="gallerysub_desc" value="">
<input type='hidden' name='gallerysub_id' value='<?print  $gallerysub_id?>'>



</form>

<script>
	//Set the IFRame to Desing Mode.
	myRTF.document.designMode='on';
</script>
</BODY>
	<SCRIPT language=JavaScript src="../connect/menu_array.js" type=text/javascript></SCRIPT>
	<SCRIPT language=JavaScript src="../connect/mmenu.js" type=text/javascript></SCRIPT>
</HTML>

<SCRIPT LANGUAGE="JavaScript">
<!--

function save_data(){

	
		if(!frmmain.gallerysub_subject.value){
			alert("กรุณากรอกหัวข้อแฟ้มภาพด้วยครับ");
			frmmain.gallerysub_subject.focus();
			return false;
		}
		
		document.frmmain.gallerysub_desc.value = frames.myRTF.document.body.innerHTML
		if(!frames.myRTF.document.body.innerHTML){
		alert("กรุณากรอกรายละเอียดของแฟ้มภาพด้วยครับ");		
		frames.myRTF.document.body.focus();
			return false;
		}

		frmmain.count.value = frmmain.gallerysub_desc.value.length;

		if(frmmain.count.value>=4000){
		alert("รายละเอียด ใส่ได้ไม่เกิน 4000 ตัวอักษร \nขณะนี้มีจำนวนตัวอักษรอยู่ "+document.frmmain.count.value+" ตัว  \nกรุณาลดจำนวนตัวอักษรด้วยค่ะ");
		frames.myRTF.document.body.focus();
		return false;
	
	}
//alert(frmmain.gallerysub_desc.value)
	frmmain.action="gallery_subject_edit_save.php";
}


function exit_system(){
		if  (confirm('คุณต้องการออกจากระบบใช่หรือไม่')) {

		 window.open("../manage/signout.php","_top");

		}

}
//-->
</SCRIPT>