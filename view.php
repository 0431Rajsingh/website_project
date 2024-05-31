<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style>
		body {
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		video {
			width: 640px;
			height: 360px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
    <div style ="text-align: start;">
	<a href="front.php">UPLOAD</a>
	<br>
	<br>
	<br>
	<br>
</div>
	<div class="alb">
		<?php 
		$servername = "localhost";
$database = "u866656205_test_db";
$username = "u866656205_root";
$password = "L@bwork2023";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);

		 //include "databaseconnect.php";
		 $sql = "SELECT * FROM video ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <video src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
</body>
</html>