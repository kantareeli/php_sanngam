<?
session_start();
include("../../initial/connect.php");
?>
<form action="main.php" name="frmmain">


<?


			$sql = "DELETE  from wb_topic  where tpID = '$gaID' ";
			//echo $sql;
			$stmt =   mysql_query($sql);
			$s =mktime();

			$sql2 = "DELETE  from wb_reply  where rpID = '$gaID' ";
			//echo $sql;
			$stmt2 =   mysql_query($sql2);
			$s2 =mktime();

?>



</form>
<script language = "javascript">
	frmmain.submit();
</script>