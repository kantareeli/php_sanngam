<?
session_start();
include("../../initial/connect.php");
?>
<form action="profile_main.php" name="frmmain">


<?

	 $uploaddir = "../../images/profile/";

	$dsql = "select  mpPicture  from memberprofile  where mpID = '$gaID' ";
	$dstmt = mysql_query($dsql) or die("Query failed sqlpicture    : ".mysql_error());
	while ($row = mysql_fetch_array($dstmt)) {

		$gpFileName= $row[0];

		unlink($uploaddir.$gpFileName);
			$sql = "DELETE  from memberprofile  where mpID = '$gaID' ";
			//echo $sql;
			$stmt =   mysql_query($sql);
			$s =mktime();
	}


?>



</form>
<script language = "javascript">
	frmmain.submit();
</script>