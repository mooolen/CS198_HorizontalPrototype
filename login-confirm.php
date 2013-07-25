<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == 'student' && $password == 'password') {
		header("Location: student_home.php");
	}
	else if($username == 'teacher' && $password == 'password') {
		header("Location: teacher_home.php");		
	}
	else {
		header("Location: index.php?login_error=1");
	}
	die();

?>