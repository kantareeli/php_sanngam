<?
session_start();
include("../../initial/connect.php");
?>
<form action="main.php" name="frmmain">


<?


			$sql = "DELETE  from tbvote  where ID = '$gaID' ";
			//echo $sql;
			$stmt =   mysql_query($sql);
			$s =mktime();



?>



</form>
<script language = "javascript">
	frmmain.submit();
</script>