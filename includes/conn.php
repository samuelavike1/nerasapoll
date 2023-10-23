<?php
$conn = new mysqli('localhost', 'root', '', 'nerasapoll');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
