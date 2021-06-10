<?php
$con=mysqli_connect('localhost','root','','insertdb');
$q=mysqli_query($con,"select * from  data") or die(mysqli_error($con));
echo"<table border='1'>";
echo "<tr>";



echo  "<th> id</th>";
echo  "<th> name</th>";
echo  "<th> email</th>";
echo  "<th> Action</th>";

echo "</tr>";
$i=0;

while($row= mysqli_fetch_array($q)){
	  $i++;
	  echo "<tr>";
	 echo  "<td>{$row['user_id']} </td>";
	  echo "<td>{$row['name']} </td>";
	    echo "<td>{$row['email']} </td>";
		echo "<td> <a href='delete.php?deleteid={$row['user_id']} '>Delete</a></td>";
	     echo "</tr>";
		
	  
}
echo"</table>";

	echo "<a href='index.php'>Add Record</a>";
	
?>