<?php
$un=$_POST["workmail"];
$p=$_POST["pwd"];
$c=mysqli_connect("localhost","root","","stureg");
$l=mysqli_query($c,"select * from signupform where workemail='$un' AND password='$p'");
$r=mysqli_num_rows($l);
if($r>0)
{
echo '<script>alert("Login Successfull")</script>';
}
else
{
echo '<script>alert("Invalid Username/password")</script>';
}
mysqli_close($c);
?>