<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
			if(isset($_POST['add_cash'])){
				$c_room = $_POST['cash_room'];
				$c_amount = $_POST['cash_amount'];
				$sql = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$c_room', '$c_amount', 'Cash')";
				$result = mysql_query($sql,$conn);
				if($result == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_visa'])){
				$v_room = $_POST['visa_room'];
				$v_amount = $_POST['visa_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'Visa')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_mc'])){
				$mc_room = $_POST['mc_room'];
				$mc_amount = $_POST['mc_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$mc_room', '$mc_amount', 'Master Card')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_amex'])){
				$v_room = $_POST['amex_room'];
				$v_amount = $_POST['amex_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'American Express')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_disc'])){
				$v_room = $_POST['disc_room'];
				$v_amount = $_POST['disc_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'Discovery')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_expd'])){
				$v_room = $_POST['expd_room'];
				$v_amount = $_POST['expd_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'Expedia')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_cheque'])){
				$v_room = $_POST['ch_room'];
				$v_amount = $_POST['ch_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'Cheque')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
			else if(isset($_POST['add_other'])){
				$v_room = $_POST['oth_room'];
				$v_amount = $_POST['oth_amount'];
				$sql1 = "INSERT INTO shift_report (room_no, amount, type) VALUES ('$v_room', '$v_amount', 'Other')";
				$result1 = mysql_query($sql1,$conn);
				if($result1 == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='shift_report.php';</script>";	
					
			}
?>
