<html>
<head>
<title>Project</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>

<style>
#i:hover
{
color:white;
background:black;
}
#j:hover
{
color:black;	
}
.navli
{
	font-size: 18px;
	font-family: initial;
    color: chocolate;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container-fluid">
	<div class="row" style="background:#a6a6a6;">
		<div class="col-sm-4" style="padding:10px; color:white;">
			<div style="height:30px;width:30px; border:1px solid #334d00; border-radius:50%;float:left;margin-top:-1px;"><a href="https://www.facebook.com"><span class="fa fa-facebook" style="font-size:22px; padding-top:5px; text-align:center; padding-left:7px; color:#cc0099;"></span></a></div>
			<div style="height:30px;width:30px; border:1px solid #334d00; border-radius:50%;float:left; margin-left:10px;margin-top:-1px;"><a href="https://www.twitter.com"><span class="fa fa-twitter" style="font-size:22px; padding-top:5px; text-align: center; padding-left:5px; color:#cc0099;"></span></a></div>
			<div style="height:30px; width:30px; border:1px solid #334d00; border-radius:50%;float:left; margin-left:10px; margin-top:-1px;"><a href="https://www.youtube.com"><span class="fa fa-youtube" style="font-size:22px; padding-top:3px; text-align:center; padding-left:5px; color:#cc0099;"></span></a></div>
		</div>
		<div class="col-sm-5"></div>
		<div class="col-sm-1">
			<div class="fa fa-phone" style="padding-top:17px; "><span style="color:white; margin-left:4px;">123456789</span></div>
		</div>
		<div class="col-sm-2">
			<div class="fa fa-envelope" style="padding-top:17px;"><span style="color:white; margin-left:4px;">mudit@gmail.com</span></div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default" style="padding-top:8px;padding-bottom:8px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/download.jpg" style="margin-top:-13px; width:95px; border-radius:50%;"/>
	  </a>
	  <label style="    font-size: 29px;
    margin-right: 20px;
    margin-top: 3px;
    font-family: initial;">Lost and found</label>
    </div>
    <ul class="nav navbar-nav">
      <li class="navli"><a href="index.php" id="i">Home</a></li>
      <li class="navli"><a href="post-missing-person.php" id="i">Post missing person</a></li>
      <li class=" navli"><a href="find-missing.php" id="i">Find missing person</a></li>
      <li class="navli"><a href="about.php" id="i">About</a></li>
	  <li class="navli"><a href="gallery.php" id="i">Gallery</a></li>
	  <li class="navli"><a href="contact.php" id="i">Contact us</a></li>
    </ul>
  </div>
</nav>

<!---------------------------->

<?php
$con=mysqli_connect('localhost','root','root','lostandfound');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h1 style="color:red;"><u>All Missing Entries</u></h1>
			<br/><br/>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
<?php
    $page=$_REQUEST['page'];
	$temp=2;
	echo $tmp1=$page-$temp;
	$sel="select * from postmissingperson where status='missing' order by id desc limit $tmp1,$page";
	$res1=mysqli_query($con,$sel);
	while($row=mysqli_fetch_array($res1))
	{
?>
		<div class="col-sm-4" style="margin-bottom:20px;">
			<div style="height:450px;width:100%;border:1px solid">
				<div>
					<img src="img/<?php echo $row['image'];?>" style="height:250px;width:100%"/>
				</div>
				<div>
					<table class="table">
						<tr>
							<th>Name</th>
							<td><?php echo $row['name'];?></td>
						</tr>
						<tr>
							<th>Gender</th>
							<td><?php echo $row['gender'];?></td>
						</tr>
						<tr>
							<th>Address</th>
							<td><?php echo $row['address'];?></td>
						</tr>
						<tr>
							<th>Contact</th>
							<td><?php echo $row['contact'];?></td>
						</tr>
					</table>
				</div>
				<div style="background:#9e9e9e33;height: 34px;margin-top: -12px;">
					<p class="text-right" style="padding-top: 4px;font-size: 19px;color: blue;font-weight: bold;font-family: auto;"><a href="missing-person-details.php?id=<?php echo $row['id'];?>" style="text-decoration: none;">View more</a></p>
				</div>
			</div><hr>
		</div>
	<?php
	}
	?>
	
	</div>
	
	<?php  
        $sql = "SELECT COUNT(id) FROM postmissingperson";  
        $rs_result = mysqli_query($con, $sql);  
        $row1 = mysqli_fetch_row($rs_result);  
        $total_records = $row1[0];  
        $total_pages = ceil($total_records);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='show-all.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>
	
</div>
<?php include('footer.php');?>