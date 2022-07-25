<?php 
include 'db.php'
?>  

<?php
session_start();				
session_destroy();
header("Location: http://localhost/bidtemplate/login.php");
?>