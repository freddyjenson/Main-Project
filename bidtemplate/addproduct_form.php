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
<link rel="stylesheet" href="assets/css/addproducttable.css">

<style>

</style>
</head>
<body>

<?php include 'usernavbar.html'
?>   


<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>


<button style='font-size:24px;  position: absolute; top: 10px; right: 10px;'>
<?php echo $_SESSION['username'];?> <i class='fas fa-user-alt'></i></button>

<div class="header">
  <h2>BIDEAL</h2>
</div>

<div class="content">
<h3>Add Product</h3>


<div class="container">
  <form action="addproduct.php"  method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="pname">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="pname" name="pname" placeholder="Enter product name">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="category">Category</label>
    </div>
    
    <div class="col-75">
      <select id="category" name="category">
      <option value="">Select category</option>
        <option value="11">Smart Phone</option>
        <option value="10">Laptop</option>
        <option value="12">Tablet</option>
        <option value="13">Smartwatch</option>
      </select>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="bprice">Bid Price</label>
    </div>
    <div class="col-75">
      <input type="number" id="bprice" name="bprice" placeholder="Enter bid price" required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="oprice">Original Price</label>
    </div>
    <div class="col-75">
      <input type="number" id="oprice" name="oprice" placeholder="Enter original price" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="oprice">Bid End Date</label>
    </div>
    
    <div class="col-75">
    
      <input type="datetime-local" name="bdate"  min="<?php echo date('Y-m-d'); ?>" required> 
      

    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label>Upload Image</label>
    </div>
    
    <div class="col-75">
    
      <input type="file" name="photo" ?>
      

    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <h1><textarea id="description" name="description" placeholder="Write All Specifications of your products..." style="height:200px" >
    Year of Manufacture   :    
                    Ram   :
       Storage Capacity   :
       Battery Capacity   :  
           Display Size   : 
Charger Included(Yes/No)  :
Physical damage, if any   :
    
    </textarea></h1>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


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
