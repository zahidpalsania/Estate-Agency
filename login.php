<?php 
require "dbconnection.php";
if($_POST){
$username = $_POST['Name'];
$password =$_POST['Password'];
$sql="SELECT * FROM user_master WHERE name='$username' AND password='$password'";
//echo $sql;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	header("Location: home.html");
}else{
	echo "Username or password not matched";
}
	
}

?>
<html>
<head>
<title>Estate Agency</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
*{
   margin: 0;
   padding: 0;
}
h1{
   text-align: center;
   padding: 20px;
}
.simple{
    background: #2B85AF;
    width: 500px;
    margin: 0px 0px 0px 430px;
    color: white;
    font-size: 18px;
    padding: 50px;
    border-radius: 10px;
	}
name{
	margin: 16px;
    padding: 4px;
    border: none;
    border-radius: 3px
}
password{
	    margin: 16px;
        padding: 4px;
		border: none;
		border-radius: 3px
}
</style>
</head>
<body align="center">
<div class="simple">
<form method="post" action="">
<h1>User Login</h1>
<table>
		<tr>
        <td><p><b>Username:-</b></td>
		<td><input type="text"  name="Name" ></td></p><br>
        </tr>
		<tr>
		<td><p><b>Password :</b></td>
		<td><input type="password"  name="Password"></td></p><br>
        </tr>
		<tr>
		<td><input id="button" type="submit" name="submit" value="Login"></td>
		</tr>
</table>
</form>
</div>
</body>
</html>
