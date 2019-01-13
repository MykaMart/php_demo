<?php
	
	include "db.php";
	include "functions.php";
	include "html/header.php";

	generateHeader("Read");

	$result = readUsers();
?>

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