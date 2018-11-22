<?		
			if(isset($_POST['txtMode']))
			{								    
					if($_POST['txtMode'] == 'add_member'){
									require_once("../initial/function.bas.php"); 	
									include("../initial/connect.php");

									$filetmp1 = $_FILES['imgfile']['tmp_name'];
									$filesize1 = filesize($filetmp1);

									//echo $filetmp1;
									if (substr($_FILES['imgfile']['type'], 0, 5)  != "image") {
											echo "<script language = 'javascript'>alert('ไฟล์ต้องเป็นรูปภาพ')</script>";
											echo "<script language = 'javascript'>history.back();</script>";
									}
									else
									{
										$filename1 = $_FILES['imgfile']['name'];										
										$filetype1 = $_FILES['imgfile']['type'];					
										copy($filetmp1, "../images/profile/".$filename1);
									}



						 $t_name = $_POST['mpName'];
						 $t_surname = $_POST['mpSirname'];						
						 $t_nickname = $_POST['mpNick'];
						 $t_nodesk = $_POST['mpNodesk'];
						 $t_mobile = $_POST['mpNomobile'];
						 $t_email = $_POST['mpEmail'];
						 $t_height = $_POST['mpHeight'];
						 $t_weight = $_POST['mpWeight'];
						 $t_work = $_POST['mpWork'];
						 $t_education = $_POST['mpEdu'];
						 $t_bashistory = $_POST['mpBashistory'];
						 $t_hurnour = $_POST['mpHornour'];
						 $t_position = $_POST['mpBasposition'];
						 $t_athlete = $_POST['mpAthlete'];
						 $t_shoes = $_POST['mpShoes'];
						 $t_shirtno = $_POST['mpShirtsizeNo'];
					      
						 $t_order = getLastID('memberprofile','mporderdisplay','10'); 		
							
						$strIns = "insert into memberprofile(mpName,mpSirname,mpNick,mpNodesk,mpNomobile,mpEmail,mpEdu,mpProvince,mpBashistory,mpHornour,mpBasposition,mpAthlete,mpShoes,mpShirtsizeNo,mpPicture,mporderdisplay,mpHeight,mpWeight,mpWork)  ";
						$strIns .=  "  values('$t_name','$t_surname','$t_nickname','$t_nodesk','$t_mobile','$t_email','$t_education','$t_province','$t_bashistory', '$t_hurnour','$t_position','$t_athlete','$t_shoes','$t_shirtno','$filename1','$t_order','$t_height','$t_weight','$t_work') "; 

					//	echo $strIns;

							$result = mysql_query($strIns) or die("Query failed Insert");
							if ($result) {
									$status = true;
									echo "<script language = 'javascript'>alert('Register Successful');</script>";
									echo "<script language=\"JavaScript\">window.location='../profile.php';</script>";
							} else {
									$status = false;								
									echo "<script language = 'javascript'>alert('Register Failed Try Again');</script>";
									echo "<script language=\"JavaScript\">window.location='../member_add.php';</script>";
							}								
					}
					 mysql_free_result($result);			
			}
?>
