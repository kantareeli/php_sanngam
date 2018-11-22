<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<?
					include("initial/connect.php");
				
				/*		$sqlB = "select  max(mporderdisplay) AS MAXgaOrder    from memberprofile"; 
					$stmtB = mysql_query($sqlB ) or die ("Invalid query sql : " . mysql_error());
					while($rowB = mysql_fetch_array($stmtB)){
						$MAXgaOrder=$rowB['MAXgaOrder'];
					}
					$MAXgaOrder++;
					
					$daynow=date("Y-m-d");
					
				mpID, mpName, mpSirname, mpNick, mpPhone,  mpEmail,  mpUserName, mpPassword, mpSex, mpNation, mpAddress, mpAddrSec1, mpAddrSec2, mpProvince, mpZipCode, mpBirth
				
				userName
pass
TittleCode
FthaiName
LthaiName
dd dm dy
mpEmail
Moo
Provice
Amphur
Tumbon
zipcode
Phone
					
					*/
					
		
					$bDate = $dy."-".$dm."-".$dd;
					$daynow = date("Y-m-d H:m:s");
					
					$userName = strtoupper($userName);
					$pass = strtoupper($pass); 
					$sql_insert="Insert Into  memberprofile (mpName, mpSirname, mpPhone,  mpEmail,  mpUserName, mpPassword, mpSex,  mpAddress, mpAddrSec1, mpAddrSec2, mpProvince,mpZipCode ,mpBirth,regisDate  )Values('$FthaiName', '$LthaiName', '$Phone', '$mpEmail', '$userName', '$pass', '$TittleCode', '$Moo', '$Amphur', '$Tumbon', '$Provice','$zipcode', '$bDate','$daynow')";
				//	echo  $sql_insert;
					$result = mysql_db_query($database,$sql_insert);
							if ($result){ ?>
							<script language="JavaScript" type="text/JavaScript">
		alert("ลงทะเบียนเรียบร้อย กลับไปใช้งานหน้าหลัก")
		window.location="index2.php";
</script>
							<?
							        
							}else{
									echo "Unsuccess : ".mysql_error();
							}
				
	
		?>
