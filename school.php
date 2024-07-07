<?php
$n=$_POST["name"];
$email=$_POST["email"];
$m=$_POST["message"];
$c=mysqli_connect("localhost","root","","stureg");
if ($c)
echo "connected";
$r=mysqli_query($c,"insert into schoolcontact values('$n','$email','$m')");
if($r)
echo "Message Sended Successfully";
else
echo "Not Sended";
mysqli_close($c);
?>
