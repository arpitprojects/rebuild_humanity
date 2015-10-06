<?php
	include 'includes/head.php';
//head ?>
<?php include 'includes/core.php';
	include 'includes/connect.php';
//database + functions
?>
<?php include 'includes/nav.php';//nav bar?>
<!-- more codes-->
<div class="row">
	<div id="section_user" class="col s10">
		<?php
			if(loggedin()){
		
				echo 'WELCOME'.'<br/>';
				echo 'Name: ' . getuserfield('first_name');
				echo " ";
				echo getuserfield('last_name');
				echo "<br/>";
				echo "Email:".getuserfield('user_name');
				echo "<br/>";
				//echo getuserfield('gender'); 
			if(loggedin()){
					echo "<br/>";
					echo ' <a href="includes/logout.php">LOGOUT</a>';
				}else{
				
				}
			}
			else if(!loggedin()){
				
				echo 'YOU ARE NOT LOGGED IN , PLEASE GO AND LOGIN ';
				?>	
				<a href="index.php"> MAIN PAGE</a>;
			<?php
			}
		?>
	</div>
</div>
<div id="message_set">
<?php
	if(loggedin()){
		$user_id  =getuserfield('sr_no');
		if(isset($_POST['message'])){
			$message = $_POST['message'];
			if(!empty($message)){
				
				$query = "UPDATE `registration` SET `message` = '$message' WHERE `sr_no` = '$user_id'"; 
				if($query_run = mysql_query($query)){
					
					
					echo '<strong>'.'You entered: '.'</strong>'.'<br/>' .$message .'<br/><br/><hr/>' .'MESSAGE SENT SUCESSFULLY TO DATABASE!, it will be set to the site once verified..';
				
				
				
					}
				}else{
					echo 'NOT SET';
			}
		}
	}
 ?>
 	</div>
 <div id="user_input">
    <form class="col s12" method="post" action="user_area.php">
      <div class="row">
        <div class="input-field color-change offset-s2 col s9">
          <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
          <label for="textarea1">WRITE YOUR REVIEW:</label>
        </div>
      </div>
	  <div class="row">
		<div class="col s2">
			<input type="submit" class="waves-effect waves-light cyan-accent-2" id="adjust_button" value="PIN IT" >
			</div>
		</div>
    </form>
  </div>
 </div>


<?php 
	include 'includes/footer.php';//footer
?>
<?php include 'includes/foot.php';?>