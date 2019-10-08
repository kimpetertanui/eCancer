<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $name = $_POST['name'];
 $location = $_POST['location'];
 $description  = $_POST['description'];
 echo $name;
 echo $location;
 echo $description ;

 

 $CheckSQL = "SELECT * FROM cancer_centers WHERE name ='$name'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo ' Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO cancer_centers (name,location,description ) values ('$name','$location','$description')";

 if(mysqli_query($con,$Sql_Query))
{	
 echo 'Registration Successfully';
header('Location: http://127.0.0.1/eCancer/admin/index.html');
}
else
{
 echo 'Something went wrong';
 }
 }
}
 mysqli_close($con);
?>