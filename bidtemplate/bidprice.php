<?php
include('db.php');

?>

<form action="action_page.php" method="POST">

  <label for="fname">Product name:</label><br>
  <input type="text" id="pname" name="pname" required><br>
  <br>

<br>

  <label>Enter your price:</label><br>
  <input type="number" id="bprice" name="bprice" required><br><br>
  
  <input type="submit" value="Submit">
</form>