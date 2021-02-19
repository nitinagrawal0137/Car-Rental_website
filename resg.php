<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con)
{
  
   echo"connection successful";
}
else
{
 echo "No connection";
}

mysqli_select_db($con,'give_car');
$model=$_POST['m1'];
$address=$_POST['subject'];//t2 and t1 are input text name from html 
$date=$_POST['d1'];
$start_duration=$_POST['d2'];
$end_duration=$_POST['d3'];

$q="select * from info where model='$model' && address='$address' && date='$date' && start_duration='$start_duration' && end_duration='$end_duration'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num ==1){
  echo "You are Already Enter the data";

   //header('location:http://localhost/project1/home.php');

}
else{
   $q= "insert into  info (model,address,date,start_duration,end_duration) values ('$model','$address','$date','$start_duration','$end_duration')";
   mysqli_query($con,$q);
}



mysqli_close($con);

?>