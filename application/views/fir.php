

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

	  <center><h2>FIR Information</h2>
			<div class="table-responsive">
						 <table class="table table-bordered">
									<tr>
										<th>FIR Number</th>
										<th>Station</th>
										<th>Compliant</th>
										<th>Log Date</th>
										<th>Description</th>
										<th>Offence Nature</th>
										<th>Cop Dealing</th>
									</tr>
						 <?php
						 if($fetch_data->num_rows() > 0)
						 {
									foreach($fetch_data->result() as $row)
									{
						 ?>
									<tr>
											 <td><?php echo $row->fnumber; ?></td>
											 <td><?php echo $row->station; ?></td>
											 <td><?php echo $row->complaint; ?></td>
											 <td><?php echo $row->log_date; ?></td>
											 <td><?php echo $row->description; ?></td>
											 <td><?php echo $row->offence_nature; ?></td>
											 <td><?php echo $row->cop; ?></td>
									</tr>
						 <?php
									}
						 }
						 else
						 {
						 ?>
									<tr>
											 <td colspan="5">No Data Found</td>
									</tr>
						 <?php
						 }
						 ?>
						 </table>
				</div>
		            <center><a href="<?php echo base_url(); ?>Main/addfir" class="btn btn-warning btn_sm">Add FIR Info</a></center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
