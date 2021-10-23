<?php
include "connection.php";
include"navbar.php";

?>


<!DOCTYPE html>
<html>
<head>
<title> Admin Registration</title>
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
<div class="reg_img">
<div class="box3">
<h1 style="text-align:center;font-size:35px;font-family:lucida console;">My Book library online</h1>
<h1 style="text-align:center;font-size:25px;">Registration<h1>
<form name="registration" action="" method="post">

<div class="login">
<input class="form-control" type="text" name="First" placeholder="First Name" required="please fill this"><br>
<input class="form-control" type="text" name="Last" placeholder="Last Name" required="please fill this"><br>
<input class="form-control" type="text" name="username" placeholder="username" required="please fill this"><br>
<input class="form-control" type="password" name="password" placeholder="password" required="please fill this"><br>
<input class="form-control" type="text" name="contact" placeholder="Mobile phone" required="please fill this"><br>
<input class="form-control" type="text" name="Email" placeholder="Email" required="please fill this"><br>
<input class="btn btn-default"type="submit" name="submit" value="sign up" style="color:black;width:70px;height:30px">
</div>


</form>
</div>
</div>
</section>
<?php
if(isset($_POST['submit']))
{
	$count=0;
	$sql="SELECT username from `admin`";
	$res=mysqli_query($db,$sql);
	while($row=mysqli_fetch_assoc($res))
	{
		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
		}
	}
	if($count==0)
	{mysqli_query($db,"INSERT INTO `admin` VALUES('','$_POST[First]','$_POST[Last]','$_POST[username]','$_POST[password]','$_POST[contact]','$_POST[Email]','l.jpg');");
	?>
	<script type="text/javascript">
	alert("Registration succsseful");
	</script>
	<?php
	}
	else{
		?>
	<script type="text/javascript">
	alert("the username already exist");
	</script>
	<?php
		
	}
}
?>
</body>













</html>