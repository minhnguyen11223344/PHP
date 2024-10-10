<?php
	include('ketnoi.php');

	$masv = $_GET['id'];

	$sql = "DELETE FROM tbl_sinhvien WHERE masv = '$masv'";
	
	$ketqua = mysqli_query($conn, $sql);

	if ($ketqua)
	{
		header('location:hienthithongtin.php');
	}
	else
	{
		echo "Xóa thất bại";
	}

	mysqli_close($conn);
?>