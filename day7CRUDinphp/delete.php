<?php
 $con=mysqli_connect('localhost','root','','insertdb');
 $id=$_GET['deleteid'];
 $q= mysqli_query($con,"delete  from data where user_id='{$id}'") or die(mysqli_error($con));
 if($q)
 {
	 echo "<script> alert('record Deleted');window.location='fetchdata.php';</script>";
 }

?>