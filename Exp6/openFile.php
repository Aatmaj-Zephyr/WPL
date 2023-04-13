<?php

echo 'Hello';

$myfile = fopen("applications.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("applications.html"));
fclose($myfile);
?>
