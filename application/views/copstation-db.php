
<?php
$valueToSearch = $_POST['valueToSearch'];

$query = "SELECT
			cop.copname,
			cop.designation,
			cop.address,
			cop.phone,
			station.iname,
			station.location,
			station.phone FROM cop,station
			WHERE cop.station=station.id AND cop.copname='$valueToSearch'";
//get results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

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
<?php if(isset($_GET['msg']))
	  {
		  echo '<div class="msg">'.$_GET['msg'].'</div>';
	  }
	  ?>
	 <center>
	  <h2>Station and Cop Information</h2>
		<table id="customers">
			<tr>
				<th>Cop Name</th>
				<th>Cop Designation</th>
				<th>Cop Address</th>
				<th>Cop Phone</th>
				<th>Station Incharge </th>
				<th>Station Location</th>
				<th>Station Phone</th>

			</tr>

			<?php if($result->num_rows>0)
			{
				//loop through the results
				while($row=$result->fetch_assoc())
				{
					//display customers info
					$output ='<tr>';
					$output.='<td>'.$row['copname'].'</td>';
					$output.='<td>'.$row['designation'].'</td>';
					$output.='<td>'.$row['address'].'</td>';
					$output.='<td>'.$row['phone'].'</td>';
					$output.='<td>'.$row['iname'].'</td>';
					$output.='<td>'.$row['location'].'</td>';
					$output.='<td>'.$row['phone'].'</td>';
					$output.='</tr>'; //Echo Output

					echo $output;
				}
			}
				else
				{
					echo "Sorry, No Station or Cop info were found";
				}
				?>


		</table>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
