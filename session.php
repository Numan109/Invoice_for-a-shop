<?php
session_start();
	if (!isset($_SESSION['email']) && !isset($_COOKIE['email'])) {
        header('Location: http://localhost/invoice/login.php');	
	}
?>