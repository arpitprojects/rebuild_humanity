<?php include 'includes/head.php';?>
	<!--CODE HERE-->
	<?php include 'includes/connect.php';
			include 'includes/core.php';
	?>
		<div class="row">
			<div class="tog col s12">
				<nav class="cyan accent-4">
					<i id="align" class="small material-icons">search</i>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="cola col s12">
				<input type="search" id="search" value="SEARCH POSTS "  required/>
			</div>
		</div>
		<!-- official logo part -->
		<div class="row">
			<div class="col s7">
				<img src="images/REBUIT.jpg" height="200" width="1000" id="logo1"/>
			</div>
			<div class="offset-col1 col s2">
				
				<?php if(loggedin() || logged_fb()){
						echo 'YOU ARE LOGGED IN. <a href="includes/logout.php">LOGOUT HERE!</a>';
					?>
					</div>
					<br/>
					<span id="adjust_name"><!-- used to adjust the name as shown in website as hello arpit-->
						
							<div class="col s7 m4">
							<button class="cyan accent-4 waves-effect waves-light" onclick="Materialize.toast('WELCOME USER', 4000) ">
							<?php echo 'WELCOME'.'<BR/>'. getuserfield('first_name');
								echo " ";
								echo getuserfield('last_name');
							?>
							
							</div>
					</span>
					<?php
					} 	
					//echo getfeild();
				
					?>
			
		</div>
		<?php include 'includes/nav.php';?>
		<div id="shift">
			<div class="row">
				<div class="col s2">
					<div id="follow" class="">
						<ul id="list" class="">
							<li id="follow1"><img id="follow1" height="50" width="50" class="waves-effect waves-light" src="images/fb1.png" onclick="imageclick('http://www.facebook.com/abhishek2512')" onmouseover="this.src='images/fb.png'" onmouseout="this.src='images/fb1.png'"></li>
							<li id="follow2"><img id="follow2" height="50" width="50" src="images/you1.png" onclick="imageclick('http://www.youtube.com')" onmouseover="this.src='images/you.png'" onmouseout="this.src='images/you1.png'"></li>
							<li id="follow3"><img id="follow3" height="50" width="50" src="images/twi1.png" onclick="imageclick('http://www.twitter.com')" onmouseover="this.src='images/twi.png'" onmouseout="this.src='images/twi1.png'"></li>
							<li id="follow4"><img id="follow4" height="50" width="50" src="images/link1.png" onclick="imageclick('http://www.linkedin.com')" onmouseover="this.src='images/link.png'" onmouseout="this.src='images/link1.png'"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php include 'includes/first_post1.php';?> <!-- INCLUDED FIRST POST -->
	<div class="card-action">
		<a href="first_post.php"><span class="enla" id="colori">CLICK TO SEE THE WHOLE POST!</span></a>
		
	</div>
	<?php include 'includes/first_post2.php';?>
	<div id="last_section">
		<div class="row">
			<div class="col 3">
				<img src="images/1.png" alt="first" width="310" height="310">
				<p id="setu">YOU MUST NOT LOSE FAITH IN HUMANITY.HUMANITY IS AN 
				OCEAN;IF FEW DROPS OF OCEAN ARE DIRTY,THE OCEAN DOESNT BECOME 
				DIRTY.<br> -MAHATMA GANDHI</p>
			</div>
			<div class=" col 3">
				<img src="images/2.png" alt="first" width="310" height="310">
				<p id="setu1"> WE CAN'T HELP EVERYONE , BUT EVERYONE CAN HELP SOMEONE.<br>-RONALD REAGAN</p>
			</div>
			<div class="col 3">
				<img src="images/3.png" alt="first" width="310" height="310">
				<p id="setu2">IF U CAN'T FIND FAITH IN HUMANITY, BE THE FAITH IN HUMANITY.<br> -QUOTESPICTURES.NET</p>
			</div>
			<div class="col 3">
				<img src="images/4.png" alt="first" width="310" height="310">
				<p id="setu3"> BEING HUMAN IS GIVEN,BUT KEEPING OUR HUMANITY IS OUR CHOICE.<br>-QUOTATIONOF.COM </p>
			</div>
		</div>
	</div>
<?php include 'includes/footer.php'?>
	
	<?php include 'includes/foot.php';