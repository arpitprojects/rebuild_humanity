<!DOCTYPE html>
<html>
	<head>
		<title>
			REBUILT HUMANITY!
			
		</title>
		<link rel="icon" type="image/png" href="images/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/materialize" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	</head>
	<body class="menu">
		<!-- slid enavigation menu -->
		<!--require fb all files-->
		<!-- or put in separeate php page and iclude it-->
		
	
	<!--optional stuff above  jus check process-->
		</div id="header">
			<div class="row">
				<div class="col-sm-1">
					<button type="button" class="waves-effect waves-light button btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</button>
					</div>
				</div>
				
				<div class="row">
					<div id="header1" class="col s2">
						<h3 class="" id="fonts"> REBUILD HUMANITY!</h3>
					</div>
				</div>
				<div id="header2" class="col s2">
					<p class="pars"> LET'S UNITE AND BRING HUMANITY BACK!</p>
				</div>
			
			</div>
			<button type="button" class="blue accent-3 btn btn-lg waves-effect waves-light register" onclick="imageclick('register.php')"> Register Here!</button>
		
			<!--modal login here-->
			<button type="button" class="blue accent-3 btn btn-lg waves-effect waves-light jus btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">LOGIN HERE!</button>

					<!-- Modal -->
					<div id="myModal" class="modal fade modu" role="dialog">
					<div class="modal-dialog">
					
					<!-- Modal content-->
					<div class="">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">LOGIN PLEASE:</h4>
					<?php// require_once 'fblogin.php';?>
					</div>
					<div class="modal-body">
					<p>  <div class="row">
				<?php include 'includes/connect.php';
					include 'includes/core.php';
				?>
				<?php 
				if(loggedin()){
					echo 'YOU ARE LOGGED IN . <a href="includes/logout.php">LOGOUT HERE!</a>';
				}else{
				
				}
				?>
				<!--facebook login-->
				
				
				<?php include 'includes/loginform.php';?><!-- to clear the bug -->
			<?php include'includes/next_index.php';?>
		
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/script.js" type="text/javascript"></script>
	  <!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="script/jquery.cycle2.min.js" type="text/javascript"></script>
	</body>
</html>