<?php
$mysqli = new mysqli("localhost", "root", "", "blockphp");
echo $mysqli->host_info . "\n";