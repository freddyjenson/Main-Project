<?php 
include('db.php');
?>  

<?php
session_start();
$bd1 = date("Y-m-d H:i:s",strtotime($_POST['bdate']));
//$bd=$_POST['bdate'];
//$bd1=date('Y-m-d',strtotime($bd));
$uid=$_SESSION['uid'];
$pname=$_POST['pname'];
$category=$_POST['category'];
$bprice=$_POST['bprice'];
$oprice=$_POST['oprice'];
$description=$_POST['description'];

$pho=$_FILES['photo']['name'];
$target_path = "images/";  
$target_path = $target_path.basename( $_FILES['photo']['name']);   
 
move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);

$sql="INSERT INTO `products`(`catagory_id`, `uid`, `name`,`image`, `description`, `start_bid`, `regular_price`,`end_date`,userbid_id)
VALUES ('$category',$uid,'$pname','$pho','$description','$bprice','$oprice','$bd1','$uid')";

$query=mysqli_query($con,$sql);

echo $uid;

if($query)
{
    echo '<script>alert("Product added successfuly")</script>';
    header("Location:userhome.php");

}
    else
    {
        echo '<script>alert("Product not added")</script>';
        header("Location:addproducts.php");

    }

?>