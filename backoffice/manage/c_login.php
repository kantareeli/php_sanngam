<?session_start();
include("../../initial/connect.php");

$countis=0;
	$sqlpicture = "select adminID  from admin where  aUsername = '$a_username'  and aPassword = '$a_password' ";
//	echo $sqlpicture;
	$rs = mysql_query($sqlpicture) or die("Query failed sqlpicture    : ".mysql_error());
	while($row=mysql_fetch_array($rs)) { 
		$thisadminID=$row[adminID];
		$countis++;
	}
//echo $countis;
if($countis>0){
	$adminID= $thisadminID; 
	session_register("adminID");
		//$adminID = $thisadminID; 
		 //$_SESSION['adminID'] = $thisadminID; 
		 //echo $_SESSION['adminID'] ;
?>
	<SCRIPT LANGUAGE="JavaScript">
		window.location="../home.php";
	</SCRIPT>
<?}else{?>
		<SCRIPT LANGUAGE="JavaScript">
		alert ("User และ Password ไม่ถูกต้อง");
		window.location="../index.php";
	</SCRIPT>
<?}?>



