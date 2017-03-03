<?php 
session_start();
$u_id = $_SESSION['user_id'];
	$conn=mysql_connect('localhost','root','') or die(mysql_errno());
	$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
					
							$cash = $_POST['cash'];
							$ame_ex = $_POST['ame_ex'];
							$disc = $_POST['disc'];
							$visa = $_POST['visa'];
							$masters= $_POST['masters'];
							$cheque = $_POST['cheque'];
							$expedia = $_POST['expedia'];
							$other = $_POST['other'];
							//$note = $_POST['note'];
							
								$sql="UPDATE  payment  SET cash ='$cash', ame_ex = '$ame_ex', discovery = '$disc', visa = '$visa', master = '$masters', cheque = '$cheque', expedia = '$expedia', other = '$other', date = NOW(), time = NOW(), user_id = '".$u_id."' WHERE id = 2";
								$result=mysql_query($sql,$conn);
							
							
								
									 $select = "SELECT * FROM payment WHERE id = 2";
									 $result1 = mysql_query($select,$conn);
									 $row = mysql_fetch_array($result1);
									 $cash1 = $row["cash"];
									 $ame_ex1 = $row["ame_ex"];
									 $disc1= $row["discovery"];
									 $visa1 = $row["visa"];
									 $master1 = $row["master"];
									 $cheque1 = $row["cheque"];
									 $expedia1 = $row["expedia"];
									 $other1 = $row["other"];
									 $total = $cash1  + $ame_ex1 + $disc1 + $visa1 + $master1 + $cheque1 + $expedia1 + $other1;			
									 $sql1 = "UPDATE  payment  SET total ='$total' WHERE id = 2";
									 $result1 =  mysql_query($sql1,$conn);
							
						
							if($result!=1){
							echo "payment not recorded";
							}