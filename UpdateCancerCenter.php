<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $id = $_POST['CenterID'];
 $name = $_POST['name'];
 $location= $_POST['location'];
 $description= $_POST['description'];

$Sql_Query = "UPDATE cancer_centers SET name= '$name',location= '$location', description= '$description' WHERE id = $id";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Record Updated Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>