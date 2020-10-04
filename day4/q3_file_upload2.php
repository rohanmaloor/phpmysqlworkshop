<?php

$filename = $_FILES["userfile"]["name"];
$filetype = $_FILES["userfile"]["type"];
$filesize = $_FILES["userfile"]["size"];

echo "File name = $filename<br><br>File type = $filetype<br><br>File size is = $filesize B";

?>