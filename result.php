<?php include("top.html"); 
if (isset($_GET["name"])) {
	$name= $_GET["name"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Result</title>
</head>
<body>
 
	<p>Thank you!</p>
	<p>Welcome to NerdLuv,<?=$name?></p>
	<p> Now <a href="matches.php"> log in to see your matches!</a></P>
 
</body>
</html>

<?php include("bottom.html"); ?>