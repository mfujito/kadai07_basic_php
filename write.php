<?php
$gender = $_POST["gender"] ?? "";
$age = $_POST["age"] ?? "";
$budget = $_POST["budget"] ?? "";
$c = ",";
$str = $gender.$c.$age.$c.$budget;

$file = fopen("kenshindatas.csv", "a");
fwrite($file, $str."\n");
fclose($file);

header("Location: read.php");
exit;
?>

