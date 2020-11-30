<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "hotels";
$db = mysqli_connect($serverName,$dBUsername,$dBPass,$dBName)or die("connection to database failed");