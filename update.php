<?php
// including the database connection file
include("database.php");
//getting id from url
$id = $_GET['uid'];
//selecting data associated with this particular id
$result = mysqli_query($con, "select * from mst_user where login='$id'");
$res = mysqli_fetch_array($result);
$name = $res['username'];
$email = $res['email'];
$phone = $res['phone'];
$add = $res['address'];
$city = $res['city'];
?>
<?php
include("header.php");
?>
<html>
<head>	
	<title>Update Profile</title>
	<link rel="stylesheet" href="css_/update.css">
	<link rel="stylesheet" href="css_/footer.css">
</head>

<body>
	<div><strong><a href="index.php" ><h1 align="center">Home</h1></a></strong></div>
	<br><br>
	
	<form name="form1" method="post" action="updating.php">
		<table border="0">
			<tr>
				<td>Username</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
		<tr> 
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email;?>"></td>
			</tr>
            <tr> 
				<td>Phone No</td>
				<td><input type="phone" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
            <tr> 
				<td>Address</td>
				<td><input type="text" name="add" value="<?php echo $add;?>"></td>
			</tr>
            <tr> 
				<td>City</td>
				<td><input type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['uid'];?>></td>
				<td><input type="submit" name="update" value="Update" class="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
include("footer.php");
?>