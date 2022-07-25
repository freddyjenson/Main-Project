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
</style>
</head>
<body>

<?php include 'usernavbar.html'
?>   

<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>

<div class="header">
  <h2>BIDEAL</h2>
</div>

<div class="content">

<h3>Mobile Phones on Bid</h3>
<table>

<tr><th>Name</th><th></th></tr>

<?php
include 'db.php';
$sql="SELECT * FROM `products` WHERE catagory_id=11";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()): ?>
  <tr>
  <td><?php echo $row['name']?></td>
  <td> <a href="productview2.php?id=<?php echo $row['id']; ?>">OPEN</a> </td>
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
