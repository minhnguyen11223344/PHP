<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa thông tin sinh viên</title>
</head>
<body>
	<?php
		include('ketnoi.php');
	?>
	<?php
		$masv = $_GET['id'];

		$sql = "SELECT * FROM tbl_sinhvien WHERE masv = '$masv'";

		$ketqua = mysqli_query($conn, $sql);

		$row = mysqli_fetch_row($ketqua);

	?>
	<form action="" method="post">
		Mã sinh viên: <input type="text" name="txtMasv" value="<?php echo $row[0]; ?>" readonly><br>
		Tên sinh viên: <input type="text" name="txtTen" value="<?php echo $row[1]; ?>"><br>
		Giới tính: <input type="text" name="txtGioitinh" value="<?php echo $row[2]; ?>"><br>
		Số điện thoại: <input type="text" name="txtSodt" value="<?php echo $row[3]; ?>"><br>
		Địa chỉ: <input type="text" name="txtDiachi" value="<?php echo $row[4]; ?>"><br>
		Email: <input type="text" name="txtEmail" value="<?php echo $row[5]; ?>"><br>
		<input type="submit" name="btnSua" value="Lưu thông tin">
	</form>

	<?php
		if (isset($_POST['btnSua']))
		{
			$masv = $_POST['txtMasv'];
			$tensv = $_POST['txtTen'];
			$gioitinh = $_POST['txtGioitinh'];
			$sodt = $_POST['txtSodt'];
			$diachi = $_POST['txtDiachi'];
			$email = $_POST['txtEmail'];

			$sql = "UPDATE tbl_sinhvien SET tensv = '$tensv', gioitinh = '$gioitinh', sodt = '$sodt', diachi = '$diachi', email = '$email' WHERE masv = '$masv'";

			$ketqua = mysqli_query($conn, $sql);

			if ($ketqua)
			{
				header('location:hienthithongtin.php');
			}
			else
			{
				echo "Sửa thất bại";
			}
		}

		mysqli_close($conn);
	?>

</body>
</html>