<?php
include('db.php'); 
if(isset($_GET['id']))
{
//$con=mysqli_connect("localhost", "root", "", "bidtemp");
$a=$_GET['id'];

    $q=mysqli_query($con,"update user set status=0 WHERE id='$a';");
header('location:activeusers.php');
}
if(isset($_GET['id1']))
{
//$con=mysqli_connect("localhost", "root", "", "bidtemp");
$a=$_GET['id1'];

    $q=mysqli_query($con,"update user set status=1 WHERE id='$a';");
header('location:disabledusers.php');
}
?>