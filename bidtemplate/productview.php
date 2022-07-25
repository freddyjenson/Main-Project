<?php

session_start();
if($_SESSION['username'])
{
	
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bidview.css">

<style>

.header {
 
  text-align: left;
}
</style>
</head>
<body>

<?php include 'usernavbar.html'
?>   

<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>


<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>

<div class="header">
  <h2>BIDEAL</h2>
</div>

<div class="content">
<h3>Product Details</h3>

<table>
<tr><th>Name</th><th></th></tr>
<?php
include 'db.php';
$cid = $_GET['id'];
date_default_timezone_set('Asia/Kolkata');
$d=date('Y-m-d H:i:s');
$sql="SELECT * FROM `products` where catagory_id = $cid and status=1 and end_date > '$d'";
$result = $con->query($sql);

if ($result !== false && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()): ?>
  <tr>
  <td><?php echo $row['name']?></td>
  <td> <a href="itemdetails.php?id=<?php echo $row['id']; ?>">OPEN</a> </td>
    </tr>

  <?php
  endwhile;
} 

?>
</table>

</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>

<?php
} 

else
{
  header("Location: http://localhost/bidtemplate/login.php");
}
  ?>
