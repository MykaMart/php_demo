<?php
	
	include "db.php";
	include "functions.php";

	$result = readUsers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	

<div class="container">
	
	<div class="col-sm-6">
		<?php 
			// alternately you can use mysqli_fetch_row()
			while($row = mysqli_fetch_assoc($result)) {

		?>

		<pre class="card bg-secondary">
			<?php
					print_r($row);
			?>
		</pre>

		<?php
			}
		?>
	</div>

</div>


	
</body>
</html>