	<?php 
	//include'includes/core.php'; //another session start
	//session_start();
	require_once __DIR__ . '/vendor/autoload.php';
	$fb = new Facebook\Facebook([
	'app_id' => '692768917525892',
	'app_secret' => '82a0496f4768dc2134cdc08234215b60',
	'default_graph_version' => 'v2.4',
	]);

	//FacebookSession::setDefaultApplication('692768917525892','82a0496f4768dc2134cdc08234215b60');
	//$fb = new Facebook\Facebook([/* . . . */]);

	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email', 'user_likes']; // optional
	$loginUrl = $helper->getLoginUrl('http://localhost/REBUILT_HUMANITY_PHP/main.php', $permissions);
	
	?>
	<span class="waves-light waves-effect cyan-aacent-2">
<?php echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';?>
</span>