<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>


<form method="post"  action = "a1p2.php">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40"value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">	</label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>
<?php
   if(!empty($_REQUEST['firstname'])){
	   $firstname = $_REQUEST['firstname'];
   }
else
{
   $firstname = NULL;
   echo '<p> Please enter Your First name</p>';
}

if(!empty($_REQUEST['lastname'])){
	   $lastname = $_REQUEST['lastname'];
   }
else
{
   $lastname = NULL;
   echo '<p> Please enter Your last name</p>';
}
if(!empty($_REQUEST['age'])){
	$age = $_REQUEST['age']; 
 }
 else{
	 echo '<p> Please enter Your age in number only</p>';
 }


if(isset($_REQUEST['newsletter']))
{
   $newsletter = $_REQUEST['newsletter'];
   
   if ($newsletter == 'Y')
{
   $mess = '<p>Want to subscribe</p>';
} elseif($newsletter == 'N')
   {
   $mess = '<p> Dont want to subscribe</p>';
}
else{
   $newsletter = NULL;
   echo '<p>Please Select Y or N</p>';
}
}else 
{
   $newsletter = null;
   echo '<p>Please selesct Yes Or NO</p>';
}



if($firstname && $lastname && $newsletter && $age)
{
	echo '<P> My first name is ' . $firstname . '</p>';
   echo '<P> My Last name is ' . $lastname . ' </p>';
   echo '<P> My age  is ' . $age . ' </p>';

	echo "$mess";
}else {
   echo '<p>Please Fill your form.</p>';
}

?>
</body>
</html>