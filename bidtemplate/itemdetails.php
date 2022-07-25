<?php
#header('refresh:1');
session_start();
if($_SESSION['username'])
{
	$uid=$_SESSION['uid']
  ?>

<!DOCTYPE html>
<html>
<head>


<script> 

</script>

 <style> 
table,tr,td{
  padding: 150px;
}
</style> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bidview.css">


                        <style>
                        body {font-family: Arial, Helvetica, sans-serif;}
                        * {box-sizing: border-box;}

                        /* Button used to open the chat form - fixed at the bottom of the page */
                        .open-button {
                          background-color: #555;
                          color: white;
                          padding: 16px 20px;
                          border: none;
                          cursor: pointer;
                          opacity: 0.8;
                          position: fixed;
                          bottom: 23px;
                          right: 28px;
                          width: 280px;
                        }

                        /* The popup chat - hidden by default */
                        .chat-popup {
                          display: none;
                          position: fixed;
                          bottom: 0;
                          right: 15px;
                          border: 3px solid #f1f1f1;
                          z-index: 9;
                        }

                        /* Add styles to the form container */
                        .form-container {
                          max-width: 300px;
                          
                          padding: 10px;
                          background-color: white;
                        } 

                        /* Full-width textarea */
                        .form-container textarea {
                          width: 100%;
                          height:100%;
                          padding: 15px;
                          margin: 5px 0 22px 0;
                          border: none;
                          background: #f1f1f1;
                          resize: none;
                          min-height: 200px;
                        }

                        /* When the textarea gets focus, do something */
                        .form-container textarea:focus {
                          background-color: #ddd;
                          outline: none;
                        }

                        /* Set a style for the submit/send button */
                        .form-container .btn {
                          background-color: #04AA6D;
                          color: white;
                          padding: 16px 20px;
                          border: none;
                          cursor: pointer;
                          width: 100%;
                          margin-bottom:10px;
                          opacity: 0.8;
                        }

                        /* Add a red background color to the cancel button */
                        .form-container .cancel {
                          background-color: red;
                        }

                        /* Add some hover effects to buttons */
                        .form-container .btn:hover, .open-button:hover {
                          opacity: 1;
                        }

                        .header {
                        
                          text-align: left;
                        }
                        </style>
</head>
<body>

                                              <button class="open-button" onclick="openForm()">Place Your Bid</button>

                                              <div class="chat-popup" id="myForm">
                                                <form action="" method="POST" class="form-container">
                                                  <!--<h1>Chat</h1>

                                                  <label for="msg"><b>Message</b></label>  -->
                                                  <input type="number"  placeholder="Bid Amount." name="msg" required style="margin-bottom:100px;margin-top:50px;height:90px;width:100%;"/>

                                                  <button name="bid" type="submit" class="btn">Bid</button>
                                                  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                                </form>
                                              </div>

                                              <?php
                                                
                                              if(isset($_POST['bid']))
                                              {
                                                $i= $_GET['id'];
                                                $bid1=$_POST['msg'];
                                                include('db.php');
                                                //$con= mysqli_connect("localhost","root","","bidtemp");

                                                $sql1="SELECT * FROM `products` where id=$i";
                                                $query=mysqli_query($con,$sql1);
                                                if($row=mysqli_fetch_assoc( $query))
                                                {
                                                      $st=$row['start_bid'];
                                                      if( $bid1 > $st )
                                                      {
                                                      $sql="update products set start_bid='$bid1',userbid_id='$uid' where id=$i";
                                                      $query=mysqli_query($con,$sql);
                                                      }
                                                      else
                                                      {
                                                        echo "<script>alert('Enter a Valid Amount')</script>";
                                                      }
                                                }
                                               


                                              }

                                              ?>

                                              <script>
                                              function openForm() {
                                                document.getElementById("myForm").style.display = "block";
                                              }

                                              function closeForm() {
                                                document.getElementById("myForm").style.display = "none";
                                              }
                                              </script>







<?php include 'usernavbar.html'
?>   
<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>

<div class="header">
  <h2>BIDEAL</h2>
</div>

<div class="content" style="margin-top:-50px">

<h3>Item Details</h3>
<table style="width:80%">

<tr>
  <th>Name</th>
  <th>Bid Price</th>
  <th>Original Price</th>
  <th>Description</th>
  <th>Bid End Date</th>
  <th>Images</th>
  <th>Who bids Now</th>
  
</tr>
<?php


include 'db.php';
$id = $_GET['id'];
$sql="SELECT * FROM `products` p,user u WHERE p.userbid_id=u.id and p.id=$id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {	  
		
date_default_timezone_set ("Asia/Kolkata") ;
$d=date('Y-m-d H:i:s');
$datetime1 = new DateTime($d);
$t=$row['end_date'];
$datetime2 = new DateTime($t);
$interval = $datetime1->diff($datetime2);
$a=$interval->format('%a days');
$b=$interval->format(' %h hours ');
$c=$interval->format(' %i minutes more..');
$d=$interval->format(' %s secounds ');
	
	
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>₹".$row['start_bid']."</td>";
    echo "<td>₹".$row['regular_price']."</td>";
    echo "<td style='align:right;'>".$row['description']."</td>";
    echo "<td>".$row['end_date']."</td>";	
    $im=$row['image'];
    ?>
    <td><a href="images/<?php echo "$im"; ?>"><img src="images/<?php echo "$im"; ?>" height="60px" width="60px"></a></td>
    <?php
    echo "<td>".$row['firstname']." ".$row['lastname']."</td>";	
    
    echo "</tr>";
	
	 echo "<tr>";
	 echo "<span>".$a.$b.$c.$d."</span>";
	 echo "</tr>";
  }
} else {
  echo "0 results";
}

?>
</table>


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
