 <?php 
	$conn=mysql_connect('localhost','root','') or die(mysql_errno());
	$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
						$c_id = $_POST['id'];
						$fn = $_POST['fname'] ;
						$ln = $_POST['lname'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
					
						$sql = "UPDATE login SET first_name ='".$fn."', last_name = '".$ln."' , email_id = '".$email."', ph_no = '".$phone."'WHERE id = '$c_id'";	
						$result = mysql_query($sql,$conn);		
				if($result == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='add_info.php';</script>";
					
				?>