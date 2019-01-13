<?php	
	include "db.php";
	include "functions.php";
	include "html/header.php";

	generateHeader("Delete");

	if(isset($_POST['submit'])) {

		$id = $_POST['id'];

		deleteUser($id);

	}

?>

<body>
	

<div class="container">
	
	<div class="col-sm-6">
		<form action="login_delete.php" method="POST">
			<div class="form-group">
				<select name="id" id="">

					<?php
						echoAll(); 
					?>
					
				</select>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="DELETE">
		</form>
	</div>

</div>


	
</body>
</html>