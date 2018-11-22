<?
session_start();
include("connect_oci.php");
?>
<?
$stmt_edit=ociparse($conn,"select to_char(a.update_date,'ddmmyyyyHH:MI:SS') as udate,a.* from news a  where a.news_id='$news_id' ");
ociexecute($stmt_edit,OCI_DEFAULT);
ocifetch($stmt_edit);
		$news_desc=stripslashes(ociresult($stmt_edit,"NEWS_DESC"));
?>
<html>
<head>

</head>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?print$news_desc?>
</body>
</html>