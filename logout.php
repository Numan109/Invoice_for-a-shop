<?php
	session_start();
	session_destroy();
	unset($_COOKIE['email']);
	setcookie('email',$email, time()-60);
	header('Location: http://localhost/invoice/login.php');	

?>