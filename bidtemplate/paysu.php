<?php
include('db.php');
//$con=mysqli_connect("localhost", "root", "", "bidtemp");
$i=$_GET['id'];
$a=$_GET['amo'];
mysqli_query($con,"UPDATE `products` SET `pay_status`='paid' WHERE id='$i'");
header('location:bidswon.php');

?>