<?
session_start();
include("../../initial/connect.php");
?>
<?
				//	$sql_insert="Insert Into  admin (aNickname,  aName, aSirname, aUsername, aPassword,  adminID)Values('ਹ','ਹ', '��⹷��', 'jane', 'j1234', 6)";
					//$sql_insert="Insert Into  admin (aNickname,  aName, aSirname, aUsername, aPassword,  adminID)Values('art','����ط�', '�ع���֡', 'art', 'a1234', 7)";
					//$sql_insert="Insert Into  admin (aNickname,  aName, aSirname, aUsername, aPassword,  adminID)Values('����','������', ' ���ͧ�ء��', 'golf', 'g1234', 8)";
					echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){
							}else{
									echo "Unsuccess : ".mysql_error();
							}

//$stmt_system=mysql_query("select aNickname, aName, aSirname from admin  where adminID='$adminID' ") or die("Query failed login");
$stmt_system=mysql_query("select  max(adminID) as adminID   from admin   ") or die("Query failed login");
while($row = mysql_fetch_array($stmt_system)){
	$login_desc=$row["adminID"];
	//$aName=$row["aName"];
	//$aSirname=$row["aSirname"];
	echo $login_desc;
}

?>