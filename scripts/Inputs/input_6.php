<?php
$command=escapeshellcmd("sudo python input_6.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>