<?php
include "connection.php";
if(isset($_POST['submit']))
{
	$comnew=$_POST['comnew'];
	$sql="INSERT INTO `comments` VALUES('','$_POST[comment]')$comnew;";
	   if (mysqli_query($db,$sql))
	   {
		   $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
		   $res=mysqli_query($db,$q);
		   echo "<table class='table-bordered'>";
		   while($row=mysqli_fetch_assoc($res))
		   {
			   echo "<tr>";
			   echo "<td>"; echo $row['Comment'] ; echo "</td>";
			   echo "</tr>";

		   }
	   }
}
else
{
	$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC $comnew";
		   $res=mysqli_query($db,$q);
		   echo "<table class='table-bordered'>";
		   while($row=mysqli_fetch_assoc($res))
		   {
			   echo "<tr>";
			   echo "<td>"; echo $row['Comment'] ; echo "</td>";
			   echo "</tr>";

		   }
}
?>