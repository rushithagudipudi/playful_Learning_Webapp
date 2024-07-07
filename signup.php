<?php
$name=$_POST["name"];
$workemail=$_POST["workemail"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$c=mysqli_connect("localhost","root","","stureg");
if($c)
echo "connected";
else
echo "not connected";
$i=mysqli_query($c,"insert into signupform values('$name','$workemail','$password','$repassword')");
if($i)
echo "Sign Up sucessful";
else
echo "Sign Up Failed";
mysqli_close($c);
?>