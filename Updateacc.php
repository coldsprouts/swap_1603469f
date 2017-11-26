<?php
	$con = mysqli_connect("localhost","root","","swap"); //connect to database
	if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
	}
	$uid = $_GET['id'];
	$query=$con->prepare("SELECT * FROM users WHERE userID ='$uid';");
	$query->execute();
	$query->bind_result($uid, $user, $pwd, $name, $address, $email, $contact, $creditcard);
	while($query->fetch()){
	  $un = $user;
	  $pw = $pwd;
	  $named = $name;
	  $add = $address;
	  $mail =$email;
	  $cont = $contact;
	  $credit = $creditcard;
	 }     
?>
<html>
<body>
	<form action="update.php" method="post">
	<th>Update Information</th>
	<br />
	Name: <input type="text" name="iname" value="<?php echo $named ?>" required="" />
	<br />
	Username: <input type="text" name="iuser" value="<?php echo $un ?>" required="" /> 
	<br />
	Password: <input type="password" name="ipwd" value="<?php echo $pw ?>" required="" />
	<br />
	Email: <input type="text" name="imail" value="<?php echo $mail?>" required="" />
	<br />
	Address: <input type="text" name="iadd" value="<?php echo $add ?>" required="" />
	<br />
	Contact: <input type="text" min="1" name="icont" value="<?php echo $cont ?>" required="" />
	<br />
	Credit Card: <input type="text" min="1" name="icredno" value="<?php echo $credit ?>" required="" />
	<br />
	<input type="hidden" name="uid" value="<?php echo $uid ?>"/>
		<td><button type="submit" value="submit">Update</button></td>
	</form>
</body>
</html>
