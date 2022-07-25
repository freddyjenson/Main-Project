<?php
include('db.php');
$sql=mysqli_query($con,"SELECT * FROM `products` where catagory_id = 11 and status=1 and end_date > '2020-03-03'");
$r=mysqli_fetch_assoc($sql);
$a='01-09-2020';
echo $r['end_date'];
$d=date('Y-m-d',strtotime($a));

echo $d;

?>