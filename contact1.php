<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Me</title>
</head>

<body>

<?
	
if($_GET['status'] == 'success'){
	echo "From submitted!";
}

else if($_GET['status'] == 'fail'){
	echo "From did not submit. Please try again!";
}
else if($_GET['status'] == 'validationfail'){
	echo "From failed validation. Please try again!";
}
	
?>
<form method="post" action="contactcode.php">
   <p>Fields marked (*) are required</p>
	<p><label for="EmailFrom">Your Email:*</label><br />
	<input id="EmailFrom" size="40" name="EmailFrom" type="text" />
	</p>
	
	
	<p><label for="Name">Your Name:</label><br />
	<input id="Name" size="40" name="Nmae" type="text" />
	</p>
	
	<p><label for="Telephone">Telephone:</label><br />
	<input id="Telephone" size="40" name="Telephone" type="text" />
	</p>
	
	<p><label for="Comment">Any other Comment:</label><br />
	<textarea id="Comment" rows="5"  cols="50" name="Comment"></textarea> 
	</p>
	<p>
	<input type="submit"  name="submit" value="submit" />
	</p>
	
</form>

</body>
</html>