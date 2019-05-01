
<?php
	//Assign get variable
	$id = $_GET['id'];

	//Create customer select query
	$query ="SELECT * FROM cop WHERE id = $id";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$copname = $row['copname'];
			$designation=$row['designation'];
			$dob=$row['dob'];
			$reportto=$row['reportto'];
			$address=$row['address'];
			$phone=$row['phone'];
			$station=$row['station'];
		}
		//Free Result set
		$result->close();
	}
?>
<?php
	if($_POST)
	{
		$copname = $_POST['copname'];
		$designation=$_POST['designation'];
		$dob=$_POST['dob'];
		$reportto=$_POST['reportto'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$station=$_POST['station'];
		//create customer query
		$query="UPDATE cop
				SET
				copname='$copname',
				designation='$designation',
				dob='$dob',
				reportto='$reportto',
				address='$address',
				phone='$phone',
				station='$station'
				WHERE id=$id";
		//Run query
		$mysqli->query($query);

		$msg='Police Info Edited';
		header('Location: police.php?msg='.urlencode($msg).'');
		exit;
	}
	?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Crime Records Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>outside/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>outside/css/navbar-top.css" rel="stylesheet">
	    <link href="<?php echo base_url();?>outside/css/forms.css" rel="stylesheet">
    <link href="<?php echo base_url();?>outside/css/tables.css" rel="stylesheet">

  </head>

  <body>
 <p align="center"> <img src="<?php echo base_url();?>outside/images/horn.gif" width="5%"><img src="<?php echo base_url();?>outside/images/index.jpg" width="30%"></p>

 <nav class="navbar navbar-dark bg-primary">

  <div class="collapse navbar-collapse" id="navbarNav">
     <center>  <ul class="navbar-nav">
        <a class="nav-link" href="<?php echo base_url(); ?>Main/gateway" style="color:white;font-size:medium;">Home <span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link" href="<?php echo base_url(); ?>Main/station" style="color:white;font-size:medium;">Station</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link" href="<?php echo base_url(); ?>Main/police" style="color:white;font-size:medium;">Police</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="<?php echo base_url(); ?>Main/criminal" style="color:white;font-size:medium;">Criminal</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="<?php echo base_url(); ?>Main/complaint" style="color:white;font-size:medium;">Complaint</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="<?php echo base_url(); ?>Main/fir" style="color:white;font-size:medium;">FIR</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
<a class="nav-link disabled" href="<?php echo base_url(); ?>Main/copstation" style="color:white;font-size:medium;">Search: Police Station |</a>
       <a class="nav-link disabled" href="<?php echo base_url(); ?>Main/complaintfir" style="color:white;font-size:medium;">FIR Complaint</a>
     </ul></center>
  </div>
</nav>
<img src="<?php echo base_url();?>outside/images/logo.jpg" width="20%" align="left">
<center><h2>Edit Police Info</h2>
		<form method="POST" class="forms" action="editpolice.php?id=<?php echo $id; ?>">
			<div class="form-group">
				<label>Cop Name</label>
				<input name="copname" type="text" class="form-control" width="60%" value="<?php echo $copname; ?>">
			</div>
			<div class="form-group">
				<label>Designation</label>
				<input name="designation" type="text" class="form-control" value="<?php echo $designation; ?>">
			</div>
			<div class="form-group">
				<label>Date of Birth</label>
				<input name="dob" type="date" class="form-control" value="<?php echo $dob; ?>">
			</div>
			<div class="form-group">
				<label>Report To</label>
				<input name="reportto" type="text" class="form-control" value="<?php echo $reportto; ?>">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input name="address" type="text" class="form-control" value="<?php echo $address; ?>">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>">
			</div>
			<div class="form-group">
				<label>Station</label>
				<input name="station" type="text" class="form-control" value="<?php echo $station; ?>">
			</div>
  <input type="submit" class="btn btn-success" value="Edit Police">
</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
