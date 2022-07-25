<?php 
include 'db.php'
?>  

<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username']; 
$password=$_POST['pass'];
$email=$_POST['email'];


$sql_u = "SELECT * FROM user WHERE username='$uname'";
    $sql_e = "SELECT * FROM user WHERE email='$email'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);

    
    if (mysqli_num_rows($res_u)) 
    {
      //echo("Sorry... username already taken"); 
      echo '<script>alert("Sorry... username already taken")</script>';  
    }

    else if(mysqli_num_rows($res_e))
    {
     //echo("Sorry... email already taken");
     echo '<script>alert("Sorry... email already taken")</script>'; 
    }


    else if(!preg_match("#[0-9]+#",$password)) {
          //echo("Your Password Must Contain At Least 1 Number!");
          echo '<script>alert("Your Password Must Contain At Least 1 Number!")</script>';
        }
      elseif(!preg_match("#[A-Z]+#",$password)) {
            //echo("Your Password Must Contain At Least 1 Capital Letter!");
            echo '<script>alert("Your Password Must Contain At Least 1 Capital Letter!")</script>';
       }
      elseif(!preg_match("#[a-z]+#",$password)) {
          //echo("Your Password Must Contain At Least 1 Lowercase Letter!");
          echo '<script>alert("Your Password Must Contain At Least 1 Lowercase Letter!")</script>';
        } 
    else
    {
      $sql="insert into user(firstname,lastname,username,password,email)values('$fname','$lname','$uname','$password','$email')";
      $query=mysqli_query($con,$sql);
      echo "Registration Successful";
	    header("Location: login.php");
    }



?>