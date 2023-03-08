<style>
table, th, td {
    border: 1px solid black;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$tid = mysqli_real_escape_string($link, $_REQUEST['tid']);
$taskname = mysqli_real_escape_string($link, $_REQUEST['taskname']);

// Attempt insert query execution
$sql = "INSERT INTO task (tid,taskname) VALUES ('$tid','$taskname')";
if(mysqli_query($link, $sql)){
  header("location:list.php");
} 
else
{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
