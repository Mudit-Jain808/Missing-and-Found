<?php

$con=mysqli_connect('localhost','root','root','lostandfound');
if($con)
{
	
$name=$_POST['name'];
$email=$_POST['email'];
$query=$_POST['query'];
	
$res=mysqli_query($con,"insert into query (name,email,query) values('$name','$email','$query')");
if($res)
{
	echo"<script>alert('Your query has been accepted');window.location.href='contact.php'</script>";
}
else
{
	echo"<script>alert('Query not accepted! try again');window.location.href='query.php'</script>";
	echo mysqli_error($res);
}
}

else
{
	echo"<script>alert('connection failed');window.location.href='query.php'</script>";
}

?>

