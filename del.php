<?php
$link = mysqli_connect("localhost", "root", "", "project");

// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	error_reporting(0);
    $coid=$_GET['tid'];
	$qu= "DELETE FROM task where tid='$coid'";
	$data=mysqli_query($link,$qu);
	if($data)
	{
		
       ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/osis_infobyte/to-do-list/list.php">
       <?php

     
	}
	else
	{
		echo "<script>alert('fail')</script>";
	}

?>