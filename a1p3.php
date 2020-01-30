<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo "<strong>Old array </strong>: $text";
$small = explode(" ",$text); 
asort($small);
$small = implode (" ", $small);

echo "<br><strong>Sorted Array </strong>: $small";
?>





<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>
<?php
function uniqueCharacter($str){
	for ($i = 0; $i <strlen($str); $i++ )
	{ 
		for($j = $i + 1 ; $j <strlen($str); $j++)
		{
			if($str[$i] == $str[$j])
			{
				return true;
			}
		}
	}
	return false;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(!empty($_POST['firstname'])){
		$check = uniqueCharacter($_POST['firstname']);
		if($check == true ){
			echo "Duplicate Character";
		}
		else
		{
			echo " No Duplicate Charcter";
		}
	}
	else{
		echo "Fill the value";
	}
}



?>
</body>
</html>