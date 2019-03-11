<?php require "dbconnection.php";?>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
*{
   margin: 0;
   padding: 0;
}
h1{
   text-align: center;
   padding: 20px;
}
h2{
   text-align: center;
   padding: 20px;
}
.register{
    background: #2B85AF;
    width: 500px;
    margin: 0px 0px 0px 430px;
	color: white;
    font-size: 18px;
	padding:50px;
	border-radius: 10px;
}
register{
	margin-left: 50px;
}
label{
	color: white;
	font-family: sans-serif;
    font-size: 18px;
	font-style: italic;
}
name{
	width: 300px;
    border: none;
    border-radius: 3px;
    outline: 0;
    padding: 7px
}
email{
	padding: 7px;
    border: none;
    border-radius: 3px;
    outline: 0;
}
phone_no{
	padding: 7px;
    border: none;
    border-radius: 3px;
    outline: 0;
}
password{
	padding: 7px;
    border: none;
    border-radius: 3px;
    outline: 0;
}
confirm password{
	padding: 7px;
    border: none;
    border-radius: 3px;
    outline: 0;
}
submit{
	    margin: 5px;
    padding: 5px;
}
</style>
</head>
     <body>
	 <?php 
		if($_POST){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$phone_no = $_POST['Number'];
			$pwd = $_POST['pass'];
			//$sql = "INSERT INTO user_master (name,email,gender,phone_no,password) VALUES ('Zahid','zahid@gmail.com','male','9898989','12345')";
			//echo $sql;
			//mysqli_query($conn,$sql);
			$sql = "SELECT * FROM user_master where name='$username'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "User already exist with this username";exit;
			}
			mysqli_query($conn,"INSERT INTO user_master (name,email,gender,phone_no,password) VALUES ('$username','$email','$gender','$phone_no','$pwd')");
			echo "You are registered successfully. You can login from <a href='login.php'>Here</a>";
		}
	 ?>
	 <h1> Registration Form </h1>
      <div class="register">
	 <h2> Register Here </h2> 
<form method="POST"  action="">
<table border="0">
<tr>
<td>Name</td><td> <input type="text" name="username"></td>
</tr>
<tr>
<td>Email</td><td> <input type="text" name="email"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td>Phone_No</td>
<td><input type="number" name="Number"></td>
</tr>
<tr>
<td>Password</td><td> <input type="password" name="pass"></td>
</tr>
<tr>
<td>Confirm Password </td><td><input type="password" name="cpass"></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-In"></td>
</tr>
</table>
</form>
</div>
</body>
</html>