<?php

   session_start();
   if(isset($_SESSION['username1']))
   {
    include('db.php');                
//$con=mysqli_connect("localhost", "root", "", "bidtemp");
?>


<!doctype html>
<html lang="en">
 
<head>
   
    <title>BIDEAL || Product Requests</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <?php include_once('includes/header.php');?>
        
        <?php include_once('includes/sidebar.php');?>
       
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Products on Bid</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Products on Bid</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Products on Bid</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form method="POST" >
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                            <tr>
                                            <th data-breakpoints="xs">Name</th>
                                            <th data-breakpoints="xs">Category</th>
                                            <th data-breakpoints="xs">Product Name</th>
                                            <th>Bid Prize</th>
                                            <th>Original Prize</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Bid End Date</th>
                                            <th>Action</th>
                     
                </tr> </tr>
                  </thead>
                     <tbody>
                 
                     
                     <?php

include('db.php');         
//$con=mysqli_connect("localhost", "root", "", "bidtemp");

$q=mysqli_query($con,"SELECT DISTINCT *,p.image,p.id as pid,p.name as pname FROM `user` u,`products` p,catagories c WHERE p.uid=u.id and p.catagory_id=c.id and p.status='2'");
#$q=mysqli_query($con,"SELECT DISTINCT *,p.id as pid FROM `user` u,`products` p WHERE p.uid=u.id and p.status='2'");
if(mysqli_num_rows($q) > 0)
{
    
    while($row=mysqli_fetch_assoc($q))
	{
        $im=$row['image'];
       
   

?>
<tr>
                    <td><?php echo ($row['firstname']); echo " "; echo ($row['lastname']);?></td>
                    <td><?php echo ($row['name'])?></td>
                  <td><?php echo ($row['pname']); ?></td>
              
                  <td><?php echo ($row['start_bid']); ?></td>
                  <td><?php echo ($row['regular_price']); ?></td>
                  <td><a href="../images/<?php echo "$im"; ?>"><img src="../images/<?php echo $im; ?>" height="60px" width="60px"></a></td>
                 <td><?php echo ($row['description']); ?></td> 
                 <td><?php echo ($row['end_date']); ?></td> 
                   
                  <td><a href="action.php?id1=<?php echo ($row['pid']); ?>">Approve</a></td>
                  <td><input type="hidden" name="id" value="<?php echo ($row['pid']); ?>"></td> 

               <!--   <td><input type="text" name="reason"></td>  
                 <td><a href="action.php?id2=<?php echo ($row['pid']) ?>"><input type="submit" value="Reject" name="reject"></a></td> -->

                 <td><input type="submit" name="re" value="Reject"></td> 
                 
               
               
            
                </tr>
                </tbody>


                <?php

 
            }

        }

               
        
        
        
          ?>

                                     
                                    </table>
                                    </form>

                                    <?php
                                        if(isset($_POST['re']))
                                        {
                                            $i=$_POST['id'];                                            
                                           
                                            ?>
                                            <form method="post" action="action.php">
                                            <td><input type="hidden" name="id" value="<?php echo $i; ?>"></td>
                                             <td><input type="text" name="reason" placeholder="Reason For Rejection"></td>
                                             <td><input type="submit" name="rej"></td>
                                        </form>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
               
               
                
                
            </div>
            <!-- ============================================================== -->
            <?php include_once('includes/footer.php');?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="../../../../../cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>
<?php
}
else
{
    header("Location:../login.php");
}
?>