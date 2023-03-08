<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="box">
        <div class="task">
            <form  method="post" action="demo.php">      
                <input type="text" class="ts" name="taskname" id="ts" placeholder="Enter your Task">
            ̥    <button class="btu" id="btu" type="submit" href="http://localhost/osis_infobyte/to-do-list/demo.php" name="btu"><b>Add</b></button>
            <br>
            <br>
            <div id="line"><p>____________________________________________________</p></div>
            <?php
$link = mysqli_connect("localhost", "root", "", "project");
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result= mysqli_query($link,"select* from task order by tid ASC");
?>

	<?php
	while($res=mysqli_fetch_array($result))
	{
        echo '<br>';
		echo '<input type="text" class="ts" value="'.$res['taskname'].'" id="ts">';
		echo  "<a href='del.php?tid=$res[tid]&taskname=$res[taskname]'><div class='btu'>Delete</div></a>";
	}
	?>    
        </form>
        </div>
    </div>
   </div>


</body>
</html>