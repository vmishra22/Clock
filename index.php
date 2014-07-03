
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"> 

	<title>What time is it?</title>
	
	<?php 
	require('logic.php'); 
	?>

	<link rel='stylesheet' href='styles.css' type='text/css'>
	
		
</head>

<body class=<?php echo $classB;?>>

	<h1>It is <?php echo $time;?></h1>

	<small>Time zone: America/New_York;</small><br>

	<img src='http://thewc.co.s3.amazonaws.com/challenges/<?php echo $image;?>' alt='Scenery matching the time of day'> 
 
</body>
</html>