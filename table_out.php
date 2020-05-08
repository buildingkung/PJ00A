<?php
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


if (isset($_POST['attila'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 1";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['nero'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 2";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['shiki'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 3";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['atolfo'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 4";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['gundam'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 5";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['aoi'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 6";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['miyabi'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 7";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}

if (isset($_POST['nadeshigo'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 8";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}
if (isset($_POST['hanego'])) {
    $sql1 = "UPDATE `table_food` SET `name`='',`total`= '' WHERE Id_table_food = 9";
    $result_1 = $conn->query($sql1);

    if ($result_1) {
        //echo "<script type='text/javascript'> Swal.fire('ใส่ตะกร้าเรียบร้อย')</script>";
        header("Location: table.php");
    } else {
        echo "no";
    }
}
