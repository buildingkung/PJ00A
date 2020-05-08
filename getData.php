<?php

header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'proj_f';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$conn->query("SET character_set_results=utf8");
$conn->query("SET character_set_client=utf8");
$conn->query("SET character_set_connection=utf8");

//echo $gg;


$sql1 = "SELECT * FROM `table_food` WHERE Id_table_food = 1";
$result1 = $conn->query($sql1);
$row1 = mysqli_fetch_array($result1);

$sql2 = "SELECT * FROM `table_food` WHERE Id_table_food = 2";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($result2);

$sql3 = "SELECT * FROM `table_food` WHERE Id_table_food = 3";
$result3 = $conn->query($sql3);
$row3 = mysqli_fetch_array($result3);

$sql4 = "SELECT * FROM `table_food` WHERE Id_table_food = 4";
$result4 = $conn->query($sql4);
$row4 = mysqli_fetch_array($result4);

$sql5 = "SELECT * FROM `table_food` WHERE Id_table_food = 5";
$result5 = $conn->query($sql5);
$row5 = mysqli_fetch_array($result5);

$sql6 = "SELECT * FROM `table_food` WHERE Id_table_food = 6";
$result6 = $conn->query($sql6);
$row6 = mysqli_fetch_array($result6);

$sql7 = "SELECT * FROM `table_food` WHERE Id_table_food = 7";
$result7 = $conn->query($sql7);
$row7 = mysqli_fetch_array($result7);

$sql8 = "SELECT * FROM `table_food` WHERE Id_table_food = 8";
$result8 = $conn->query($sql8);
$row8 = mysqli_fetch_array($result8);

$sql9 = "SELECT * FROM `table_food` WHERE Id_table_food = 9";
$result9 = $conn->query($sql9);
$row9 = mysqli_fetch_array($result9);




if ($_GET['rev'] == 1) {
	echo $row1['name'];
	exit;
}
if ($_GET['rev'] == 2) {
	echo $row2['name'];
	exit;
}

if ($_GET['rev'] == 3) {
	echo $row3['name'];
	exit;
}

if ($_GET['rev'] == 4) {
	echo $row4['name'];
	exit;
}

if ($_GET['rev'] == 5) {
	echo $row5['name'];
	exit;
}

if ($_GET['rev'] == 6) {
	echo $row6['name'];
	exit;
}

if ($_GET['rev'] == 7) {
	echo $row7['name'];
	exit;
}

if ($_GET['rev'] == 8) {
	echo $row8['name'];
	exit;
}

if ($_GET['rev'] == 9) {
	echo $row9['name'];
	exit;
}
