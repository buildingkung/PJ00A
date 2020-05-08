<?php
include "config.php";
include_once "Common.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $common = new Common();
    $common->soldoutMenuRecordById($connection,$recordId);
    echo '<script>window.location.href="soldout.php";</script>';
}