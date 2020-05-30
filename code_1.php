<?php

$con=mysqli_connect('localhost','root','root','lostandfound');
if($con)
{
	
$name=$_POST['name'];
$gender=$_POST['gen'];
$age=$_POST['age'];
$dom=$_POST['dof'];
$address=$_POST['addr'];
$contact=$_POST['contact'];
$img=$_FILES['image']['name'];
$tmp_img=$_FILES['image']['tmp_name'];
$loc='images/';
$height=$_POST['height'];
$weight=$_POST['weight'];
$language=$_POST["lang"];
$description=$_POST['descr'];
	
	
$res=mysqli_query($con,"insert into postmissingperson (name,gender,age,dom,image,address,contact,height,weight,lang,descr,status) values('$name','$gender','$age','$dom','$img','$address','$contact','$height','$weight','$language','$description','missing')");

if($res)
{
	move_uploaded_file($tmp_img,$loc.$img);
	echo"<script>alert('Data Entered');window.location.href='index.php'</script>";
}
else
{
	echo"<script>alert('Data Submission Failed');window.location.href='post-missing-person.php'</script>";
	echo mysqli_error($res);
}
}

else
{
	echo"<script>alert('Connection Failed');window.location.href='post-missing-person.php'</script>";
}

?>