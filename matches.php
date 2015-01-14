<?php include("top.html"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Match</title>
	<link rel="stylesheet" type="text/css" href="nerdluv.css">

</head>
<body>
	<form action="matches-submit.php" method="get">
		<fieldset>
			<legend>Returning User:</legend>
			<strong> Name: </strong> <input type="text" name="name" maxlength="16" /> <br />
			<strong> Password: </strong> <input type="password" name="password"><br/>
			<input type="submit" value="View My Matches">
		</fieldset>
	</form>
</body>
</html>


<?php include("bottom.html"); ?>