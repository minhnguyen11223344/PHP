<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'ql_sinhvien';

	$conn = mysqli_connect($hostname, $username, $password, $database);

	if (!$conn)
	{
		echo "Kết nối thất bại";
	}
?>