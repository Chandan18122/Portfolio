<?php
$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$SUB=$_POST['subject'];
$MSG=$_POST['message'];

//Establish Connection
$con= mysqli_connect("localhost", "root", "");

//Select Database
$db = mysqli_select_db($con,"cform"); 

//Query
$sql = "INSERT INTO message (name,email,sub,msg) VALUES ('$NAME','$EMAIL','$SUB','$MSG')";
//Execute Query
mysqli_query($con, $sql);
{
    echo "<script> alert('Thank you for your valuable feedback'); window.location='index.php';</script>";
}


//Close the connection
mysqli_close($con);
?>
