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
	<link rel="stylesheet" href="css/work.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
	<!-- CODE HERE -->
	
		<header>
			<div class="row">
				<div class="col s12">
					<img src="images/help.jpg" alt="helping hand"  id="header_image">
					
				</div>
			</div>
			<div class="row" id="header_text">
				<div class="col s12 m5">
					<div class="card-panel indigo lighten-1 inc">
						<span id="textin">
					</span>
				</div>
			</div>
		</div>
        </header>
		<div id="section">
			<div class="row">
				<div class="col s12 m10">
					<p id="regis_text">REGISTER HERE TO WORK WITH US !	</p>
				</div>
			</div>
		</div>
		<?php include 'includes/back_home1.php';?>
			<?php include 'includes/connect.php';
			//include 'includes/core.php';	
		?>	
		<?php
			if(isset($_POST['firstname'])&& isset($_POST['lastname'])&&isset($_POST['email']) &&isset($_POST['message']) &&/*isset($_POST['file'])&&*/ isset($_POST['radio_gen']) ){
				$firstname =mysql_real_escape_string( $_POST['firstname']);
				 $lastname =mysql_real_escape_string( $_POST['lastname']);
				$email = mysql_real_escape_string($_POST['email']);
				$message =mysql_real_escape_string( $_POST['message']);
				$gender =mysql_real_escape_string ($_POST['radio_gen']);
				//$file = $_POST['file'];
				//echo $firstname;
				if(!empty($firstname)&& !empty($lastname)&&!empty($email) && !empty($message) && /*!empty($file) &&*/ !empty($gender)){
					$query = "INSERT INTO `work_with_us` VALUES('','$firstname','$lastname','$email','$message','$gender')";
					if($query_run = mysql_query($query)){
								echo 'WORK WITH US SUCESSFUL!';
							}else{
								echo 'SORRY WE CAN\'T REGISTER YOU!';
							}
				}else{
					echo 'YOU CAN\'T LEAVE FIELDS ALONE';
				}
			}
		?>
		<form action="work.php" method="post">
		 <div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" name="firstname" type="text" class="validate">
					<label for="icon_prefix">First Name:</label>
				</div>
				<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" name="lastname" type="text" class="validate">
					<label for="icon_prefix">Last Name:</label>
				</div>
			</div>
			</div>
		</div>
        <div class="row">
		<div class="col s12">
		  <div class="row">
			<div class="input-field col s12">
				<i class="material-icons prefix">assignment</i>
			  <input id="email" type="email" name="email" class="validate">
			  <label for="email" data-error="wrong" data-success="right">Email</label>
			</div>
		  </div>
		</div>
	  </div>
	   <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          <label for="textarea1">ADDITIONAL INFO:</label>
        </div>
      </div>
    </div>
  </div>
  <div id="upload">
	
		<label class="">UPLOAD YOUR IMAGE:</label>
		<div class="file-field input-field">
		
		<br/>
		
		 <div class="btn">
			<span>File</span>
			<input name="file" type="file">
		  </div>
		  <div class="file-path-wrapper">
			<input  class="file-path validate" type="text">
		  </div>
		</div>
	
	</div>
    
		<label>SELECT YOUR AGE:</label>
		<p class="range-field">
		<input type="range" id="test5" min="0" max="80" />
		</p>
	 
	<br/><br/><br/>
	 

    <div class="row">
					<div class="input-feild ">

						<p><h5>SELECT YOUR GENDER:</h5>
							<input name="radio_gen" type="radio" id="male" />
							<label for="male">MALE</label>
						</p>
						<p>
							<input name="radio_gen" type="radio" id="female" />
							<label for="female">FEMALE</label>
						</p>
					</div>
				</div>
	<br/><br/><br/>
	<input type="submit" class="waves-effect waves-light" value="SUBMIT" id="submit">
	</form>

	<footer class="page-footer indigo">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"></h5>
                <p class="grey-text text-lighten-4">THESE PAGE IS INFLUENCED BY OTHER PAGES LIKE LOGICAL INDIAN</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">ADDITIONAL PAGES</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#">OUR FACEBOOK PAGE</a></li>
                  <li><a class="grey-text text-lighten-3" href="#">OUR TWITTER HANDLE</a></li>
                  <li><a class="grey-text text-lighten-3" href="#">OUR YOUTUBE CHANNEL </a></li>
                  <li><a class="grey-text text-lighten-3" href="#">OUR LINKEDIN PAGE</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 REBUILT HUMANITY COMMUNITY
            <a class="grey-text text-lighten-4 right" href="#">OUR PARTNER</a>
            </div>
          </div>
        </footer>
	<script src="script/jquery.js" type="text/javascript"></script>
	<script src="script/jquery_script.js" type="text/javascript"></script>
	<script src="script/script.js" type="text/javascript"></script>
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	</body>
</html>