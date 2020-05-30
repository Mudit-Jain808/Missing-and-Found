<?php
$i=$_REQUEST['id'];
$con=mysqli_connect('localhost','root','root','lostandfound');
$sql="select * from postmissingperson where id=$i";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
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
	<div class="row" style="background:#e0ebeb;">
		<div class="col-sm-4" style="padding:10px; color:white;">
			<div style="height:30px;width:30px; border:1px solid #334d00; border-radius:50%;float:left;margin-top:-1px;"><a href="https://www.facebook.com"><span class="fa fa-facebook" style="font-size:22px; padding-top:5px; text-align:center; padding-left:7px; color: #000099;"></span></a></div>
			<div style="height:30px;width:30px; border:1px solid #334d00; border-radius:50%;float:left; margin-left:10px;margin-top:-1px;"><a href="https://www.twitter.com"><span class="fa fa-twitter" style="font-size:22px; padding-top:5px; text-align: center; padding-left:5px; color: #000099;"></span></a></div>
			<div style="height:30px; width:30px; border:1px solid #334d00; border-radius:50%;float:left; margin-left:10px; margin-top:-1px;"><a href="https://www.youtube.com"><span class="fa fa-youtube" style="font-size:22px; padding-top:3px; text-align:center; padding-left:5px; color: #000099;"></span></a></div>
		</div>
		<div class="col-sm-5"></div>
		<div class="col-sm-1">
			<div class="fa fa-phone" style="padding-top:17px; "><span style="color:brown; margin-left:4px;">123456789</span></div>
		</div>
		<div class="col-sm-2">
			<div class="fa fa-envelope" style="padding-top:17px;"><span style="color:brown; margin-left:4px;">mudit@gmail.com</span></div>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center" style="color:green;">We are happy that you found out your friend/relative!</h2><br/>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-success">
				<div class="panel-body">
					<form action="reports.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-12">
							
								<div class="form-group">
									<label>Date of finding <?php echo $row['name'];?></label>
									<input type="date" name="dof" class="form-control" required />
								</div>
							
								<div class="form-group">
									<label>Source</label>
									<select class="form-control" name="sources">
										<option value="select">-Select- </option>
										<option value="police">With help of Police</option>
										<option value="people">With help of relatives and friends</option>
										<option value="online">With help of online sources</option>
										<option value="other">Other</option>
									</select>
								</div>
								<div class="form-group">
									<label>Current location of <?php echo $row['name'];?></label>
									<input type="text" name="locat" placeholder="Current location of the missing person" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Status of <?php echo $row['name'];?></label><br/>
									<input type="radio" name="gen" value="alive" checked required /><label style="padding-left:8px; font-size:16px;">Alive</label>
									<input type="radio" name="gen" value="dead" required style="margin-left:15px;" /><label style="padding-left:8px; font-size:16px;">Dead</label>
								</div>
								<hr>
								
								<h3 style="color:red;" class="text-center"><u>Details of person reporting status of <?php echo $row['name'];?></u></h3>
								
								<div class="row">
								<div class="col-sm-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name_r" placeholder="Name of the person" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="number" name="contact_r" placeholder="Contact of the person" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Image or Valid ID</label>
									<input type="file" name="image" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address_r" placeholder="Address of the person" class="form-control" required />
									
									<input type="hidden" name="id" value="<?php echo$i?>" />
									<!--when updating something use this hidden input-->
									
								</div>
								<div class="form-group">
								<input type="submit" value="Submit" class=" btn btn-success" />
								</div>
								</div>
								</div>
							
							</div>
						</div>
					</form>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!---------------------------->
<?php include('footer.php');?>