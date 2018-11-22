<?
include("initial/connect.php");
if (isset($TestuserName) && ($TestuserName !="")) {	 

$sqlB = "SELECT count( * ) cntMember  FROM memberprofile  WHERE mpUserName = '". strtoupper($TestuserName)."'"; 
//echo $sqlB;
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$cntMember=$rowB['cntMember'];
					}
		if ($cntMember>0){ ?>		
<script language="JavaScript" type="text/JavaScript">
		alert("User <?=$TestuserName ?> ถูกใช้แล้วค่ะ กรุณาเลือกใหม่นะคะ")
		window.location="register_check.php";
</script>
		<? }else{	?>
<script language="JavaScript" type="text/JavaScript">
		alert("ใช้ User นี้ได้ค่ะ")
		window.opener.form1.userName.value="<?=$TestuserName ?>";
		window.close();

</script>

<?} }else{ ?>


			<html >
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
			<style type="text/css">
<!--
body {

	background-image: url(images/BG_flower.gif);
}
a:link {
	color: #FFCC00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
.style3 {color: #FFFFFF}
.style12 {font-family: Tahoma; font-size: 11px; }
.style20 {font-family: Tahoma; font-size: 11px; color: #333333; }
.style28 {color: #333333; font-family: tahoma; font-size: 11px; }
.style29 {
	color: #FF0000;
	font-weight: bold;
}
.fp1_10 { color: #f301bb; font-size: 10pt; font-family: Tahoma; text-decoration: none ; FONT-WEIGHT: BOLD; }
.m8 { color: #000000; font-size: 8pt; font-family: Tahoma; text-decoration: none }
-->
</style>
			<title>ระบุ User Name ที่ต้องการ</title>
			</head>
			
			<body class="m8">
			<form method="post" name="form1" action="register_check.php">
				ระบุ User Name ที่ต้องการ<input name="TestuserName" type="text"  /> 
				<input name="btCheck"   type="submit" value="Ok"  />
				</form>
			</body>
			</html>
<? } ?>

