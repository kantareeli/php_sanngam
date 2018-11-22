<?session_start();
if (!isset($adminID)){?>
	<script language = "javascript">
		window.location="../index.php";
	</script>
<?}
	
include("../../initial/connect.php");
?>
<html>

<head>
<LINK href="../N_calendar/calendar-blue.css" type=text/css rel=stylesheet>
<title></title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<style>
td, input, textarea, select, font {font-family: ms sans serif; font-size:7pt;}
input, select, textarea {color:#29672B;}
input, textarea {border-color:#000000; border-width: 1px;}
.ibutton {background-color:#ccccff;border-color:#eeeeee #9999ff;}
select.country {font-size:7pt; border-style: none;}
a {color: #05588A;}
a:hover {color: #4F3EA4;}
</style>

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!--Top Table----------------------------------------------------------------------------------------------------------------------------------------------->			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" height="15">
				<tr>
					<td bgcolor="#F6FBFE" valign="top">
<!--Menu Table--------------------------------------------------------------------------------------------------------------------------------------------->		
						<iframe  src = "../manage/frame_system.php"  width = "100%"  height ="15" frameborder="0" scrolling="NO" ></iframe>
<!--End Menu Table------------------------------------------------------------------------------------------------------------------------------------------->		
					</td>
				</tr>
			</table>
<!--End Top Table---------------------------------------------------------------------------------------------------------------------------------------------->


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr> 
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 

          <td width="1" bgcolor="#D5C598"><img src="/_admin/images/clear.gif" width="1" height="1"></td>
          <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50">&nbsp;</td>
                <td height="280" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td><!-- InstanceBeginEditable name="topic" -->
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr> 
                            <td>&nbsp;</td>
                          </tr>
                          <tr> 
                            <td class="hp">Edit Vote</td>
                          </tr>
                        </table>
                        <!-- InstanceEndEditable --></td>
                    </tr>
                    <tr> 
                      <td><br> <!-- InstanceBeginEditable name="detial" -->
<?

if ($_REQUEST["doUpdate"] ) {
 
	 		if ($_REQUEST['submit'] == "Update") {
						$strsql = "update volunteer set tittle = '".$_REQUEST["txt_subject"]."'  ";
						$strsql = $strsql . ",  sdate = '".$_REQUEST["datedataf"]."' ";
						$strsql = $strsql . ",   v1= '".$_REQUEST["txt_team1"]."' ";
						$strsql = $strsql . ",   v2= '".$_REQUEST["txt_team2"]."' ";
						$strsql = $strsql . ",   stime= '".$_REQUEST["txt_time"]."' ";
						$strsql = $strsql . ",   v1score= '".$_REQUEST["txt_team1score"]."' ";
						$strsql = $strsql . ",  v2score = '".$_REQUEST["txt_team2score"]."' ";
						$strsql = $strsql . ",  sdesc = '".$_REQUEST["txt_desc"]."' ";
						$strsql = $strsql . " where ID = ".$_REQUEST['ID'];
						//die ($strsql);
				
						mysql_query($strsql)  or die("Query failed sql : ".$strsq. "  : ".mysql_error());
					?> <script language="JavaScript">window.location = "main.php";</script> <?	
 			} elseif ($_REQUEST['submit'] == "Add") {
						$strsql = "insert into  volunteer (tittle  ";
						$strsql = $strsql . "  ,  sdate ,   v1,   v2,   stime,   v1score,  v2score,  sdesc";
						$strsql = $strsql ." ) value ( '".$_REQUEST["txt_subject"]."'  ";
						$strsql = $strsql . "  ,   '".$_REQUEST["datedataf"]."' , '".$_REQUEST["txt_team1"]."' , '".$_REQUEST["txt_team2"]."' ,  '".$_REQUEST["txt_time"]."' ,   '".$_REQUEST["txt_team1score"]."' ,   '".$_REQUEST["txt_team2score"]."' ,   '".$_REQUEST["txt_desc"]."' ";
						$strsql = $strsql ." ) ";
									
						
						//die ($strsql);
						echo $strsql;
						mysql_query($strsql)  or die("Query failed sql : ".$strsq. "  : ".mysql_error());
					?> <script language="JavaScript">window.location = "main.php";</script> <?	
			}
	 }else{ 
			if (isset($mode) and $mode="add"){
				$row = array();
			}else{
				$str = "select  *  from volunteer where ID = ".$_REQUEST['ID'];
				$rs = mysql_query($str);
				$row = mysql_fetch_array($rs) or die(C_CANNOTCONNECTDB);
			}
?>
                        <script language="JavaScript">
				function checkpro()
				{
						if (pro.txt_subject.value == "")
							    {
								alert("ADD YOUR SUBJECT PLEASE !!")
								pro.txt_subject.focus();
								return false;
								}

				} 
			</script>
					<form name="pro"  enctype="multipart/form-data"  method="post"   onSubmit="return checkpro()">
                          <table width="551" border="0" align="center" cellpadding="1" cellspacing="2">
                            <tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right>
							  <font color="#FF0000">*</font>Subject</td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							  <input name="txt_subject" type="text" size="45" value="<?=$row[tittle] ?>"></td>
                              <input type="hidden" name="new" value="1">
							  <input type="hidden" name="doUpdate" value="1">
                            </tr>
							
                            <tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right>
							  <font color="#FF0000">*</font>  <LABEL for=datedataf> Date:</LABEL></td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							  <SCRIPT src="../N_calendar/calendar.js"  type=text/javascript></SCRIPT>
							<SCRIPT src="../N_calendar/calendar-en.js" type=text/javascript></SCRIPT>
							<SCRIPT src="../N_calendar/calendar-setup.js" type=text/javascript></SCRIPT>
	  						<INPUT class=formfieldsm id=datedataf  readOnly name=datedataf  value="<?=$row[sdate] ?>"> 
	  						<IMG id=trigger_f style="CURSOR: pointer" height=15 alt="Pop up a calendar to select a date"       src="../N_calendar/cal.gif" width=16 border=0>
	  <!-- Popup Calendar -->
      <SCRIPT type=text/javascript>
        	Calendar.setup(
        		{
        			inputField	: "datedataf",
        //			ifFormat		: "%d-%m-%Y",
					ifFormat		: "%Y-%m-%d",
        			button			: "trigger_f"
        		}
        	);
        </SCRIPT>

					<br>	เวลา <input name="txt_time" type="text" size="15" value="<?=$row[stime] ?>" >
							  </td>

                            </tr>
						<tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right>
							  <font color="#FF0000">*</font>ระหว่าง</td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							 ทีม 1 <input name="txt_team1" type="text" size="15" value="<? if ($row[v1]<> ""){ print  $row[v1];} else { print "True";}?>" >
							  และ  ทีม 2 <input name="txt_team2" type="text" size="15" value="<?=$row[v2]?>" ></td>

                            </tr>
						<tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right>
							  <font color="#FF0000">&nbsp;</font>แข่งเสร็จแล้วจดแต้มมาใส่ด้วยน้า </td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							 ทีม 1 <input name="txt_team1score" type="text" size="15" value="<?=$row[v1score] ?>" >
							  และ  ทีม 2  <input name="txt_team2score" type="text" size="15" value="<?=$row[v2score]?>" ></td>

                            </tr>						
                            <tr> 
                              <td align="right" valign="top" class="LabelB">
							  <font color="#FF0000">&nbsp;</font>Sign</td>
                              <td valign="top"  class="LabelB"><div align="center">:</div></td>
                              <td align="left" valign="middle" class="LabelB">
					<?if (isset($mode) and $mode="add"){}else{?>								
									<?
										$strS = "select  *  from  volunteer_name where  vo_ID=". $_REQUEST['ID'];
										$rsS = mysql_query($strS);
											while($rowS=mysql_fetch_array($rsS)) 
											{?>				
												<? echo $rowS[name] ;?><BR>
											<?}						 
									?>
                        <? } ?>
                              </td>

                            </tr>

						<tr> 
                              <td width="126" height="40 align=" align="right"" valign="middle" class="LabelB"right>
							  <font color="#FF0000">&nbsp;</font>หมายเหตุ </td>
                              <td width="10" align="center" valign="middle" class="LabelB">:</td>
                              <td width="403" align="left" valign="middle" class="LabelB">
							  <input name="txt_desc" type="text" size="15" value="<?=$row[sdesc]?>" ></td>

                            </tr>

                            <tr> 
                              <td align="right" class="LabelB">&nbsp;</td>
                              <td width="10" align="center" class="LabelB">&nbsp;</td>
                              <td>
								<?if (isset($mode) and $mode="add"){?>
								<input name="submit" type="submit" class="input" value="Add"> 
								<?}else{?>
								<input name="submit" type="submit" class="input" value="Update"> 
								<?}?>
                                &nbsp;&nbsp; &nbsp; 
								<input name="Reset2" type="reset" class="input" value="Reset"> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
							</td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                          </form>
                        <? } ?>
                        <!-- InstanceEndEditable --> 
                      </td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>

  </tr>
</table>
</body>
</html>
