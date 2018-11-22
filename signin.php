<? session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<?
include("initial/connect.php");
?>
<?
					$login = strtoupper($login);
					$pass = strtoupper($pass); 
					
$queryCount = "select  count(*)  as cc  from   memberprofile  where   mpUserName = '$login'  and  mpPassword = '$pass' ";
$stmt = mysql_query($queryCount) or die("Query failed sqlclinicTop    : ".mysql_error());
while ($row = mysql_fetch_array($stmt)) {
	$cc =$row[cc] ;
}


//echo "Test Result=".$cc;
if ( $cc == "1"){
	$_SESSION['memberUser'] =  $login ;
}else{ 
	$_SESSION['memberUser'] =  '' ;
?>

<?
}
?>
<script>
	window.location= "index2.php"
</script>