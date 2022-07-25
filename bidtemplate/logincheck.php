<?php 
include 'db.php'
?>  

<?php
			session_start();
			$username=$_POST['username'];
				$password=$_POST['pass'];

				$sql="select * from user where username='$username' and password= '$password' and status='1'";
				$query=mysqli_query($con,$sql); //or die ("Failed to query database".mysqli_error());
				
				if(mysqli_num_rows($query))
				{
				while($row=mysqli_fetch_assoc($query))
				{
					$utype=$row['utype'];	
					$uid=$row['id'];
				
					if($utype==0)
					{
						#session_start();
							//$_SESSION['userpro']=session_id();
							$_SESSION['username']=$username;
							$_SESSION['uid']=$uid;
							#echo $_SESSION['uid'];
							header("Location:userhome.php");
					}
					else
					{
						session_start();
						$_SESSION['username1']=$username;
							header("Location:admin/dashboard.php");
					}
				}
				}
						else
						{
							header("Location:login.php?error=true");
							echo '<script>alert("Wrong username or password")</script>';
							
						}				

?>