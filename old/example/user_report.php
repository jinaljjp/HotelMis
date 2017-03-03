<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('example',$conn) or die('Database doesnot exist');
		if(isset($_POST['submit'])){
						
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$add = $_POST['add'];
						$ph_no = $_POST['ph_no'];
						$query = "INSERT INTO user_info (first_name, last_name, address, ph_no) values ('$fname','$lname','$add','$ph_no') ";
										$res = mysql_query($query,$conn);
		}
	?>
<body>
<div align="center">
<h2>User Info</h2>
<form method="post" enctype="multipart/form-data" action="" >
<table  border="0">
  <tbody>
    <tr>
      <td>First Name:</td>
      <td><input type="text" name="fname"/></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><input type="text" name="lname"/></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><input type="text" name="add"/></td>
    </tr>
    <tr>
      <td>Phone No:</td>
      <td><input type="text" name="ph_no"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="submit"/></td>
      <td><a href="report_ex.php"/>Generate Report</td>
    </tr>
  </tbody>
</table>

</form>
</div>
</body>
</html>