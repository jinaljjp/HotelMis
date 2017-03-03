 <?php 
	$conn=mysql_connect('localhost','root','') or die(mysql_errno());
	$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
						$c_id = $_POST['c_id'];
						$fn = $_POST['firstname'] ;
						$ln = $_POST['lastname'];
						$email = $_POST['email_id'];
						$phone = $_POST['phone_no'];
					
						$sql = "UPDATE login SET first_name ='".$fn."', last_name = '".$ln."' , email_id = '".$email."', ph_no = '".$phone."'WHERE ID = '$c_id'";
						$result = mysql_query($sql,$conn);		
				if($result == 1)
				echo "<script language='javascript' type='text/javascript'>document.location.href='add_info.php';</script>";
					
				?>