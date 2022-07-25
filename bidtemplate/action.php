<?php
include('db.php');
$da=$_POST['date'];
$id=$_POST['id'];
echo $da;
echo $id;

$sq=mysqli_query($con,"UPDATE `products` SET `status`='1',`end_date`='$da' WHERE id='$id'");
header('location:myprod.php');
?>