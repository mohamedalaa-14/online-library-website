<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>My Book</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style type="text/css">
nav
{
	float:right;
	word-spacing:30px;
	padding:20px;
}
nav li
{
	display:inline-block;
	line-height:80px;
}
</style>
</head>
<body>
<div class="box">
<header>
<div class="logo">
<img src="images/9.png">
<h1 style="color:white;">MY Book online library</h1>
</div>

<?php
if(isset($_SESSION['login_user']))
{
	?>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li><a href="logout.php">LOGOUT</a></li>
<li><a href="feedback.php">Feedback</a></li>

</ul>
</nav>
<?php
}
else
{
	?>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="books.php">Books</a></li>
<li><a href="Admin_login.php">login</a></li>
<li><a href="feedback.php">Feedback</a></li>

</ul>
</nav>	
<?php
}

?>

</header>
<section>
<div class="sec_img">
<br><br><br>
<div class="box1">
<br><br><br><br>
<h1 style="text-align:center;font-size:35px;">Welcome to Library</h1><br>
<h1 style="text-align:center;font-size:25px;">opens at:9:00</h1><br>
<h1 style="text-align:center;font-size:25px;">closes at:15:00<h1><br>
</div>
</div>
</section>

<footer>
<p style="color:white;text-align:center;">
<br><br>
E-mail:&nbsp ma0846924@gmail.com<br>
   Mobile:&nbsp +201145595244
</p>
</footer>
</div>

</body>




















</html>