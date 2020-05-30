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
      <li class="active navli"><a href="find-missing.php" id="i">Find missing person</a></li>
      <li class="navli"><a href="about.php" id="i">About</a></li>
	  <li class="navli"><a href="gallery.php" id="i">Gallery</a></li>
	  <li class="navli"><a href="contact.php" id="i">Contact us</a></li>
    </ul>
  </div>
</nav>

<!---------------------------->

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-body">
					<h3>Search person by name:</h3>
					<form action="" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="search" required>
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit" name="submit" style="height:34px;"><i class="glyphicon glyphicon-search"></i></button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="panel panel-success">
		<div class="panel-body">
		<?php
			$con=mysqli_connect('localhost','root','root','lostandfound');
			if(isset($_POST['submit']))
			{
				$name=$_POST['search'];
				$sql="select * from postmissingperson where name='$name'";
				$res=mysqli_query($con,$sql);
				if(mysqli_num_rows($res))
				{
				while($row=mysqli_fetch_array($res))
				{		
		?>
			<div class="row" >
				<div class="col-sm-2">
					<img src="images/<?php echo $row['image'];?>" style="width:100%; border:1px solid;"  />
				</div>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-1">
							<label>Name:</label>
						</div>
						<div class="col-sm-4">
							<label style="color:red; overflow:auto;"><?php echo $row['name'];?></label>
						</div>
						<div class="col-sm-1">
							<label>Gender:</label>
						</div>
						<div class="col-sm-6">
							<label style="color:red; overflow:auto;"><?php echo $row['gender'];?></label>
						</div>
						
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-1">
							<label>Contact:</label>
						</div>
						<div class="col-sm-4">
							<label style="color:red; overflow:auto;"><?php echo $row['contact'];?></label>
						</div>
						<div class="col-sm-1">
							<label>Address:</label>
						</div>
						<div class="col-sm-6">
							<label style="color:red; overflow:auto;"><?php echo $row['address'];?></label>
							<a class="btn btn-info pull-right"href="missing-person-details.php?id=<?php echo $row['id'];?>">View more</a>
						</div>
					</div>
				
				</div>
			</div>
			<?php
			}
				}
				else
				{
					echo"<script>alert('No such entry exists!');</script>";
				}
			}
			?>
		</div>
	</div>


</div>
<!------------------------------>
<?php include('footer.php');?>