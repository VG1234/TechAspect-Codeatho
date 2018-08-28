<?php
require 'Manage.php';
echo "studentname  Age  Branch  Year  Semester  previousSemScore";
$query ="select * from 'student'";
if($is_query_run=mysql_query($query))
{
	while ($query_executed = mysql_fetch_assoc ($is_query_run))
	{
		 echo $query_executed ['studentname'];
		 echo $query_executed ['Age'];
		 echo $query_executed ['Branch'];
		 echo $query_executed ['Sem'];
		 echo $query_executed ['pSemS'];
	}
}
else
	echo "error in execution";


?>