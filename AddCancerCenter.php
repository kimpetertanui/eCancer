<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $name = $_POST['name'];
 $location = $_POST['location'];
 $description = $_POST['description'];

$Sql_Query = "INSERT INTO cancer_centers (name,location,description) values ('$name','$location','$description')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Cancer Cencer Added Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>