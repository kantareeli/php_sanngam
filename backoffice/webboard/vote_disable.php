<?
session_start();
include("../../initial/connect.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<BR><BR><BR><BR><BR>
<CENTER>���ѧ Update �ҹ������ ��س����ѡ����</CENTER>
<FORM action="main.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
echo $gaID." : ".$value;
	$sql = "UPDATE wb_topic  SET Enable='$value' where tpID = '$gaID'";
	echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();
?>



</form>
<BODY>
<script language = "javascript">
	frmmain.submit();		
</script>
