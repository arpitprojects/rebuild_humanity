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
	<link rel="stylesheet" href="css/materialize" type="text/css">
	<link rel="stylesheet" href="css/common.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css" type="text/css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	<!--<script src="script/form.js" type="text/javascript"></script>-->
	</head>
	<body>
	<!-- code here-->
	<?php include 'includes/connect.php';?>
	<?php include 'includes/core.php';?>
		<header>
			<div id="container">
				<div class="row">
					<div class="offset-s3 col s9">
						<h2>REGISTER AND EXPLORE!</h2>
					</div>
				</div>
				<div class="row">
					<div class="offset-s3 col s9">
						<h5 id="text">WE ARE WORKING FOR HUMANITY GO AHEAD AND JOIN</h5>
						<p><i class="fa fa-4x fa-hand-o-right" id="hilao"></i> ONCE YOU SUCESSFULLY REGISTERED U WILL BE AUTOMATICALLY REDIRECTED TO MAIN PAGE JUST LOGIN AND EXPLORE!</p>
					</div>
				</div>
	
			</div>
		</header>
		<section>
		<?php
			if(loggedin()){
			echo 'YOU ARE ALREDY LOGGED IN';
			include 'includes/back_index.php';
			}else if(!loggedin()){
				if(isset($_POST['txt_fname']) && isset($_POST['txt_name']) && isset($_POST['txt_uname']) && isset($_POST['txt_pwd']) && isset($_POST['radio_gen'])){
					$firstname = $_POST['txt_fname'];
					$lastname = $_POST['txt_name'];
					$username = $_POST['txt_uname'];
					$password = $_POST['txt_pwd'];
					$pass = md5($password);
					$gender = $_POST['radio_gen'];
					if(!empty($firstname) && !empty($lastname) &&!empty($username)  && !empty($gender) &&!empty($password)){
						//start process
						$query = "SELECT `user_name` FROM `registration` WHERE `user_name` = '$username' ";
						$query_run = mysql_query($query);
						if(mysql_num_rows($query_run) == 1){
							echo 'The username  '.$username.'  alredy exists';
						}else{
							//echo 'ok';
							$query = "INSERT INTO `registration` VALUES ('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($pass)."','')";
							
							if($query_run = mysql_query($query)){
								header('Location: index.php');
							}else{
								echo 'sorry we cant register you';
							}
						}
					}else{
						echo 'ALL FEILDS ARE REQUIRED!';
					}
				}
			?>
		<?php ?>
			
			<form  action="register.php" method="post">
				<div class="row">
					<div class="input-feild offset-s3 col s4">
						<i class="material-icons prefix">account_circle</i>
						 <label  for="first_name">First Name</label>
						<input placeholder="Name"  name="txt_fname"  id="first_name" type="text" >
						
					</div>
				</div>
				<div class="row">
					<div class="input-feild offset-s3 col s4">
					<i class="material-icons prefix">account_circle</i>
						 <label  for="first_name">Last Name</label>
						 <input placeholder="lastName"  name="txt_name"  id="first_name" type="text" >
					</div>
				</div>
				<div class="row">
					<div class="input-feild offset-s3 col s4">
					<i class="material-icons prefix">assignment</i>
						 <label for="email">Email</label>
						 <input type="email" name="txt_uname"  class="validate">
						<p id="arrow">YOUR EMAIL WILL BE USED AS YOUR LOGIN!  <i class="small material-icons">done</i></p>
					</div>
				</div>
				<div class="row">
					<div class="input-feild offset-s3 col s4">
					<i class="material-icons">lock</i>
						 <label for="password">Password:</label>
						 <input type="password" name="txt_pwd"  class="validate">
						
					</div>
				</div>
				
				<!--<div class="row">
					<div class="input-feild offset-s3 col s4">
						 <label>BIRTHDATE</label>
						  <input class="dob" type="date" class="datepicker">

					</div>
				</div>-->
				<div class="row">
					<div class="input-feild offset-s3 col s4">
					<i class="material-icons medium">supervisor_account</i>
						<p><h4>SELECT YOUR GENDER:</h4>
							<input name="radio_gen" type="radio" id="male" />
							<label for="male">MALE</label>
						</p>
						<p>
							<input name="radio_gen" type="radio" id="female" />
							<label for="female">FEMALE</label>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="input-feild offset-s3 col s4">
					<div class="switch">
						<label> I ACCEPT ALL THE INFO IS CORRECT.<br/>
							OFF
							<input name="lev" class="onoff" type="checkbox">
							<span  class="blue accent-3 lever"></span>ON</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="input-feild offset-s3 col s4">
						<input type="submit" class=" waves-effect waves-light" value="SUBMIT HERE" name="btn_insert" id="submiting"/>
						<?php include 'includes/back_index.php';?>
					</div>
				</div>
			</form>
		</section>
		<!--php code-->
		<?php
			
		
		 include'includes/footer.php';
			}
		 ?>
		
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/script.js" type="text/javascript"></script>
	  <!-- Compiled and minified JavaScript -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <!--  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
	<script src="script/jquery.cycle2.min.js" type="text/javascript"></script>
	</body>
</html>