<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
if(isset($_POST['user_submit'])){
	$cat = $_POST['cat'];
	$fname = $_POST['fname1'];
	$lname = $_POST['lname1'];
	$username = $_POST['username'];
	$email = $_POST['e_id1'];
	$pass = $_POST['pass1'];
	$ph_no = $_POST['ph_no1'];
	$sql="SELECT user_id FROM login WHERE designation ='". $cat. "'" ;
	$result=mysql_query($sql);
	$count = mysql_num_rows($result);
		//echo $count;
	$sql1="SELECT Username FROM login " ;
	$result1=mysql_query($sql1);
	$count1 = mysql_num_rows($result1);
	/*while($user_row= mysql_fetch_array($result1)){
		$user = $user_row['Username'];
			if($user == $username){
				echo "<script language='javascript' type='text/javascript'>alert('Username is already exist');</script>";
			}
			
	}*/
		$i =0;
		$u_id =  array();
	while($i<$count){
			$row= mysql_fetch_array($result);
			$u_id[] = $row['user_id'];
			//echo $u_id[$i]."<br/>";
			$i++;
			
	}
			
			$l=0; 
			for($i = 0; $i<= $count; $i++){
				$user_id = $cat."_".$i;
				$k = 0;
				for($j =0; $j < $count; $j++){
					if($u_id[$j] == $user_id){
						$k++;
						
						}
				}
				if($k == 0){
					$new_id = $user_id;
					//echo $new_id;
					$query = "INSERT INTO login (user_id, first_name, last_name, Username, password, email_id, ph_no, designation) values ('$new_id','$fname','$lname','$username','$pass','$email','$ph_no', '$cat') ";
					$res = mysql_query($query,$conn);
					break;
				}
			}
				 	
			
	
}
?>

</head>

<body>
<div style="width:90%">
<div>
<h2 style="margin-left:37%; border:none">New User</h2>
             <form method="post" id="user_form" name="user_form" >
                 <p style="width:70%; margin-left:37%"> 
                 <strong>Category: </strong><br/>
                 <select style="width:31%" name="cat" id="cat">
                 <option value="">Select Category</option>
                 <option name='desk_clerk' value='Desk Clerk'>Desk Clerk</option>
                 <option name='maintenance' value='Maintenance'>Maintenance</option>
                 <option name='maid' value='maid'>Maid</option>
                 </select>
                 <br/>
                  
                 <strong>First Name:</strong><br/><input type="text" style="width:30%"  value="" name="fname1" id="lname1" ><br/>
                  <strong>LastName:</strong><br/><input type="text" style="width:30%"  value="" name="lname1" id="lname1" ><br/>
                   <strong>Username:</strong><br/><input type="text" style="width:30%"  value="" name="username" id="username" ><br/>
                   <strong>Password:</strong><br/><input type="password"  style="width:30%"   value="" name="pass1" id="pass1"><br/>
                     <strong>Email Id:</strong><br/><input type="email"  style="width:30%"   value="" name="e_id1" id="e_id1"><br/>
                  <strong>Phone No:</strong><br/><input type="tel" style="width:30% " value="" name="ph_no1" id="ph_no1"><br/>
                  <input type="submit" id="user_submit" name="user_submit" style="margin-top:10px;margin-left:65px" value = "Submit" />
                  </p>
                  </form>
                </div>
                <div>
                 <div style="float:left; width:30%">
                 <h2 style="margin-left:20%">Maid</h2>
							 <?php
                       
                        $sql2="SELECT * FROM login WHERE designation = 'maid'";
                        $result2 = mysql_query($sql2,$conn);
                        echo '<table width="60%" style="margin-left:15%">
                        <tr>
                                   
                                     <td><b>User Id</b></td>
                                     <td><b>First Name</b></td>
                                     <td ><b>Last Name</b></td>
                                    <td><b></b></td>
                                    <td ><b></b></td>
                        </tr>';
                        while($row1=mysql_fetch_array($result2)){
                        $kd=$row1['ID'];
						$user_id1= $row1['user_id'];
                        $first_name=$row1["first_name"];
                        $last_name=$row1["last_name"];
                        ?>
                        
                        
                        <tr>
                       
                                    
                                     <td><?php echo $user_id1; ?></td>
                                     <td ><?php echo  $first_name; ?></td>
                                     <td><?php echo $last_name; ?></td>
                                     <td ><a href="edit_user.php?id=<?php echo $kd; ?>" style="color:#000000">Edit</a></td>
                                    <td ><a href="delete_user.php?id=<?php echo $kd; ?>"  style="color:#000000">Delete</a></td>
              </tr>
                            
                        <?php
                        }
                        ?>
                            
             
                            </table>
                 </div>
                 <div >
                  <h2 style=" width:30%">Desk Clerk</h2>
							 <?php
                       
                        $sql2="SELECT * FROM login WHERE designation = 'Desk Clerk'";
                        $result2 = mysql_query($sql2,$conn);
                        echo '<table width="60%" style="margin-left:15%">
                        <tr>
                                   
                                     <td><b>User Id</b></td>
                                     <td><b>First Name</b></td>
                                     <td ><b>Last Name</b></td>
                                    <td><b></b></td>
                                    <td ><b></b></td>
                        </tr>';
                        while($row1=mysql_fetch_array($result2)){
                        $kd=$row1['ID'];
						$user_id1= $row1['user_id'];
                        $first_name=$row1["first_name"];
                        $last_name=$row1["last_name"];
                        ?>
                        
                        
                        <tr>
                       
                                    
                                     <td><?php echo $user_id1; ?></td>
                                     <td ><?php echo  $first_name; ?></td>
                                     <td><?php echo $last_name; ?></td>
                                     <td ><a href="edit_user.php?id=<?php echo $kd; ?>" style="color:#000000">Edit</a></td>
                                    <td ><a href="delete_user.php?id=<?php echo $kd; ?>"  style="color:#000000">Delete</a></td>
              </tr>
                            
                        <?php
                        }
                        ?>
                            
             
                            </table>
                  
                 </div>
                  <div>
                   <h2 style=" width:30%">Maintenance</h2>
							 <?php
                       
                        $sql2="SELECT * FROM login WHERE designation = 'Maintenance'";
                        $result2 = mysql_query($sql2,$conn);
                        echo '<table width="60%" style="margin-left:15%">
                        <tr>
                                   
                                     <td><b>User Id</b></td>
                                     <td><b>First Name</b></td>
                                     <td ><b>Last Name</b></td>
                                    <td><b></b></td>
                                    <td ><b></b></td>
                        </tr>';
                        while($row1=mysql_fetch_array($result2)){
                        $kd=$row1['ID'];
						$user_id1= $row1['user_id'];
                        $first_name=$row1["first_name"];
                        $last_name=$row1["last_name"];
                        ?>
                        
                        
                        <tr>
                       
                                    
                                     <td><?php echo $user_id1; ?></td>
                                     <td ><?php echo  $first_name; ?></td>
                                     <td><?php echo $last_name; ?></td>
                                     <td ><a href="edit_user.php?id=<?php echo $kd; ?>" style="color:#000000">Edit</a></td>
                                    <td ><a href="delete_user.php?id=<?php echo $kd; ?>"  style="color:#000000">Delete</a></td>
              </tr>
                            
                        <?php
                        }
                        ?>
                            
             
                            </table>
                 </div>
                </div> 
    </div> 
</body>
</html>