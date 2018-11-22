<?	
			function getLastID($tTable,$tField,$tLen)
			{
					$numberDigit = $tLen;
					
					$sql = "Select max(".$tField.") From ".$tTable."";
					//echo $sql;
					$result = mysql_query($sql) or die("Query failed Get ID");
					$rec = mysql_fetch_row($result);
					$data = $rec[0];
					mysql_free_result($result);
					
					if(strlen($data) == '0')
					{
							$curCountIndex = 0;
					} 
					else {
							$curCountIndex = (int)$data;
					}		
					
					$newCountIndex =  $curCountIndex + 1;
					$data = $newCountIndex;
					return $data;
			}
?>