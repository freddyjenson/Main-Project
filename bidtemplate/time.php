<html>
<body>
Current Time: <span id="txt"></span>  
<?php
echo '<br>';
date_default_timezone_set ("Asia/Kolkata") ;
$d=date('Y-m-d H:i:s');
echo $d;
echo '<br>';
$datetime1 = new DateTime($d);
$datetime2 = new DateTime('2022-07-30 11:03');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a days');
echo $interval->format('%h hours');
echo $interval->format('%i minutes');
echo $interval->format('%s seconds');
?>
<script>  
window.onload=function()
{
	getTime();
}
function getTime()
{  
var today=new Date();  
var h=today.getHours();  
var m=today.getMinutes();  
var s=today.getSeconds();  
// add a zero in front of numbers<10  

//m=checkTime(m);  
//s=checkTime(s);  
	
document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
setTimeout(function()
{
	getTime()
},1000);  
}  

</script>  
</body>
</html>

 
