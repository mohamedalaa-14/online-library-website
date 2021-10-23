<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Request</title>
<style type="text/css">
.search
{
	padding-left:1000px;
}
body {
	background-image:url("images/q.jpg");
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top:53px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left:20px;
}
.h:hover
{
	color:white;
	width:300px;
	height:50px;
	background-color:#00544c;
}
.r
{
	height:600px;
	background-color:black;
	opacity:.7;
	color:white;
}

</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="color:white;margin-left:60px; font-size:20px;">
	
<?php
if(isset($_SESSION['login_user']))
{  echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
    echo "</br></br>";
	echo "Welcome  " .$_SESSION['login_user'];
}
	?>
</div><br><br>
 <div class="h"> <a href="./add.php">Add Books</a>  </div>
   <div class="h"><a href="request.php">Book Request</a> </div>
  <div class="h"> <a href="bookinfo.php">Book Information</a> </div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<div class="r">
<h3 style="text-align: center;">Request Of Books</h3>
<?php
if(isset($_SESSION['login_user']))
{
	$sql="SELECT student.username,books.bid,name,authors,edition,status FROM student inner JOIN book_request ON student.username=book_request.username INNER JOIN books ON book_request.bid=books.bid WHERE book_request.approve=''";
	$res=mysqli_query($db,$sql);
	if(mysqli_num_rows($res)==0)
	{
		echo"<h2><b>";
		echo "There is no pending request";
				echo"</h2></b>";

	}
	else
	{
				echo"<table class='table-bordered table -hover'>";
echo"<tr style='background-color:#6db6b9ed;'>";
echo"<th>"; echo "username";     echo"</th>";
echo"<th>"; echo "Book ID";     echo"</th>";
echo"<th>"; echo "Book Name";     echo"</th>";
echo"<th>"; echo "Authors Name";     echo"</th>";
echo"<th>"; echo "Edition";     echo"</th>";
echo"<th>"; echo "Status";     echo"</th>";


echo"</tr>";

while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>"; echo $row['username']; echo "</td>";
	echo "<td>"; echo $row['bid']; echo "</td>";
	echo "<td>"; echo $row['name']; echo "</td>";
	echo "<td>"; echo $row['authors']; echo "</td>";
		echo "<td>"; echo $row['edition']; echo "</td>";
	echo "<td>"; echo $row['status']; echo "</td>";


	echo "</tr>";
}
echo "</table>";
	}
}
/*
if(isset($_SESSION['login_user']))
{
	$q=mysqli_query($db,"SELECT * from book_request where username='$_SESSION[login_user]'; ");
	if(mysqli_num_rows($q)==0)
	{
		echo"<h2><b>";
		echo "There is no pending request";
				echo"</h2></b>";

	}
	else
	{
		echo"<table class='table-bordered table -hover'>";
echo"<tr style='background-color:#6db6b9ed;'>";
echo"<th>"; echo "Book ID";     echo"</th>";
echo"<th>"; echo "Approve Status";     echo"</th>";
echo"<th>"; echo "Request Date";     echo"</th>";
echo"<th>"; echo "Return Date";     echo"</th>";
echo"</tr>";

while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
	echo "<td>"; echo $row['bid']; echo "</td>";
	echo "<td>"; echo $row['approve']; echo "</td>";
	echo "<td>"; echo $row['request date']; echo "</td>";
	echo "<td>"; echo $row['return']; echo "</td>";

	echo "</tr>";
}
echo "</table>";
	}
}
else
{
	echo "</br></br></br>";
	echo "<h2><b>";
	echo "please login first to see request information";
	echo "</b></h2>";
}
*/
?>
</div>
</body>























</html>