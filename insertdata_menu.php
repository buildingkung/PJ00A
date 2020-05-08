<?php
$name = $_GET['name'];
$all = $_GET['all'];
$qr = $_GET['qr'];

$nb = $_GET['countall'];



if ($qr == "attila") {
    $id = 1;
} else if ($qr == "nero") {
    $id = 2;
} else if ($qr == "shiki") {
    $id = 3;
} else if ($qr == "atolfo") {
    $id = 4;
} else if ($qr == "gundam") {
    $id = 5;
} else if ($qr == "aoi") {
    $id = 6;
} else if ($qr == "miyabi") {
    $id = 7;
} else if ($qr == "nadeshigo") {
    $id = 8;
} else if ($qr == "hanego") {
    $id = 9;
} else {
    header("Location: menuall.php?per=n");
    echo "n";
}

echo $id;

//echo  $qr;

/*echo "name: $qrcode";
echo "all: $all";*/

header('Content-Type: text/html; charset=utf-8');
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

$sql = "SELECT * FROM `table_food` WHERE Id_table_food = $id";
$result = $conn->query($sql);

$row = mysqli_fetch_array($result);



if ($row['name'] == null) {
    $sql1 = "UPDATE `table_food` SET name='" . $name . "',total='" . $all . "' WHERE Id_table_food = $id";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        echo "y";
        header("Location: menuall.php?per=y");
    } else {
        header("Location: menuall.php?per=n");
        echo "n";
    }
} else {

    header("Location: menuall.php?per=n");
    echo "n";
}
