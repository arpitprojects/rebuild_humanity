		<?php
				//
				if(isset($_POST['username']) && isset($_POST['password'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$pass = md5($password);
						if(!empty($username) && !empty($password)){
						$query = "SELECT `sr_no` FROM `registration` WHERE `user_name` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($pass)."'";
						if($query_run = mysql_query($query)){
								$query_num_rows = mysql_num_rows($query_run);
								if($query_num_rows == 0){
									echo 'invalid username/password';
								}else if($query_num_rows == 1){
									$user_id  = mysql_result($query_run ,0,'sr_no');
									$_SESSION['user_id'] = $user_id;
									header('Location:main.php');
								}
						}
						
					}else{
						echo 'YOU MUST SUPPPLY SOME USERNAME/PASSWORD';
					}
				}
				?>
<?php
	if(logged_fb())
?>
<?php require_once 'fblogin.php';?>

				
				<form method="post" action="" class="col s12">
					<div class="row">
						<div class="input-field col s6">
	
							<input id="icon_prefix" name="username"  type="text" class="validate">
							<label for="icon_prefix">USERNAME</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="pass" type="password" name="password" class="validate">
							<label for="pass">PASSWORD</label>
						</div>
					</div>
			</div></p>
					</div>
					<div class="modal-footer">
					<input type="submit" class="btn btn-default" id="sub" value="SUBMIT HERE!"/>
					</div>
					</div>
				
				</div>
			</div>
			</form>
			