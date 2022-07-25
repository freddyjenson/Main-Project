<?php
session_start();
if(isset($_SESSION['username1']))
{

?>
<!doctype html>
<html lang="en">

<head>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="login assets/images/icons/favicon.png"/>
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
    <link href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css" />
    <title>BIDEAL || Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
   
        <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Dashboard </h3>
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                   
            <div class="row">


                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                          
                        
                        <div class="card">

                                <h5 class="card-header">Laptop</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                            <?php
                            include('db.php'); 
                            //$con=mysqli_connect("localhost", "root", "", "bidtemp");

                            $q=mysqli_query($con,"select COUNT(*) from products where catagory_id=10 and status=1;");
                            while($row=mysqli_fetch_assoc($q))
                            {
                            
                            ?>


                                        <h1 class="mb-1"><?php echo ($row['COUNT(*)']); ?></h1>
                            <?php
                            }
                            ?>
                                    </div>
                                    
                                </div>
                                
                                <form method="POST" action="">

                                <div class="card-footer text-center bg-white">
                                    <a href="details.php?name=laptop" class="card-link">View Details</a>
                                </div>
                                <form>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">

                                <h5 class="card-header">Smart Phone</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                    <?php
                                    include('db.php'); 
                            //$con=mysqli_connect("localhost", "root", "", "bidtemp");

                            $q=mysqli_query($con,"select COUNT(*) from products where catagory_id=11 and status=1;");
                            while($row=mysqli_fetch_assoc($q))
                            {
                            
                            ?>


                                        <h1 class="mb-1"><?php echo ($row['COUNT(*)']); ?></h1>
                            <?php
                            }
                            ?>
                                    </div>
                                  
                                </div>
                                
                                <div class="card-footer text-center bg-white">
                                    <a href="details.php?name=Smart Phone" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">

                                <h5 class="card-header">Tablet</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                    <?php
                                    include('db.php'); 
                            //$con=mysqli_connect("localhost", "root", "", "bidtemp");

                            $q=mysqli_query($con,"select COUNT(*) from products where catagory_id=12 and status=1;");
                            while($row=mysqli_fetch_assoc($q))
                            {
                            
                            ?>


                                        <h1 class="mb-1"><?php echo ($row['COUNT(*)']); ?></h1>
                            <?php
                            }
                            ?>
                                    </div>
                                   
                                </div>
                               
                                <div class="card-footer text-center bg-white">
                                    <a href="details.php?name=Tablet" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">

                                <h5 class="card-header">Smart Watch</h5>
                                <div class="card-body">
                                    <div class="metric-value d-inline-block">
                                    <?php
                                    include('db.php'); 
                            //$con=mysqli_connect("localhost", "root", "", "bidtemp");

                            $q=mysqli_query($con,"select COUNT(*) from products where catagory_id=13 and status=1;");
                            while($row=mysqli_fetch_assoc($q))
                            {
                            
                            ?>


                                        <h1 class="mb-1"><?php echo ($row['COUNT(*)']); ?></h1>
                            <?php
                            }
                            ?>
                                    </div>
                                    
                                </div>
                                
                                <div class="card-footer text-center bg-white">
                                    <a href="details.php?name=Smart Watch" class="card-link">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>



                   
            <div class="row">



                    </div>
                </div>
            </div>
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script>
    <!-- chart C3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <!-- chartjs js -->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- dashboard finance js -->
    <script src="assets/libs/js/dashboard-finance.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- gauge js -->
    <script src="assets/vendor/gauge/gauge.min.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>
    <!-- daterangepicker js -->
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>
</body>
</html>
<?php
}
else
{
    header("Location:../login.php");
}
?>