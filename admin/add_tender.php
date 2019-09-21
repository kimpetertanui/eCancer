<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $question = $_POST['question'];
 $possible_answers = $_POST['possible_answers'];
 $correct_answer = $_POST['correct_answer'];
 echo $question;
 echo $possible_answers;
 echo $correct_answer;

 

 $CheckSQL = "SELECT * FROM quiz_questions WHERE question ='$question '";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo ' Already Exist';

 }
else{ 
$Sql_Query = "INSERT INTO quiz_questions (question,possible_answers,correct_answer) values ('$question','$possible_answers','$correct_answer')";

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