<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>
<html>
<head>
<title><?php echo "$page_title | HelpingTown"; ?></title>  
	<link rel="stylesheet" href="./../Style/testerStyle.css" type="text/css" media="screen" />
</head>
<body>
	<div id="header-cont">
		<a href= "./../Pages/Home.php" >HelpingTown</a>
		<li><a href="./../Pages/About.php" style="font-size:15">About</a></li>
		<li><a href="./../Pages/UserSearch.php" style="font-size:15">User Search</a></li>
		<li><a href="./../Pages/Register.php" style="font-size:15">Register</a></li>
		<?php 
		if($username && $userid) {
		echo "<li><a href='./../Pages/MyProfile.php'style='font-size:15'>$username</a></li>";
		}
		else
			echo "<li><a href='./../Pages/Login.php' style='font-size:15'>Login</a></li>";
	?>
	</div>
	
	
</body>
</html>
