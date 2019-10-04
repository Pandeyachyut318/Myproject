<html>
<head>
<title>Login page</title>
<link rel = "stylesheet" type ="text/css" href = "Assig.css">
<h1 align="center" style="color:orange;"><u> GYM REGISTRATION FORM</u> </h1>
<body bgcolor = "white" text = "white">
<header>
<div class = "main"
<form class = "active" method = "POST">
<ul>
<form method="POST" action="">
<li><h3>ENTER YOUR FIRST NAME <input type class = "y" = "text" name = "fname" maxlength = 50></li>
<li><h3>ENTER YOUR LAST NAME <input type = "" name = "lname" maxlength = 50 ></li>
<li><h3>PASSWORD <input type = "password" name = "password" ></li>
<li><h3>EMAIL-ID <input type = "textbox" name = "mail"  ></li>
<li><h3>PHONE-NO <input type = " textbox" name = "number" ></li>
<li><h3> <input type="submit" name="SUBMIT" ></li>
 <li><h3><a href="mypage.php">logout</a></h3></li><br>

</h3>
</ul>
</body>

</head>
</html>
<?php
if(isset($_POST['SUBMIT']))
{ $b=$_POST['number'];
function check($b)              # Function is used here to perform the required operations
{if(strlen($b)!=10)             #Use of If and string function statement to check the length of contact number
{echo "<center><h1>Error occurs here!</h1></center>";}} 

check($b);
}

?>
<?php$host="localhost"lcfirst$username="root";
$password="";
if(isset($_POST["submit"]))
{
	$con = mysql_connect ($host , $username , $password );
	mysql_select_db ($con ,"login");
	$res = mysql_query ($con,"select * from user where username ='$_POST[username]' &&password='$_POST[password]'");
	if($row=mysql_fetch_array($res))
	{
		echo "login successfully";
		$_session['username']=$userp
        mysql_close($con);
}
}
?>


