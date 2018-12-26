<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

if(4 <= 4){

	echo "4 is less than or equal to 4";
	echo"<br/>";

}

if(4 >= 4){

	echo "4 is greater or equal to 4";
	echo"<br/>";

}

if(4 == "4"){

	echo "4 and '4' have the same value";
	echo"<br/>";

}

if(4 === "4"){

	echo "4 and '4' have the same value";
	echo"<br/>";

}else {

	echo "4 and '4' do not have the same variable type";
	echo"<br/>";

}

if(4 != 5){

	echo "4 does not equal to 5";
	echo"<br/>";

}

if(5 !== '5'){

	echo "5 and '5' do not have the same variable type";
	echo"<br/>";

}

if(4 === "4" || 4 == 4){

	echo "4 and '4' do not have the same variable type but they have the same value";
	echo"<br/>";

}

if(5 === 3 + 2 && 5 == 3 + 2 ){

	echo "5 and 3 + 2 have the same value and variable type";

}

?>


	
</body>
</html>