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

mysqli_select_db($con,'sessionpractical1');
$name=$_POST['username'];
$pass=$_POST['t2'];//t2 and t1 are input text name from html 
$email=$_POST['t1'];


$q="select * from signin where name='$name' && password='$pass' && email='$email'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num ==1){
  echo "You are Already Signin";

   //header('location:http://localhost/project1/home.php');

}
else{
   $q= "insert into  signin  (name,password,email) values ('$name','$pass','$email')";
   mysqli_query($con,$q);
}



mysqli_close($con);

?>