<?php include("top.html"); ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sign Up</title>
	<link rel="stylesheet" type="text/css" href="nerdluv.css">
</head>
<body>
	

<form action="signup-submit.php" method="post">
	 	<fieldset>
 		<legend>New User Signup:</legend>
 		<strong>Name: </strong><input type="text" name="name" maxlength="16" /> <br />
 		<strong>Password: </strong> <input type ="password" name="password"/><br/>
 		<strong>Gender:</strong><input type="radio" name="gender" value="Male"  /> Male <input type="radio" name="gender" value="Female" checked/> Female </br>
 		<strong>Age: </strong><input type="text" name="age" maxlength="2" size="6" /> <br />
 		<strong>Personality type:</strong><input type="text" name="personality" maxlength="4" size="6" /><span>(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)</span><br />
 		<strong>Favorite OS:</strong>
 		<select name="favorite">
				  <option selected>Windows</option>
				  <option>Mac OS X</option>
				  <option >Linux</option>
		</select></br>
		<strong>Seeking age:</strong> <input type="text" name="min" maxlength="2" size="6" placeholder="min"/> to <input type="text" name="max" maxlength="2" size="6" placeholder="max"/><br/>
		<input type="submit" value="Sign Up">
 	</fieldset>
 </form>
	
 
</body>
</html>

<?php include("bottom.html"); ?>