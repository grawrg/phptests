<?php
$HTMLout = '';
$CSSout = '';

$servername = "remotemysql.com";
$username = "4y5AMwmwI3";
$password = "cebRbNkF8X";
$dbname = "4y5AMwmwI3";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$HTMLout = '
<html>
	<head>
		<title>123 test</title>
	'.$CSSout.'
	</head>
	<body>
		123 test
	</body>
';