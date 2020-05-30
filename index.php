<?php include('header.php');
$con=mysqli_connect('localhost','root','root','lostandfound');
?>
<div class="container-fluid" style="margin-top:-20px;">
  <div id="lostandfound" class="carousel slide row" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#lostandfound" data-slide-to="0" class="active"></li>
      <li data-target="#lostandfound" data-slide-to="1"></li>
      <li data-target="#lostandfound" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/car.jpg" alt="Los Angeles" style="width:100%; height:70%;">
      </div>

      <div class="item">
        <img src="img/car.jpg" alt="Chicago" style="width:100%; height:70%;">
      </div>
    
      <div class="item">
        <img src="img/car.jpg" alt="New york" style="width:100%; height:70%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#lostandfound" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#lostandfound" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 text-center">
			<h1 style="font-family:Tahoma, Geneva, sans-serif; color:red; background:black; font-weight:bold; height:7%;">Recent Missing Entries</h1>
			<br/><br/>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
<div class="container">
	<div class="row">
<?php
	$sel="select * from postmissingperson where status='missing' order by id desc limit 9";
	$res1=mysqli_query($con,$sel);
	while($row=mysqli_fetch_array($res1))
	{
?>
		<div class="col-sm-4" style="margin-bottom:20px;">
			<div style="height:450px;width:100%;border:1px solid">
				<div>
					<a href="missing-person-details.php?id=<?php echo $row['id'];?>"><img src="img/<?php echo $row['image'];?>" style="height:250px;width:100%"/></a>
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
	<div class="row">
		<div class="col-sm-12">
			<a href="show-all.php" class="btn btn-warning pull-right">Show all entries</a>
		</div>
	</div>
</div>
<?php include('footer.php');?>