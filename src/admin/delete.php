<?php

include 'database.php';?>
<?php

if(isset($_POST['id']))
{
	$id=$_POST['id'];
	$query="DELETE FROM passform WHERE id='$id'";
	$res=mysqli_query($con,$query);

if($res)
{
	echo "<script>alert('data deleted');</script>";
	header("location:studentpass.php");
}
else
{
	echo "<script>alert('data not deleted');</script>";
	// header("location:index.php");
}
}
?>

