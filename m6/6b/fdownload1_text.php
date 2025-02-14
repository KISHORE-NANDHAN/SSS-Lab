<?php

$file_url = "D:\xampp\htdocs\SSS-Lab\m6\6b\index.html";

header("Content-Type: application/octet-stream");

header("Content-Transfer-Encoding: utf-8");

header("Content-disposition: attachment; filename=\"".basename ($file_url)."\"");

readfile($file_url);

?>