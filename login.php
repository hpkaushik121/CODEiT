<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "competition");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}else{
if(isset($_REQUEST['password'])){
	$roll=$_REQUEST['roll'];
	$password=$_REQUEST['password'];
	$sql = "SELECT * FROM user WHERE roll='$roll' and password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) ==1){
			$r=mysqli_fetch_array($result, MYSQLI_ASSOC);
			$id=$r['id'];
			$_SESSION['id']=$id;
			header("Location:profile.php?id=$id");
		}else{
			echo "<script>alert('sorry wrong answer');window.location='log.html';</script>";
		}
}
else{
	
	echo'no';
}
}

?>