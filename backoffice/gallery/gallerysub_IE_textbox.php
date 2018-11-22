<?
session_start();
include("../connect/connect_oci.php");

$sql_edit = "select GALLERYSUB_DESC from GALLERY_SUBJECT  where GALLERYSUB_ID='$gallerysub_id' ";
$stmt_edit = mysql_query($sql_edit) or die ("Invalid query : " . mysql_error());
$gallerysub_desc = mysql_result($stmt_edit, 0,"GALLERYSUB_DESC");
?>
<html>
<head>

</head>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?print$gallerysub_desc?>
</body>
</html>