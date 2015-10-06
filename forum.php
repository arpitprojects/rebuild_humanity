<!DOCTYPE html>
<html>
	<head>
		<title>
			REBUILT HUMANITY!
		</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/materialize.css" type="text/css">
	<link rel="stylesheet" href="css/forum.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
	<!--code here-->
	<header class="cyan accent-4">
		<div class="row">
			<div class="col-s2">
				<h1><i class="rot fa fa-lg fa-sticky-note-o"></i> FORUM </h1>
				<div class="col s8" id="nav_menu_top">
				  <ul class="tabs">
					<li class="tab col s2"><a onclick="imageclick('index.php')" href="index.php"><span id="colori">HOME</span></a></li>
					
					<li class="tab col s2"><a onclick="imageclick('work.php')" href="#test2"><span id="colori">WORK WITH US</span></a></li>
					<li class="tab col s2"><a onclick="imageclick('about_us.php')" href="#test3"><span id="colori">ABOUT US</span></a></li>
					<li class="tab col s2"><a onclick="imageclick('main.php')" href="#test4"><span id="colori">NORMAL VIEW</span></a></li>
				  </ul>
			  </div>
			</div>
		</div>
	</header>
	<section>
	<!--code here-->
		<div class="row">
			<div class="col s12">
				<img src="images/hands.jpg" alt="background" height="700" width="100%" id="hands"/>
				<style>
					#hands{
						opacity:.2;
						position:absolute;
					}
				</style>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="col s12">
			<div class="indigo accent-4" id="ques1">
				<h3>Q.) DO HUMANITY STILL EXISTS?</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div id="message_post">
			<?php include 'includes/connect.php '?>
			<?php// include 'includes/core.php';?>
			<?php
				if(isset($_POST['name'])&& isset($_POST['message'])){
					$name =mysql_real_escape_string( $_POST['name']);
					$message  = mysql_real_escape_string($_POST['message']);
					if(!empty($name) && !empty($message)){
						
						$query = "INSERT INTO `forum` VALUES('','$name','$message')";
						if($query_run  = mysql_query($query)){
							 echo '<strong>'.'You entered: '.'</strong>'.'<br/>' .$message .'<br/><br/><hr/>' .'MESSAGE SENT SUCESSFULLY TO DATABASE!, it will be set to the site once verified..';
							?>
							<a href="index.php"> GO BACK </a>
							<?php
						}else{
							echo "SORRY ERROR ENCOUNTERED!";
						}
					}else{
						echo 'FEILD CAN\'T BE EMPTY!';
					}
				}
			/*function */
			function getuserfield($field){
				$query  ="SELECT `$field` FROM `forum` WHERE `sr_no` ='".$_SESSION['user_id']."'"; 
				if($query_run = mysql_query($query)){
					if($query_result = mysql_result($query_run , 0 , $field)){
						return $query_result;
					}
				} 
			}
			
			?>
				
			</div>
		</div>
	</div>
	<div id="wrapping">
	<form class="col s12" method="post" action="forum.php">
		 <div class="row" id="adu"><style> #adu{margin-left:-50px;}</style>
			<div class="col s12 offset-s1">
				<div class="row">
					<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" name="name" type="text" class="validate">
					<label for="icon_prefix">Name:</label>
				</div>
			</div>
		</div>
	</div>
					<div class="row">
						<div class="input-field color-change offset-s1 col s8">
							<textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
							<label for="textarea1">WRITE YOUR REVIEW:</label>
						</div>
					</div>
					<div class="row">
						<div class="col s2">
							<input type="submit" class="waves-effect waves-light cyan-accent-2" id="pin_button" value="PIN IT" >
						</div>
					</div>
		</form>
	</div>
	
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/jquery_script.js" type="text/javascript"></script>
	<script src="script/script.js" type="text/javascript"></script>
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	</body>
</html>