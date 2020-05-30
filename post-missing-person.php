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
      <li class="active navli"><a href="post-missing-person.php" id="i">Post missing person</a></li>
      <li class=" navli"><a href="find-missing.php" id="i">Find missing person</a></li>
      <li class="navli"><a href="about.php" id="i">About</a></li>
	  <li class="navli"><a href="gallery.php" id="i">Gallery</a></li>
	  <li class="navli"><a href="contact.php" id="i">Contact us</a></li>
    </ul>
  </div>
</nav>
<!------------------------------>

<div class="container">
	<div class="panel panel-info">
		<div class="panel-body">
		<h1 class="text-center" style="color:yellow;"><span style="background:black;">Details of Missing Person</span></h1>
			<form action="code_1.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter name of the person" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Gender</label><br/>
						<input type="radio" name="gen" value="Male" checked required /><label style="padding-left:8px; font-size:16px;">Male</label>
						<input type="radio" name="gen" value="Female" required style="margin-left:15px;" /><label style="padding-left:8px; font-size:16px;">Female</label>
						</div>
						<div class="form-group">
						<label>Age</label>
						<input type="number" name="age" placeholder="Enter age of the person" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Date of Missing</label>
						<input type="date" name="dof" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Image</label>
						<input type="file" class="form-control" name="image" />
						</div>
						<div class="form-group">
						<label>Address</label>
						<input type="text" name="addr" placeholder="Enter residential address of the person" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Contact</label>
						<input type="number" name="contact" placeholder="Enter a contact number" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Height</label>
						<input type="number" name="height" placeholder="Enter height of person in centimeters" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Weight</label>
						<input type="number" name="weight" placeholder="Enter weight of person in kilograms" class="form-control" required />
						</div>
						<div class="form-group">
						<label>Mother tongue of the person</label>
						<select class="form-control" name="lang">
						<option value="select">-Select- </option>
						<option value="Hindi">Hindi</option>
						<option value="English">English</option>
						</select>
						</div>
						<div class="form-group">
						<label for="shortdesc">Short description of the person<span style="color:red;"> (can be ignored)</span></label>
						<textarea type="number" name="descr" placeholder="Short description about the person" class="form-control" id="shortdesc"></textarea>
						</div>
						<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-success form-control" />
						</div>
					</div>
				</div>
		     </form>
		</div>
	</div>
</div>

</html>


<!------------------------------>
<?php include('footer.php');?>