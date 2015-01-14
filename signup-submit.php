<?php
include 'db-connection.php';


$Name= $_POST["name"];
$Password =$_POST["password"];
$Gender=$_POST["gender"];
$Age=$_POST["age"];
$Personality=$_POST["personality"];
$Type1= $Personality[0];
$Type2= $Personality[1];
$Type3= $Personality[2];
$Type4= $Personality[3];
$FavoriteOS =$_POST["favorite"];
$Seeking_age_min = $_POST["min"];
$Seeking_age_max =$_POST["max"];


$sql = "INSERT INTO singles VALUES (NULL, :name, :pass_hash, :gender, :age, :type1, :type2, :type3, :type4, :os, :min, :max)";
$pass_hash = hash("sha256", $Password . $Name); 
$stmt = $db->prepare($sql);
$stmt->execute(array(":name" => $Name, ":pass_hash" => $pass_hash,":gender"=>$Gender ,":age"=>$Age ,":type1"=>$Type1,":type2"=>$Type2 ,":type3"=>$Type3,":type4"=>$Type4 ,":os"=>$FavoriteOS ,":min"=>$Seeking_age_min ,":max"=>$Seeking_age_max ));



header("Location: result.php?name=".$Name);
?>






















