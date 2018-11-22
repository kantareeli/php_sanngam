	<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<?
// session_start();
if (isset($_SESSION['memberUser']) && ($_SESSION['memberUser'] <> "")){
$UserAccessID= $_SESSION['memberUser']; 
}else{
$UserAccessID= "-";
}
//session_register("UserAccessID");
$TabName = "Main";
/* CREATE TABLE tbl_accesslog(
aDate datetime default NULL ,
aUser varchar( 200 ) CHARACTER SET tis620,
aReferer text CHARACTER SET tis620,
aUserAgent varchar( 200 ) CHARACTER SET tis620,
aUserHostAddress varchar( 100 ) CHARACTER SET tis620,
aTabName varchar( 200 ) CHARACTER SET tis620,
aDesc text CHARACTER SET tis620
);
 */
 
	$daynow=date("Y-m-d H:m:s");
	$sql_insert="Insert Into  tbl_accesslog (aDate,  aUser, aReferer, aUserAgent, aUserHostAddress,aTabName,aDesc)Values('$daynow', '$UserAccessID', '$HTTP_REFERER', '$HTTP_USER_AGENT', '$REMOTE_ADDR','$REQUEST_URI','-')";
	//echo  $sql_insert;
	$resultinsert = mysql_db_query($database,$sql_insert) or die("Query failed on  AccessLog    : ".mysql_error());

	



		//$adminID = $thisadminID; 
		 //$_SESSION['adminID'] = $thisadminID; 
		 //echo $_SESSION['adminID'] ;
?>




