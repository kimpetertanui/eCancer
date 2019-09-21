<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $title = $_POST['title'];
 $summary = $_POST['summary'];
 // echo $title;
 // echo $summary;

$Sql_Query = "INSERT INTO  causes (title,summary) VALUES ('$title','$summary')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Cancer Cause Added Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>