<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php

    $command = escapeshellcmd('py Apriori2.py');
    $output = shell_exec($command);
    echo $output;
    
    echo '<script>window.location.href="insertpro.php";</script>';
?>
</body>
<html>