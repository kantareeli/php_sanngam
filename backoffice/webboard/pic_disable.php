<?
session_start();
include("../../initial/connect.php");
?>
<BODY topmargin="0" leftmargin="0" bgcolor="#F6FBFE">
<BR><BR><BR><BR><BR>
<CENTER>���ѧ Update �ҹ������ ��س����ѡ����</CENTER>
<FORM action="main.php" method=post  name= 'frmmain' id='frmmain' enctype="multipart/form-data">
<?
  if  ($tppic == 1){
    echo $gaID." : ".$value;
	$sql = "UPDATE wb_topic  SET tpFilepic= null  where tpID = '$gaID'";
	echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();
} else {
    echo $gaID." : ".$value;
	$sql = "UPDATE wb_reply  SET rpFilepic= null  where rpID = '$gaID'";
	echo $sql;
	$stmt =  mysql_query($sql) or die ("Invalid query : " . mysql_error());
	$s =mktime();

}	
?>



</form>
<BODY>
<script language = "javascript">
	frmmain.submit();		
</script>
