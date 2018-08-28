<?php
$mysql_host=”localhost”; //replace with your hostname
$mysql_user = “root”; //replace with your admin username
//$dbpass = “admin”; //password of your admin
$dbname = “Management”;
$conn = new mysqli($dbhost,$dbuser,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{ 
echo "connection established";
}
//sql to create a table

//$sql ="Create table student(studentname varchar(30),Age int(3),
 //      Branch varchar(4),Year int(4),Sem varchar(4),pSemS int(3))";

?>