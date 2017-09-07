<?php

// A list of permitted file extensions
session_start();
if(isset($_SESSION['id'])){
	$id=$_REQUEST['id'];
	$trueid=$_SESSION['id'];
	if($id == $trueid){
$allowed = array('out');

$ques=$_REQUEST['q'];
$data=$_REQUEST['data'];
$pts=$_REQUEST['pts'];
$db = mysqli_connect("localhost", "root", "", "competition");

		

		
		
if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0){

	$extension = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo "<script>alert('only .out extension file can be submitted');window.location = 'profile.php?id=$id'</script>";
		
	}
	$dir = 'uploads/'.$id.'/'.$ques;
	if(file_exists($dir) && is_dir($dir)){
		
	}else{
		$path = 'uploads/'.$id.'/'.$ques;
mkdir($path, 0777, true);
	}
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'uploads/'.$id.'/'.$ques.'/'.$_FILES['fileToUpload']['name'])){
		
		
	}
	
	if( $ques=='1'){
		if($data=='small'){
	$file=file("1_small.out");
		}
		if($data=='large'){
		$file=file("1_large.out");
	}
	}
	
	if($ques=='2'){
		$file=file("ques_2.out");
	}
	if( $ques=='3'){
		if($data=='small'){
	$file=file("3_small.out");
		}
		if($data=='large'){
		$file=file("3_large.out");
	}
	}
	if( $ques=='4'){
		if($data=='small'){
	$file=file("4_small.out");
		}
		if($data=='large'){
		$file=file("4_large.out");
	}
	}
$file1=file('uploads/'.$id.'/'.$ques.'/'.$_FILES['fileToUpload']['name']);
if($file==$file1){
	if($data=='small' && $ques!='2'){
	$sql7 = "UPDATE check_q SET q_small$ques ='$pts' WHERE user_id='$id'";
if(mysqli_query($db, $sql7)){
	
}
	}
	if($data=='large'&& $ques!='2'){
	$sql2 = "UPDATE check_q SET q_large$ques='$pts' WHERE user_id='$id'";
if(mysqli_query($db, $sql2)){
	
}
	}
	if($ques=='2'){
		$sql5 = "UPDATE check_q SET q$ques ='$pts' WHERE user_id='$id'";
if(mysqli_query($db, $sql5)){
	
}
	}
	$_SESSION['id']=$id;
	$sql = "UPDATE check_q SET ques_$ques='yes' WHERE user_id='$id'";
if(mysqli_query($db, $sql)){
	
	$_SESSION['id']=$id;
	echo "<script>alert('correct answer!!');;window.location = 'profile.php?id=$id';</script>";
}
}else{
	$sql = "UPDATE check_q SET ques_$ques='no' WHERE user_id='$id'";
if(mysqli_query($db, $sql)){
		$sql = "UPDATE check_q SET panelty=(panelty+10) WHERE user_id='$id'";
if(mysqli_query($db, $sql)){
	echo "<script>alert('sorry wrong answer');window.location = 'profile.php?id=$id';</script>";
}
		
	
}
}$sql12 = "UPDATE check_q SET total=q_small1+q_large1+q2+q_small3+q_large3+q_small4+q_large4-panelty WHERE user_id='$id'";
		if(mysqli_query($db, $sql12)){
	
}
}
}else{
	echo "<script>alert('don't try this again ');window.location = 'profile.php?id=$id';</script>";
}
}else{
	echo "<script>alert('don't try this again its against the rules next time you will be disqualified');window.location = 'profile.php?id=$id';</script>";
}?>
