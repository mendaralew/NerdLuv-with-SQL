<?php include("top.html"); 
include 'db-connection.php';
if (isset($_GET["name"])) {
	$name= $_GET["name"];
}

if (isset($_GET["password"])) {
	$name= $_GET["password"];
}


$sql="SELECT FROM singles WHERE name = :name AND pass = :pass_hash";
$pass_hash = hash("sha256", $_POST['password'] . $_POST['name']); 
$stmt = $db->prepare($sql);
$stmt->execute(array(":name" => $_POST['name'], ":pass_hash" => $pass_hash));
print_r($stmt);

$matchs="SELECT * FROM singles WHERE gender <> :gender AND age >= :min AND age <= :max AND os = :os AND (type1 = :type1 OR type2 = :type2 OR type3 = :type3 OR type4 = :type4)";
$stat1=$db->prepare($matchs);
$stat1->execute(array())




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Your Matches</title>
</head>
<body>

	<?php

	for($a=0;$a<$users_count;$a++){
		$user_info =explode(',', $all_users[$a]);
		if($user_info[0]==$name){
			$current_user=$all_users[$a];
			$current_user_array=explode(',', $current_user);
		}
	}

		for($i=0;$i<$users_count;$i++){
			$user =explode(',', $all_users[$i]);
			if($user[1] != $current_user_array[1] ){
				if($user[2]>$current_user_array[5] && $user[2]<$current_user_array[6]){
					if ($user[4]==$current_user_array[4]) {

						$similar_char_count=0;
						$user_pre=$user[3];
						$current_pre=$current_user_array[3];
						for($c=0;$c<strlen($user_pre);$c++){
							for($b=0;$b<strlen($current_pre);$b++){
								if($user_pre[$c]==$current_pre[$b]){
									$similar_char_count = $similar_char_count + 1;
								}

							}
						}

						if($similar_char_count >= 2){

							array_push($match_array,$all_users[$i]);
						}
						
					}

				}

			}
		}

	?>

	<strong> Matches for <?=$name?> </strong>
	<?php 
	$match_array_count = count($match_array);
	for ($e=0;$e<$match_array_count;$e++){
		?>
		<div class="match"> 

		<?php 
			$match_array_indv = explode(",", $match_array[$e] );
		?>
	
			<p><img src="images/user.jpg"><?=$match_array_indv[0]?></p>
				<ul>
						<li><strong>gender:</strong> <?=$match_array_indv[1]?></li>
						<li><strong>age:</strong> <?=$match_array_indv[2]?></li>
						<li><strong>type:</strong> <?=$match_array_indv[3]?></li>
						<li> <strong>OS:</strong> <?=$match_array_indv[4]?></li>
				</ul>

		</div>
		<?php
	}
		?>

</body>
</html>




<?php include("bottom.html"); ?>