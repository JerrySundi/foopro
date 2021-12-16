<?php

$conn = mysqli_connect('localhost','root','','foopro');
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
 if(isset($_POST['save']))
{

	 if(isset($_POST["First_name"]))
	 {
		 
     $First_name=$_POST['First_name'];
	 }
	if(isset($_POST["Last_name"]))
	{
	$Last_name= $_POST['Last_name'];
	}
	if(isset($_POST["Phone"]))
	{
	$Phone = $_POST['Phone'];
	}
	if(isset($_POST["Address"]))
	{
	$Address = $_POST['Address'];
	}

$sql_query = "INSERT INTO info (First_name,Last_name,Phone,Address) VALUES ('$First_name','$Last_name','$Phone','$Address')";

if (mysqli_query($conn,$sql_query)) {
  echo "<p><font size='40'> <center> New record inserted successfully </center></p>  <br><br>";
 echo "<p><font size='40'> <center>Redirecting</center></p>";
  
  $file = 'giphy.gif'; 

echo "<p> <center><img src=\"".$file."\"></center></p>";
date_default_timezone_set("Asia/Kolkata");
echo date('h:i:s');
  

  
 } else {
  echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
 }

header("refresh: 6; url=http://localhost/index.html");

die();
?>
