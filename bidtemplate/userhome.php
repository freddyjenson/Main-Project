<?php
session_start();
if($_SESSION['username'])
{
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 5px;
  text-align: left;
}


.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

table {
  border-collapse: collapse;
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

td:hover {background-color: coral;}
  
.open {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
a{
  text-decoration: none;
}

</style>
</head>
<body>

<?php include 'usernavbar.html'
?>   

<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>

<div class="header" style="">
  <h2>BIDEAL</h2>
</div>

<div class="content">

<table>

<tr><th>Categories</th></tr>
<?php
include 'db.php';
$sql="SELECT * FROM `catagories`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()): ?>
  <tr>
  <td><?php echo $row['name']?></td>
  <td> <a href="productview.php?id=<?php echo $row['id']; ?>">OPEN</a> </td>
  </tr>

  <?php
  endwhile;
  
   		
date_default_timezone_set ("Asia/Kolkata") ;
$d=date('Y-m-d H:i:s');
$up=mysqli_query($con,"UPDATE `products`set status = 3 where end_date < '$d'");
  
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