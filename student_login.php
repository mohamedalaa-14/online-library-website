<?php
include "connection.php";
include "navbar.php";

?>


<!DOCTYPE html>
<html>
<head>
<title>Student login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
section
{
margin-top:-20px;
}
</style>
</head>
<body>
<section>
<div class="log_img">
<br><br><br>
<div class="box2">
<h1 style="text-align:center;font-size:35px;font-family:lucida console;">My Book library online</h1>
<h1 style="text-align:center;font-size:25px;">user login<h1>
<form name="login" action="" method="post">
<div class="login">
<input class="form-control" type="text" name="username" placeholder="username" required="please fill this"><br>
<input class="form-control" type="password" name="password" placeholder="password" required="please fill this"><br>

<input class="btn btn-default"type="submit" name="submit" value="sign in" style="color:black;width:70px;height:30px">
</div>

<p style="font-size:17px;margin:20px;">
<a style="font-size:17px;clor:white" href="">Forget password?</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Not a member yet?<a style="font-size:17px; color:white" href="registration.html">sign up</a>
</p>
</div>
</form>
</div>

</section>
<?php
if(isset($_POST['submit']))
{
	$count=0;
	$res=mysqli_query($db,"SELECT * FROM `student`WHERE username='$_POST[username]' AND password='$_POST[password]';");
	$row=mysqli_fetch_assoc($res);
	$count=mysqli_num_rows($res);
	if($count==0)
	{
		?>
		<!--
		 <script type="text/javascript">
	alert("The username and password doesnt match");
	</script>
	-->
	<div class="alert alert-danger" style="width:700px;margin-left:300px">
	<strong>
	The username and password doesnt match
	</strong>
	</div>
		<?php
	
	}
	else
	{
		$_SESSION['login_user']=$_POST['username'];
		$_SESSION['pic']=$row['pic'];
		
		?>
		<script type="text/javascript">
		window.location="index.php";
	</script>
		<?php
	}
	
}
?>

</body>



















</html>