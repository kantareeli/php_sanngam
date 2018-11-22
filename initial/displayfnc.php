<? 
	$month = array (
    1 => "มกราคม",
	2 => "กุมภาพันธ์",
	3 => "มีนาคม",
	4=> "เมษายน",
	5=> "พฤษภาคม",
	6=> "มิถุนายน",
	7=> "กรกฎาคม",
	8=> "สิงหาคม",
	9=> "กันยายน",
	10=>"ตุลาคม",
	11=> "พฤศจิกายน",
	12=> "ธันวาคม"
);
	$day = array (
	1=>"จันทร์",
	2=>"อังคาร",
	3=>"พุธ",
	4=>"พฤหัสบดี",
	5=>"ศุกร์",
	6=>"เสาร์",
	7=>"อาทิตย์"	
);

function getThaiDate($time)
{
	global $month;
	global $day;
	reset($month);
	reset($day);

	if ($time <> "") {
		$time = strtotime($time);
		$yyyy=date("Y",$time)+543;
		$dd=date("j",$time);
		$mm=date("n",$time);
		$thaidate=$dd." ".$month[$mm]." ".$yyyy;
	}
	else {
		$thaidate = "";
	}
	return $thaidate;
}
function getThaiShortDate($time)
{
	global $month;
	global $day;
	reset($month);
	reset($day);

	if ($time <> "") {
		$time = strtotime($time);
		$yyyy=date("Y",$time)+543;
		$dd=date("j",$time);
		$mm=date("n",$time);
		$thaidate = $dd."/".$mm."/".$yyyy;
	}
	else {
		$thaidate = "";
	}
	return $thaidate;
}
function getThaiShortDate2($time)
{
	global $month;
	global $day;
	reset($month);
	reset($day);

	if ($time <> "") {
		$time = strtotime($time);
		$yyyy=date("Y",$time)+543;
		$dd=date("j",$time);
		$mm=date("n",$time);
		$yy = substr($yyyy,2,2);
		$thaidate = $dd."/".$mm."/".$yy;
	}
	else {
		$thaidate = "";
	}
	return $thaidate;
}

function getTime($time)
{
	return  date("H:i:s",$time);
}
function getThaiMonth($iMonth)
{
	global $month;
	reset($month);
	return  $month[$iMonth];
}
function getDBDate($time)
{
	if (($time == '0000-00-00 00:00:00') or ($time == "")) {
		return "";
	}
	list($dd, $mmmm, $yyyy) = split(' ', $time);
	global $month;
	reset($month);
	while (list ($key, $val) = each ($month)) {
		if ($val == $mmmm) {
			$mmmm = $key;
			break;
		}
	}
	$yyyy = $yyyy-543;
	$dbDate = $yyyy."-".$mmmm."-".$dd;
	return  $dbDate;
}

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
  switch ($theType) {
	case "text":
	  ereg_replace("'", "''", $theValue);
	  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	  break;    
	case "long":
	case "int":
echo $theValue;
	  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
	  break;
	case "boolean":
	  $theValue = ($theValue != "") ? "1" : "0";
	  break;
	case "double":
	  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
	  break;
	case "date":
	  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	  break;
	case "defined":
	  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
	  break;
  }
  return $theValue;
}

function getNavigator($sFile, $iCurrentPage, $iEndPage, $rCategory, $sParam = "")
{	
	$str = '<table border="0" cellspacing="0" cellpadding="0"><tr><td>';
	if($iCurrentPage > 1) {
		$iBack = $iCurrentPage-1;
		$str .=	'<a href="%s?rCategory='.$rCategory.'&page='.$iBack.$sParam.'" class="link">&lt;&lt; back</a>&nbsp;';
	}
	for($i=1; $i<$iCurrentPage; $i++) {
		$str .= '<a href="%s?rCategory='.$rCategory.'&page='.$i.$sParam.'" class="link">'.$i.'</a> | ';
	}
	$str .= ' <strong>'.$iCurrentPage.'</strong> ';
	for($i=$iCurrentPage+1; $i<=$iEndPage; $i++) {
		$str .= '| <a href="%s?rCategory='.$rCategory.'&page='.$i.$sParam.'" class="link"> '.$i.' </a>';
	}
	if($iCurrentPage < $iEndPage) {
		$iNext = $iCurrentPage+1;
		$str .= '&nbsp;<a href="%s?rCategory='.$rCategory.'&page='.$iNext.$sParam.'" class="link">next&gt;&gt;</a></td>';
	}
	$str .= '</td></tr></table>';
	$str = str_replace("%s", $sFile, $str);
	return $str;
}

function getTotal($tb, $fld, $id) {
	$str = "select count(*) from $tb where $fld = $id";
	$iCount = mysql_fetch_row(mysql_query($str));
	return $iCount[0];
}

function columnSort($sCaption, $sFieldName, $sSelectField, $sSortType, $sParam="") {
	$sHref = $PHP_SELF."?sf=$sFieldName";
	$sTitle = "";
	if ($sFieldName == $sSelectField) {
	    $sTitle = "<img src='/_admin/images/sort_".$sSortType.".gif' border=0 Align=absmiddle alt='Sort by ".$sCaption."'>";
		$sSortType = ($sSortType == 'asc') ? 'desc' : 'asc';
	}
	$sTitle .= "<a href='".$sHref."&st=".$sSortType.$sParam."'>".$sCaption."</a>";
	return $sTitle;
}

function getNavigator1($sFile, $iCurrentPage, $iEndPage,$id, $sParam = "")
{
	$id = "&ID=".$id ;
	$str = '<table border="0" cellspacing="0" cellpadding="0"><tr><td>';
	if($iCurrentPage > 1) {
		$iBack = $iCurrentPage-1;
		$str .=	'<a href="%s?page='.$iBack.$sParam.$id.'" class="link1">&lt;&lt; back</a>&nbsp;';
	}
	for($i=1; $i<$iCurrentPage; $i++) {
		$str .= '<a href="%s?page='.$i.$sParam.$id.'" class="link1">'.$i.'</a> | ';
	}
	$str .= ' <strong>'.$iCurrentPage.'</strong> ';
	for($i=$iCurrentPage+1; $i<=$iEndPage; $i++) {
		$str .= '| <a href="%s?page='.$i.$sParam.$id.'" class="link1"> '.$i.' </a>';
	}
	if($iCurrentPage < $iEndPage) {
		$iNext = $iCurrentPage+1;
		$str .= '&nbsp;<a href="%s?page='.$iNext.$sParam.$id.'" class="link1">next&gt;&gt;</a></td>';
	}
	$str .= '</td></tr></table>';
	$str = str_replace("%s", $sFile, $str);
	return $str;
}

function getNavigator2($sFile, $iCurrentPage, $iEndPage,$type, $sParam = "")
{
	$type = "&type=".$type ;
	$str = '<table border="0" cellspacing="0" cellpadding="0"><tr><td>';
	if($iCurrentPage > 1) {
		$iBack = $iCurrentPage-1;
		$str .=	'<a href="%s?page='.$iBack.$sParam.$type.'" class="link1">&lt;&lt; back</a>&nbsp;';
	}
	for($i=1; $i<$iCurrentPage; $i++) {
		$str .= '<a href="%s?page='.$i.$sParam.$type.'" class="link1">'.$i.'</a> | ';
	}
	$str .= ' <strong>'.$iCurrentPage.'</strong> ';
	for($i=$iCurrentPage+1; $i<=$iEndPage; $i++) {
		$str .= '| <a href="%s?page='.$i.$sParam.$type.'" class="link1"> '.$i.' </a>';
	}
	if($iCurrentPage < $iEndPage) {
		$iNext = $iCurrentPage+1;
		$str .= '&nbsp;<a href="%s?page='.$iNext.$sParam.$type.'" class="link1">next&gt;&gt;</a></td>';
	}
	$str .= '</td></tr></table>';
	$str = str_replace("%s", $sFile, $str);
	return $str;
}

function getNavigatorListbox($sFile, $iCurrentPage, $iEndPage, $sParam)
{
	echo "หน้าที่ ";
	$str = "<select name=\"page\" onchange=\"form.submit()\" style=\"width:40\">";
	//$str .= "<option>- กรุณาเลือกหน้า -</option>";
	for($i=1; $i<=$iEndPage; $i++) {
		if ($sParam==$i) $str .= "<option value=$i selected>".$i."</option>";
		else $str .= "<option value=$i>".$i."</option>";
	}
	$str .= "</select> จากทั้งหมด ".$iEndPage." หน้า";
	return $str;
}

function getComboDB($tb, $akeyfield, $aDisplayfield, $aSelected)
{	 
	 $sql = "select * from $tb order by ID";
	 //die ($sql);
	 $rs = mysql_query($sql);
	 while($row=mysql_fetch_array($rs)) { 
	  		if (trim($aSelected) == trim($row[$akeyfield]))
			 	  	$str = " selected";
			else
			 		$str = " ";	

			 $fncStr .= "<option value=\"".$row[ID]."\" ".$str." class=\"listtop\">".$row[$aDisplayfield]."</option>";
	  }
	  //die($fncstr);
	  return $fncStr;
}
function getDBvalue($tb, $ID, $selectfield)
{	 
	 $sql = "select $selectfield from $tb where ID = $ID";
	 //echo $sql;
	 $rs = mysql_query($sql);
	 $row = mysql_fetch_row($rs);
	 //die ($row[0]);
  	 return $row[0];
}

function ReqRoomname($roomID)
{	
	$sql = "select r_name from tbctroom where ID = $roomID";
	$row = mysql_fetch_row(mysql_query($sql));
	return $row[0];
}

function ReqQuestion($ID){
	$sql = "select q_question from tbquizgame where ID = $ID";
	$row = mysql_fetch_row(mysql_query($sql));
	return $row[0];
}
function ReqAnswer($ID, $Ans){
	$sql = "select $Ans from tbquizgame where ID = $ID";
	$row = mysql_fetch_row(mysql_query($sql));
	return $row[0];
}
function CheckQueswithAns($ID, $Ans){
	$sql = "select q_RAns from tbquizgame where ID = $ID";
	$row = mysql_fetch_row(mysql_query($sql));
	if ($row[0] == $Ans) return true;
	else return false ;
}

function RepGoodword($msg){
	$Goodword = array();
	$sql = "select badword from tbbadwords";
	$rs = mysql_query($sql);
	while ($row = mysql_fetch_array($rs)){
		$patern = "$row[0]";
		$Rpatern = "<img src=\"../images/censor_icon.gif\" alt=\"".substr($patern,0,2)."..\" border=\"0\">";
		//$Rpatern = "*";
		if (eregi($patern,$msg)) $msg = eregi_replace($patern,$Rpatern,$msg);
		array_push($Goodword, $msg);
	}
	foreach ($Goodword as $value) $Goodword2 = $value;
	return $Goodword2;
}
?>
