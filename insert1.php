<?php
$dbhost=”localhost”; //replace with your hostname
$dbuser = “root”; //replace with your admin username
//$dbpass = “admin”; //password of your admin
$dbname = “Management”;
$conn = new mysqli($dbhost,$dbuser,$dbname);
$sql="insert into student ('studentname',Age,'Branch',year,'Sem',pSemS) values ('mani',22,cse,4,'4-2',78)";
$query=mysqli_query($conn,$sql);
if($quey)
	echo "data inserted";
?>
                                  