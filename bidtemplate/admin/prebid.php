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
                            <h2 class="pageheader-title">Bidded Products</h2>
                           
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Bidded Products</li>
                                        
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
                            <h5 class="card-header">Bidded Products</h5>
                            <a href="report.php" class="card-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h7>Download Pdf</h7></a>

                            <div class="card-body">
                                <div class="table-responsive">



                                <table>
                                    <tr>
                                        <td>
                                    

                                    <table class="table table-striped table-bordered first">
                                        <thead>
										<tr>
										<th colspan="3">
										Owners
										</th>
										<th>
										
										</th>
										
										</tr>
                                        <tr>
                                            <tr>
                                            <th data-breakpoints="xs">Name</th>                                           
                                            <th data-breakpoints="xs">Product Name</th>
											<th>Original Prize</th>
                                            <th data-breakpoints="xs"></th> 
											
                                          
                     
                </tr> </tr>
                  </thead>
                     <tbody>
                     
                     <?php

include('db.php');         
//$con=mysqli_connect("localhost", "root", "", "bidtemp");

$q=mysqli_query($con,"SELECT u.firstname,u.lastname,p.name,p.regular_price FROM `products` p,user u WHERE p.uid=u.id and p.status='3'");
#$q=mysqli_query($con,"SELECT DISTINCT *,u.firstname as uf,p.id as pid,p.name as pname FROM `user` u,`products` p,catagories c WHERE p.catagory_id=c.id and p.userbid_id=u.id or p.uid=u.id and p.status='3'");
#$q=mysqli_query($con,"SELECT u.firstname as uf, p.name as pname, p.regular_price  as regular_price, p.start_bid  as start_bid, u.firstname as biddername FROM `user` u,`products` p WHERE p.uid=u.firstname and p.userbid_id=u.firstname and p.status='3'");

#$q=mysqli_query($con,"SELECT DISTINCT *,p.id as pid FROM `user` u,`products` p WHERE p.uid=u.id and p.status='2'");
if(mysqli_num_rows($q) > 0)
{
    
    while($row=mysqli_fetch_assoc($q))
	{
       
   

?>
<tr>.
                    <td><?php echo ($row['firstname']); echo " "; echo ($row['lastname']);?></td>
                    <td><?php echo ($row['name'])?></td>
					 <td><?php echo ($row['regular_price']); ?></td>
                   
 <td></td>	
 <?php   
//  $q1=mysqli_query($con,"SELECT u.firstname,u.lastname,p.start_bid,p.end_date from user u,products p WHERE u.id=p.userbid_id"); 
 
//  while($row1=mysqli_fetch_assoc($q1))
//  {
 ?>			  
                   
                 
                </tr>

                </tbody>


                <?php

 #}
            }

        }

               
      
          ?>

                                     
                 </table>
                    </td>                                   
                    <td>




                    <table class="table table-striped table-bordered first" >
                                        <thead>
										<tr>										
										<th colspan="3">
										Purchasers
										</th>
										</tr>
                                        <tr>                                    
                                           
											<th>Name</th>											
                                            <th>Bid Prize</th>
                                          
                     
                </tr> 
                  </thead>
                     <tbody>
                 
                     
                     <?php

include('db.php');         
//$con=mysqli_connect("localhost", "root", "", "bidtemp");

$q1=mysqli_query($con,"SELECT u.firstname,p.start_bid,p.end_date FROM `products` p,user u WHERE p.userbid_id=u.id and p.status='3'");
#$q=mysqli_query($con,"SELECT DISTINCT *,u.firstname as uf,p.id as pid,p.name as pname FROM `user` u,`products` p,catagories c WHERE p.catagory_id=c.id and p.userbid_id=u.id or p.uid=u.id and p.status='3'");
#$q=mysqli_query($con,"SELECT u.firstname as uf, p.name as pname, p.regular_price  as regular_price, p.start_bid  as start_bid, u.firstname as biddername FROM `user` u,`products` p WHERE p.uid=u.firstname and p.userbid_id=u.firstname and p.status='3'");

#$q=mysqli_query($con,"SELECT DISTINCT *,p.id as pid FROM `user` u,`products` p WHERE p.uid=u.id and p.status='2'");
if(mysqli_num_rows($q1) > 0)
{
    
    while($row1=mysqli_fetch_assoc($q1))
	{
       
   

?>
<tr>.
                    <td><?php echo ($row1['firstname']);?></td>
                    <td><?php echo ($row1['start_bid'])?></td>
					 
                   
 <td></td>	
 		  
                    
                 
                </tr>

                </tbody>


                <?php
            }

        }

               
      
          ?>

                                     
                 </table>
                                        


                                        
                                        </td>
                                    </tr>
                                    </table>










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