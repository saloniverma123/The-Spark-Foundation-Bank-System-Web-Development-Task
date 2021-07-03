<?php 

$server="sql203.epizy.com";
$username="epiz_29034211";
$password="NTg7h5oomvgh";
$db="epiz_29034211_sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
