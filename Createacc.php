<html>
<body>
	<form action="create.php" method="post">
	<th>Create User</th>
	<br />
	Name: <input type="text" name="iname" placeholder="Name" required="" />
	<br />
	Username: <input type="text" name="iuser" placeholder="Username" required=""  /> 
	<br />
	Password: <input type="password" name="ipwd" placeholder="Password" required="" />
	<br />
	Email: <input type="text" name="imail" placeholder="Email" required="" />
	<br />
	Address: <input type="text" name="iadd" placeholder="Address" required=""  />
	<br />
	Contact: <input type="number" min="1" name="icont" placeholder="Phone" required="" />
	<br />
	Credit Card: <input type="text" min="1" name="icredno" placeholder="Card number" required="" />
	<br />
	<input type="submit" />
	<a href="Login.php"><input type="button" value="BACK"/>
	</form>
</body>
</html>