<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $db = "estate agency";
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
		 //$sql = "INSERT INTO user_master (name,email,gender,phone_no,password) VALUES ('Zahid','zahid@gmail.com','male','9898989','12345')";
		 
		 //mysqli_query($conn,$sql);
         //echo 'Connected1 successfully';
         //mysqli_close($conn);
?>