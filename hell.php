<?php 
header('Content-Type: text/html; charset=tis-620');

?>
<html>
<body>
<?php 
$command = escapeshellcmd('py hello.py');
$output = shell_exec($command);
echo $output;

?>
</body>
</hyml>