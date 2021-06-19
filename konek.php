<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbquran";

$konek = mysqli_connect($server, $user, $password, $database) or die (mysqli_error($konek));