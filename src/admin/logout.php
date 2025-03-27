<?php  
	session_start();
	echo "<script>alert('Logout Your Account')</script>";
	session_destroy();

	echo "<script>window.location='../index-2.php'</script>";


?>



