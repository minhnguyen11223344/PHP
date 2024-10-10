<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm thông tin sinh viên</title>
</head>
<body>
	<form action="" method="post">
		Mã sinh viên: <input type="text" name="txtMasv"><br>
		Tên sinh viên: <input type="text" name="txtTen"><br>
		Giới tính: <input type="text" name="txtGioitinh"><br>
		Số điện thoại: <input type="text" name="txtSodt"><br>
		Địa chỉ: <input type="text" name="txtDiachi"><br>
		Email: <input type="text" name="txtEmail"><br>
		<input type="submit" name="btnThem" value="Lưu thông tin">
	</form>
	<?php
		include_once('ketnoi.php');

		if (isset($_POST['btnThem']))
		{
			$masv = $_POST['txtMasv'];
			$tensv = $_POST['txtTen'];
			$gioitinh = $_POST['txtGioitinh'];
			$sodt = $_POST['txtSodt'];
			$diachi = $_POST['txtDiachi'];
			$email = $_POST['txtEmail'];

			$sql = "INSERT INTO tbl_sinhvien VALUES ('$masv','$tensv','$gioitinh','$sodt','$diachi','$email')";

			$ketqua = mysqli_query($conn, $sql);

			if ($ketqua)
			{
				header('location:hienthithongtin.php');
			}
			else
			{
				echo "Thêm thất bại";
			}
		}

		mysqli_close($conn);
	?>
	<a href="hienthithongtin.php">Trở về</a>
</body>
</html>