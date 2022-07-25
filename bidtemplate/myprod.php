<?php
session_start();
include('db.php');
//$con=mysqli_connect("localhost", "root", "", "bidtemp");
if($_SESSION['username'])
{
	$id=$_SESSION['uid'];
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
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
  <tr>
  <th>Name</th>
  <th>Bid Amount Now</th>
  <th>your prize</th>
  <th>End Date</th>
  <th>status</th>
  </tr>
  <?php
  
	$sq=mysqli_query($con,"select * from products where uid='$id'");
	while($r=mysqli_fetch_assoc($sq))
	{
  ?>
  <tr>
  <td><?php echo $r['name']  ?></td>
  <td><?php echo $r['start_bid']  ?></td>
  <td><?php echo $r['regular_price']  ?></td>
  <td><?php echo $r['end_date']  ?></td>
  <td><?php 
  date_default_timezone_set('Asia/Kolkata');
  $bidid=$r['userbid_id'];
  $d=date('Y-m-d H:i:s');
  $end1=$r['end_date'];
  #$end=date('Y-m-d H:i:s',$end1);


   if($end1 < $d && $id==$bidid)
  {
   ?>
   
   <!--<text>Product not sold..you can rebid it</text> -->
   <form method="POST" action ="action.php">
   <input type="hidden" name="id" value="<?php echo $r['id'];; ?>">
   <input type="date" name="date">
   <button name="re">rebid it</a>
  </form>
    <?php
  }

   else if($r['status']==0)
  {
	  
     echo '<text>Rejected Reason:'.$r['reason'].'</text>';
  }
  else if($r['status']==1)
  {
  echo 'On bidding';  
  }
  else if($r['status']==2)
  {
	   echo 'verifying';
  }
  else if($r['status']==3)
  {
	   echo 'Bidding Closed';
  }

  ?></td>
  
  </tr>
  
  <?php


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
