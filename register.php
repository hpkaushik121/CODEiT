<?php
$db = mysqli_connect("localhost", "root", "", "competition");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}else{
if(isset($_POST['q1'] )){
	$name=$_POST['q1'];
	$roll=$_POST['q2'];
	$college=$_POST['q3'];
	$sem=$_POST['q4'];
	$pass=$_POST['q5'];
	$sql = "INSERT INTO user(name, college,roll,branch_sem,password) VALUES('$name', '$college', '$roll','$sem','$pass')";
			if(mysqli_query($db, $sql)){
				$sql1 = "SELECT * FROM user WHERE roll='$roll'";
		$result = mysqli_query($db, $sql1);
		if (mysqli_num_rows($result) ==1){
			$r=mysqli_fetch_array($result, MYSQLI_ASSOC);
			$id=$r['id'];
				$sql = "INSERT INTO check_q(user_id) VALUES('$id')";
			if(mysqli_query($db, $sql)){
			}}}else{
				echo "<script> alert('something is wrong!!');</script>" ;
			}
	
	
}else{
	
	echo"something went wrong";
}
}
?>