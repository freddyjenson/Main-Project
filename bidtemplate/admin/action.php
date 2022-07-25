<?php
  include('db.php');               
//$con=mysqli_connect("localhost", "root", "", "bidtemp");

if(isset($_GET['id1']))
        {
             $id=$_GET['id1'];   
            $q=mysqli_query($con,"UPDATE products set status=1 where id=$id");
            header('location:urequest.php');
            
        
        }
        
if(isset($_POST['rej']))
{
     $id=$_POST['id'];  
     $re=$_POST['reason']; 
     
    $q=mysqli_query($con,"UPDATE products set status='0',reason='$re' where id=$id");
    if($q)
    {
    header('location:urequest.php');
    }

}
?>