
<?php
	
//include('header.php');
// remove all session variables
session_unset();
//unset($_SESSION["cart"]);
session_destroy();
//session_destroy($_SESSION["cart"]);



header('Location: ../index2.php');

?>
