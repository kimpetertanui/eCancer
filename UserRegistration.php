<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $name = $_POST['name'];
 $phone_no = $_POST['phone_no'];
 $location = $_POST['location'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $CheckSQL = "SELECT * FROM users WHERE email='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO users (name,phone_no,location,email,password) values ('$name','$phone_no','$location','$email','$password')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Registration Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
}
 mysqli_close($con);
?>