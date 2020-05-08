<?php
ob_start();
session_start();
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

if(isset($_POST['Submit']))
{
    $user = $_POST['user'];
    $sql = "SELECT * FROM `user` WHERE `user` = '" . $_POST['user'] . "' && pass= '" . $_POST['pass'] . "' ";
    $result = $conn->query($sql);
   
    /*$sqllevel = "SELECT level FROM `user` WHERE `user` = '" . $_POST['user'] . "' && pass= '" . $_POST['pass'] . "' ";
    $resultlevel = $conn->query($sqllevel);*/

    
    if (mysqli_num_rows($result) == 1 /*&& $sqllevel == '1'*/  ) 
    {
        $row = mysqli_fetch_array($result);

        if($row["level"] == 1){
            $_SESSION['id_login'] = $row["user"];
            echo "<script type='text/javascript'>alert('OK');</script>";
            header("location: insertpro.php");
        }

        elseif($row["level"] == 2){
            $_SESSION['id_login'] = $row["user"];
            echo "<script type='text/javascript'>alert('OK');</script>";
            header("location: table.php");
        }
    
    } 
    
    /*else if (mysqli_num_rows($result)== 1 && $sqllevel == '2'  ) 
    {
        $row = mysqli_fetch_array($result);
    
        $_SESSION['id_login'] = $row["user"];
        echo "<script type='text/javascript'>alert('OK');</script>";
        header("location: updatemenu.php");
    } */
    
    else {
        echo "<script type='text/javascript'>alert('NO');</script>";
        header("Location:login.php"); }
        
    }
ob_end_flush();
