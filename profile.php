<?php
session_start();
if(isset($_SESSION['id'])){
	$id=$_REQUEST['id'];
$trueid=$_SESSION['id'];
if($id != $trueid){
	session_destroy();
 header("Location: profile.php");
}if($id== $trueid){
	$db = mysqli_connect("localhost", "root", "", "competition");
$sql = "SELECT * FROM user where id = '$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$sql2 = "SELECT * FROM check_q where user_id = '$id'";
$result2 = mysqli_query($db, $sql2);
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
}
}


?>
<?php
if (isset($_SESSION['id'])){
$db1 = mysqli_connect("localhost", "root", "", "competition");
$sql1 = "SELECT * FROM check_q where user_id = '$id'";
$result1 = mysqli_query($db1, $sql1);
$r = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$que1=$r['ques_1'];
$que2=$r['ques_2'];
$que3=$r['ques_3'];
$que4=$r['ques_4'];
}
?>


<html>

<head>
<title>CODE IT!!!</title><link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <meta charset="UTF-8">
    <meta name="description" content="Free Responsive HTML5 CSS3 Coming Soon Template by CodePassenger">
    <meta name="author" content="CodePassenger">
    <meta name="authorUrl" content="http://CodePassenger.Com">
    
    <!-- Mobile Specific Meta -->   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/TimeCircles.css">

    <!-- Font Awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Added google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Lobster|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!--Fav and touch icons-->
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/icons/apple-touch-icon-114x114.png">
</head>
<style>
body {
    background-color:#222534 /*#6F6349*/;
    text-align: center;
    font-family: 'Shadows Into Light', cursive;
    font-size: 16px; 
	overflow-x:hidden;
    color: white;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  box-shadow: 0px 10px 50px #888888;
}
.topnav .icon {
  display: none;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 6px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav b {
  float: right;
  text-align: center;
  padding: 5px 8px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  color: green;
}

.topnav a.active {
    color: green;
}
#loginbox {
    margin-top: 30px;
}

#loginbox > div:first-child {        
    padding-bottom: 10px;    
}

.iconmelon {
    display: block;
    margin: auto;
}

#form > div {
    margin-bottom: 25px;
}

#form > div:last-child {
    margin-top: 10px;
    margin-bottom: 10px;
}

.panel {    
    background-color: transparent;
}

.panel-body {
    padding-top: 30px;
    background-color: rgba(2555,255,255,.3);
}

#particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;                        
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -2;
}

.iconmelon,
.im {
  position: relative;
  width: 150px;
  height: 150px;
  display: block;
  fill: #525151;
}

.iconmelon:after,
.im:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}







/*navbar*/
 .animate {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}

	
 .destacados{
    padding: 70px 0;
    text-align: center;
  
}   
.destacados > div:hover > div{
    margin-top: -10px;
    	
	transition: 0.5s;
}
.box1 {
    /* See "NOTE 3" */
    position:absolute;
    z-index:1;
    width:90%;
    padding:20px;
     border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
	background: rgba(200, 200, 200, 0.1);
        border-radius: 4px;
}

.box1 h3 {
    position:relative;
    padding:10px 30px;
    margin:0 -30px 20px;
    font-size:28px;
    line-height:32px;
    font-weight:bold;
    text-align:center;
    color:#fff;
    /*background:#cc0000;*/
    /* css3 extras */
        background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%);
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* For Firefox 3.6 to 15 */
    background: linear-gradient(90deg, #2caab3 0%, #2c8cb3 100%); /* Standard syntax (must be last) */
    text-shadow:0 1px 1px rgba(0,0,0,0.2);
    -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.2);
       -moz-box-shadow:0 1px 1px rgba(0,0,0,0.2);
            box-shadow:0 1px 1px rgba(0,0,0,0.2);
    /* See "NOTE 1" */
    zoom:1;
}

.box1 h3:before,
.box1 h3:after {
    content:"";
    position:absolute;
    /* See "NOTE 2" */
    z-index:-1;
    top:100%;
    left:0;
    border-width:0 9px 10px 0;
    border-style:solid;
    border-color:transparent #B7B3B3;
}
ul     	     {
		list-style: none;
	     }
ul li:before {
		content: "\00BB \0020";
	     }

.box1 h3:after {
    left:auto;
    right:0;
    border-width:0 0 10px 9px;
}


/*#87A800    #647D01*/




</style>
<body>

  

<div id="asd">
  
 <?php if (isset($_SESSION['id'])):?>
 <div class="topnav">
  <a href="#news"><?php  echo $row['name']; ?></a>
  <a href="#news" style="float:right">score:<?php  echo $row2['total']; ?></a>
 </div>
 <canvas id="connect"></canvas>
 <div style="margin-left:65px;">  

  		<div class="box1">
		<?php if ($que1==''):?>
    		<img src="" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que1=='yes'):?>
			<img src="ok.png" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que1=='no'):?>
			<img src="wrong.png" class="img-circle img-thumbnail">
			<?php endif;?>
                 <br /> <br /> 
          <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Question 1. The fight (100pts.)</a></h2>
		  
		  <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">You are incharge of the workshop at mahavir swami institute of technology. You attend a lecture of n students and you have D number of machines
in workshop and students work on machines by exchanging them
if 'A' student like to work on B's machine and B like to work on A's machine they will exchange them
Let us consider another case , that if A liked B's machine, B liked C's machine and C likes A's machine
So they can exchange them with each other in order to get which they like. These groups of exchanging can have 
more then three students as well.But usually this sort of an exchanging arrangment ends up in fight, as a number
of student in the group do not get the machine they like and have to stick with the original machine
you are little worried the amount of fighting that has been going on in the workshoop everyday.
So, you make a plan such that he got to know in advance that which group will fight 
that will allow you to resolve the matter immediately.hance preventing the other group from getting distracted and disturbed
So, your task is to print 'YES' if fight can be stopped and 'NO' if fight cannot be stopped.
<br>
<br>
Note:no student like the machine they have.
<hr></hr>
<h1 >INPUT</h1>
first line of input will have integer 'T' number of test cases
The first line of each test case has two integers: N , the number of studets, and D, the total number of
machines.
<br>
<br>
The D lines that  have two integers, A and B, indicating that student A likes the machine that student B got.
<hr></hr>
<h1 >OUTPUT</h1>
'YES' if fight can be stopped and 'NO' if fight cannot be stopped
<hr></hr>
<h1>Constraints</h1>
2 <= T <= 1 X 10<sup>9</sup><br>
2 <= N <= 10000<br>
1 <= D <=20000<br>
0 <= A, B < N<br>
<hr></hr>
<h1>Sample Test Case</h1>
Input:<br>
1<br>
3 3<br>
0 1<br>
1 2<br>
2 0<br>
Output:<br>
YES<br>
 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Small dataset</button>
  <div id="demo1" class="collapse">
    <a href="1_small.in" download>download 1_small_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=1&data=small&pts=40"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
  
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">large dataset</button>
  <div id="demo" class="collapse">
    <a href="1_large.in" download>download 1_large_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=1&data=large&pts=60"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
</div>

      </div>
        
		
    		<?php if ($que2==''):?>
    		<img src="" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que2=='yes'):?>
			<img src="ok.png" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que2=='no'):?>
			<img src="wrong.png" class="img-circle img-thumbnail">
			<?php endif;?>
                 <br /> <br /> 
    
          <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Question 2. The Event</a></h2>
		  <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body">An event is orgranised at MVSIT for first year students to sharpen their chemistry skills. In this event 
		students have to make a sample of sulphuric acid(H<sub>2</sub>SO<sub>4</sub>) and on the basis of content in the sulphuric acid
		students are graded.<br> Parameters are as follows:
		<br>
		<br>
		<ul >
		<li >Hydrogen must be greater then 50</li>
		<li>Sulphur content must be less then 0.7</li>
		<li>Oxygen content must be greater then 5600</li>
		</ul>
		<br>
		<br>
		Grades are as follows:
		<br>
		<br>
		<ul>
		<li>Grade is A+ if all three conditions are met.</li>
		<li>Grade is A if conditions (i) and (ii) are met.</li>
		<li>Grade is B+ if conditions (ii) and (iii) are met.</li>
		<li>Grade is B if conditions (i) and (iii) are met.</li>
		<li>Grade is C if only one condition is met.</li>
		<li>Grade is F  if none of three conditions are met.</li>
		</ul>
		Help your college by writing a programme, if a student gives the values of hydrogen,sulphur,oxygen of the acid under 
		consideration and display the grade.
		<hr></hr>
		<h1>INPUT</h1>
		The first line of input contains the number of test cases 'T'
		<br>each line of test cases contains thress integers the values of hydrogen, sulphur and oxygen
		<hr></hr>
		<h1>OUTPUT</h1>
		Print the grade of the acid depending upon the Conditions.
		<hr></hr>
		<h1>Constraints</h1>
		1 ≤ T ≤ 1000<br>
1≤ hydrogen, sulphur, oxygen ≤ 10000
<hr></hr>
		<h1>Example</h1>
		<b>Input</b>
<br>
3 <br>
53 0.6 5602<br>
45 0 4500<br>
0 0 0 <br>
<b>Output</b>
<br>
A+<br>
C<br>
C<br>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo11">Small dataset</button>
  <div id="demo11" class="collapse">
    <a href="ques_2.in" download>download dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=2&data=&pts=50"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
		</div>
      </div>
        
		<?php if ($que3==''):?>
    		<img src="" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que3=='yes'):?>
			<img src="ok.png" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que3=='no'):?>
			<img src="wrong.png" class="img-circle img-thumbnail">
			<?php endif;?>
                 <br /> <br /> 
    
          <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Question 3. The Security</a></h2>
		  <div id="collapse3" class="panel-collapse collapse in">
        <div class="panel-body">You are working in a cyber security company which provides the security softwares.A customer has demanded
		for the software details of the software is given as: A big positive integer is given as input say 'num' and any two digits can be selected from this number
		(the digits can be same but their position must be different) and order them in any possible way.for each of the way it creats a two
		digits number Then, it will pick a character corresponding to the ASCII value equal to this number, 
		i.e. the number 65 corresponds to 'A', 66 to 'B' and so on till 90 for 'Z'. You are directed to provide which of the 
		characters in the range 'A' to 'Z' can possibly be picked this way.
		<hr></hr>
		<h1>INPUT</h1>
		The first line of the input contains an integer T denoting the number of test cases.
<br>
<br>
The first line of the input contains an integer num
<hr></hr>
<h1>OUTPUT</h1>
For each test case, output a string containing characters Chef can pick in <b>sorted order </b>
If the resulting size of string is zero, you should output a new line.
<hr></hr>
<h1>Constraints</h1>
1 ≤ T ≤ 10<br><br>
1 ≤ N ≤ 10<sup>100000</sup><br>
<hr></hr>
<h1>Example</h1>
<b>Input:</b><br>
4<br>
65<br>
566<br>
11<br>
1623455078<br>
<br>
<b>Output:</b><br>
A<br>
AB<br>
<br>
ACDFGHIJKLNPQRSTUVW
<hr></hr>
<h1>Explanation</h1>
<b>Example case 1.</b> Inputs are digits 6 and 5 and create integers 56 and 65. The integer 65 corresponds to 'A'.
<br><br>
<b>Example case 2.</b> inputs are digits 6 and 5 and create 'A' as it equals 65. Inputs can be 6 and 6 (they are picked from position 2 and position 3, respectively) to create 'B' too. Hence answer is "AB".
<br><br>
<b>Example case 3.</b> It's not possible to create any character from 'A' to 'Z'. Hence, we just print a new line.
<br>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo21">Small dataset</button>
  <div id="demo21" class="collapse">
    <a href="3_small.in" download>download 3_small_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=3&data=small&pts=40"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#dem2">large dataset</button>
  <div id="dem2" class="collapse">
    <a href="#new">download q1_large_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=3&data=large&pts=60"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
</div>
      </div>
        
		<?php if ($que4==''):?>
    		<img src="" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que4=='yes'):?>
			<img src="ok.png" class="img-circle img-thumbnail">
			<?php endif;?>
			<?php if($que4=='no'):?>
			<img src="wrong.png" class="img-circle img-thumbnail">
			<?php endif;?>
                 <br /> <br /> 
    
          <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Question 4. Bit Patterns</a></h2>
		  <div id="collapse4" class="panel-collapse collapse in">
        <div class="panel-body">Sameer is fed up of playing video games And he likes to play with bit patterns
		So, he decided to design a game in such a way that he has to enter a bit pattern and in the output he will
		get the down stream characters and up stream character as described below and in the same order 
		as detailed below <br>
		<br>
		<table>
  <tr>
    <th>Bit Patterns</th>
    <th>Down-Stream characters</th>
    <th>Up-Stream characters</th>
  </tr>
  <tr>
    <td>00000</td>
    <td><</td>
    <td>></td>
    
  </tr>
  <tr>
    <td>00001</td>
    <td>T</td>
    <td>5</td>
  </tr>
  <tr>
    <td>00010</td>
    <td>*</td>
    <td>@</td>
  </tr>
  <tr>
    <td>00011</td>
    <td>O</td>
    <td>9</td>
  </tr>
  <tr>
    <td>00100</td>
    <td>Space</td>
    <td>Space</td>
  </tr>
  <tr>
    <td>00101</td>
    <td>H</td>
    <td>%</td>
  </tr>
   <tr>
    <td>00110</td>
    <td>N</td>
    <td>,</td>
  </tr>
   <tr>
    <td>00111</td>
    <td>M</td>
    <td>.</td>
  </tr>
   <tr>
    <td>01000</td>
    <td>=</td>
    <td>+</td>
  </tr>
   <tr>
    <td>01001</td>
    <td>L</td>
    <td>)</td>
  </tr>
   <tr>
    <td>01010</td>
    <td>R</td>
    <td>4</td>
  </tr>
   <tr>
    <td>01011</td>
    <td>G</td>
    <td>&</td>
  </tr>
   <tr>
    <td>01100</td>
    <td>I</td>
    <td>8</td>
  </tr>
   <tr>
    <td>01101</td>
    <td>P</td>
    <td>0</td>
  </tr>
   <tr>
    <td>01110</td>
    <td>C</td>
    <td>:</td>
  </tr>
   <tr>
    <td>01111</td>
    <td>V</td>
    <td>;</td>
  </tr>
   <tr>
    <td>10000</td>
    <td>E</td>
    <td>3</td>
  </tr>
   <tr>
    <td>10001</td>
    <td>Z</td>
    <td>~</td>
  </tr>
   <tr>
    <td>10010</td>
    <td>D</td>
    <td>$</td>
  </tr>
   <tr>
    <td>10011</td>
    <td>B</td>
    <td>?</td>
  </tr>
   <tr>
    <td>10100</td>
    <td>S</td>
    <td>#</td>
  </tr>
   <tr>
    <td>10101</td>
    <td>Y</td>
    <td>6</td>
  </tr>
   <tr>
    <td>10110</td>
    <td>F</td>
    <td>!</td>
  </tr>
   <tr>
    <td>10111</td>
    <td>X</td>
    <td>/</td>
  </tr>
   <tr>
    <td>11000</td>
    <td>A</td>
    <td>-</td>
  </tr>
   <tr>
    <td>11001</td>
    <td>W</td>
    <td>2</td>
  </tr>
   <tr>
    <td>11010</td>
    <td>J</td>
    <td>,</td>
  </tr>
   <tr>
    <td>11011</td>
    <td>U</td>
    <td>7</td>
  </tr>
   <tr>
    <td>11100</td>
    <td>Q</td>
    <td>1</td>
  </tr>
   <tr>
    <td>11101</td>
    <td>K</td>
    <td>(</td>
  </tr>
  
</table>
<b>NOTE: Bit pattern will be of length 5 only suppose if entered input is 1110100000
then 110100 will not be counted as a bit pattern </b>
<br><br>
suppose bit pattern entered is 1110100000 then the down-stream chracter will be k< but after sorting
according to the table output will be <</>k help sameer to design this game as he is busy in preparing for his exams
<br><br>
<hr></hr>
<h1>INPUT</h1>
first line of input contains the number of test cases T
<br>
first and only line of each test case is the bit pattern<br>
<hr></hr>
<h1>OUTPUT</h1>
first line of output showing the sorted down stream character <br>
second line of output showing the sorted up stream character <br>
<hr></hr>
<h1>Example</h1>
<b>INPUT:</b><br>
3<br>
1110100001<br>
00000111010001<br>
000001110100001<br>
<b>OUTPUT:</b><br>
TK<br>
5(<br>
<</>k<br>
>(<br>
<</>TK<br>
>5(<br>
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo12">Small dataset</button>
  <div id="demo12" class="collapse">
    <a href="4_small.in" download>download 4_small_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=4&data=small&pts=50"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">large dataset</button>
  <div id="demo3" class="collapse">
    <a href="4_large.in" download>download 4_large_dataset.in</a><br><br>
	<form id="upload"method="post" action="upload.php?id=<?php echo $_REQUEST['id'];?>&q=4&data=large&pts=100"  enctype="multipart/form-data">
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
	</form>
  </div>
</div>
      </div>
       
		</div>
  	</div>
	
	</div>
<div style=" height:400px;margin-top:7000px;" id="count-down" data-date="2017-09-06 16:10:00">
                                        
                                    </div>
			<?php else:?>
			<canvas id="connect"></canvas>
			<div style=" height:400px;" id="count-down" data-date="2017-09-06 16:10:00">
                                        
                                    </div>
			<?php endif;?>



<script>
'use strict'

let map = (val, a1, a2, b1, b2) => b1 + (val - a1) * (b2 - b1) / (a2 - a1)

class Connect {
  constructor() {

    // user config ---
    this.text = 'CodeiT'
    this.font = 'Source Sans Pro' // loaded via Google Font API

    this.spacing = 17 // multiplier for upscaling the text
    this.sharpness = 17 // scalles down when to big for screen
    this.sharpnessMinimum = 14
    this.innerMaxLength = 30 
    this.outerMaxLength = 80 
    this.mouseClear = 120

    // --- end config

    this.bounds = {
      top: 1,
      left: 1,
      right: 0,
      bottom: 0
    }

    this.mouse = {
      on: false,
      x: 0,
      y: 0
    }

    this.dots = []
    this.oldKey = 0
    this.resize()

    // add some random particles
    let colorCounter = 0
    let randomCount = this.width * this.height / 10000 | 0
    for (let i = 0; i < randomCount; i++) {
      this.dots.push(
        new Dot(
          Math.random() * this.width | 0,
          Math.random() * this.height | 0,
          (this.colorCounter += 2) < 360 ? this.colorCounter : this.colorCounter = 0,
          false
        )
      )
    }

    // add text particles
    this.addText()

  }

  resize() {
    this.width = canvas.width = window.innerWidth
    this.height = canvas.height = window.innerHeight

    this.bounds.right = this.width - 1
    this.bounds.bottom = this.height - 1
  }

  onMove(evt) {
    this.mouse.on = true

    this.mouse.x = evt.clientX || evt.touches && evt.touches[0].pageX
    this.mouse.y = evt.clientY || evt.touches && evt.touches[0].pageY
  }

  onLeave(evt) {
    this.mouse.on = false
  }

  update() {
    ctx.clearRect(0, 0, this.width, this.height)

    this.newKey = this.oldKey + 1
    if (this.newKey > 100000) this.newKey = 0

    for (let i = 0, dot1; dot1 = this.dots[i]; i++) {
      let mouseNear = this.mouse.on &&
        Math.abs(dot1.x - this.mouse.x) < this.mouseClear &&
        Math.abs(dot1.y - this.mouse.y) < this.mouseClear

      for (let j = i + 1, dot2; dot2 = this.dots[j]; j++) {

        // is this particle inside the text, than update its framekey (unless already done)
        if (dot1.in != this.newKey &&
          Math.abs(dot1.x - dot2.origX) <= this.spacing &&
          Math.abs(dot1.y - dot2.origY) <= this.spacing) dot1.in = this.newKey

        // should these dots be connected..?
        let xDiff = Math.abs(dot1.x - dot2.x) 
        let yDiff = Math.abs(dot1.y - dot2.y)

        if (!mouseNear &&
           ((!dot1.protect && !dot2.protect && xDiff < this.outerMaxLength && yDiff < this.outerMaxLength) || 
           (xDiff < this.innerMaxLength && yDiff < this.innerMaxLength))) {

          let gradient = ctx.createLinearGradient(dot1.x, dot1.y, dot2.x, dot1.y)
          gradient.addColorStop(0, 'hsla(' + dot1.color + ',100%,50%,' + map((xDiff+yDiff)/.5,0,70,1,0.3) + ')')
          gradient.addColorStop(1, 'hsla(' + dot2.color + ',100%,50%,' + map((xDiff+yDiff)/2,0,70,1,0.1) + ')')

          ctx.beginPath()
          ctx.moveTo(dot1.x, dot1.y)
          ctx.lineTo(dot2.x, dot2.y)
          ctx.strokeStyle = gradient
          ctx.lineWidth = dot1.radius / 2
          ctx.stroke()

        }

      }
    }

    this.oldKey = this.newKey

    // call all the dots update method
    for (let dot of this.dots) dot.update(this.oldKey, this.bounds)

  }

  // this makes sure that the font is loaded
  addText() {
    
		let _self = this

		let link = document.createElement('link')
		link.rel = 'stylesheet'
		link.type = 'text/css'
		link.href = 'https://fonts.googleapis.com/css?family=' + this.font.split(' ').join('+')
		document.getElementsByTagName('head')[0].appendChild(link)

		let xhr = new XMLHttpRequest()
		xhr.open('GET', link.href)
		xhr.onload = () => _self.buildText()
		xhr.onerror = () => (_self.font = 'arial') & _self.buildText()
		xhr.send()

  }

  // Creates a new canvas, writes text in in and provids a filling for all these dots
  buildText() {
    if (this.text.length === 0) return
      // space the letters out, so the arn't to close
    let spacyText = this.text.split('').join(' ')

      // create another canvas
    let textCanvas = document.createElement('canvas');
    textCanvas.width = this.sharpness * spacyText.length
    textCanvas.height = this.sharpness + this.sharpness / 4

    let textCtx = textCanvas.getContext('2d')
      // red since later we only take the first set of pixel anyway, but other colors  wouldn't hurt either
    textCtx.fillStyle = '#f00'
    textCtx.font = 'bold ' + this.sharpness + 'px ' + this.font
    textCtx.fillText(spacyText, 0, this.sharpness)

    let width = textCtx.measureText(spacyText).width | 0
      // scale down when to big
      // * this.spacing because we scale it up later
    if (width * this.spacing > this.width && this.sharpness > this.sharpnessMinimum) {
      --this.sharpness
      return this.buildText()
    }

    // fill the dots into the real dots array
    let colorCounter = 0
    let leftOffset = Math.max(0, (this.width - width * this.spacing) / 2 | 0)
    let topOffset = Math.max(0, (this.height - (this.sharpness + this.sharpness / 4) * this.spacing) / 2 | 0)

    // get the all canvas pixel values(jump 4 as there are always 4 values(red,green,blue,alpha))
    // take the red and create a dot (true = there was a colored pixel)
    let data = []
    let canvasData = textCtx.getImageData(0, 0, width, this.sharpness + this.sharpness / 4).data
    for (let i = 0; i < canvasData.length; i += 4) {
      // there is a colored pixel
      if (canvasData[i]) {
        let ii = i >> 2
        // push a new dot, also scale it up and set a color
        this.dots.push(
          new Dot(ii % width * this.spacing + leftOffset,
            (ii / width | 0) * this.spacing + topOffset,
            ii % width * this.spacing * 0.3,
            true
          )
        )
      }

    } // end for loop

  }

}

class Dot {
  constructor(x, y, color, protect) {
    this.origX = x
    this.origY = y
    this.x = x
    this.y = y

    this.vx = (Math.random() - 0.5) * 2
    this.vy = (Math.random() - 0.5) * 2

    this.radius = (Math.random() + 0.8) * 1.5
    this.internalColor = 'hsla(' + color + ',100%,50%,' + this.radius * 0.4 + ')'
    this.color = color

    this.protect = protect

    this.swipSwap = false
    this.inSwip = true
  }

  update(oldKey, bounds) {

    ctx.beginPath()
    ctx.fillStyle = this.internalColor
    ctx.arc(this.x, this.y, this.radius, 0, 6, false)
    ctx.fill()

    if (this.y < bounds.top || this.y > bounds.bottom) return this.y += this.vy = -this.vy
    if (this.x < bounds.left || this.x > bounds.right) return this.x += this.vx = -this.vx

    this.swipSwap = !this.swipSwap

    if (this.protect && this.in >= oldKey) { // it is still indside the text
      this.inSwip = true

      if (Math.abs(this.x - this.origX) > 10 ||
        Math.abs(this.y - this.origY) > 10) {
        if (!this.swipSwap) this.vx = -this.vx
        else this.vy = -this.vy
      }

      if (this.swipSwap) this.x += this.vx * 0.4
      else this.y += this.vy * 0.4

    } else {
      // if it was inside a text but left now
      if (this.inSwip && this.protect && Math.random() < 0.995) {
        if (!this.swipSwap) this.x += this.vx = -this.vx
        else this.y += this.vy = -this.vy
      } else this.protected = false

      this.inSwip = false

      if (this.swipSwap) this.x += this.vx
      else this.y += this.vy
    }

  }

}

let canvas = document.getElementById('connect')
let ctx = canvas.getContext('2d')

let connect = new Connect

canvas.onmousemove = (evt) => connect.onMove(evt)
canvas.onmouseleave = (evt) => connect.onLeave(evt)
canvas.ontouchstart = (evt) => connect.onMove(evt)
canvas.ontouchmove = (evt) => connect.onMove(evt)

window.onresize = () => connect.resize()

;(function update() {
  requestAnimationFrame(update)
  connect.update()

}())
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/TimeCircles.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript">
    	$(function() {
				// Invoke the plugin
				$('input, textarea').placeholder();
			});
    </script>
    <script>
      $("#count-down").TimeCircles(
       {   
           circle_bg_color: "#8a7f71",
           use_background: true,
           bg_width: 1.0,
           fg_width: 0.02,
           time: {
                Days: { color: "#fefeee" },
                Hours: { color: "#fefeee" },
                Minutes: { color: "#fefeee" },
                Seconds: { color: "#fefeee" }
            }
       }
    );

    </script>
    <script>

// Set the date we're counting down to
var countDownDate = new Date("Sep 9, 2017 16:10:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    
	
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
		
		window.location="end.html";
    }
}, 1000);
</script>

</body>
</html>