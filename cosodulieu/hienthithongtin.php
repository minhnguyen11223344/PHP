<?php
	include_once('ketnoi.php');

	$sql = "SELECT * FROM tbl_sinhvien";

	$ketqua = mysqli_query($conn, $sql);

	echo "<h1> Danh sách sinh viên </h1>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Mã sinh viên</td>";
	echo "<td>Họ tên sinh viên</td>";
	echo "<td>Giới tính</td>";
	echo "<td>Số điện thoại</td>";
	echo "<td>Địa chỉ</td>";
	echo "<td>Email</td>";
	echo "<td>Sửa</td>";
	echo "<td>Xóa</td>";
	echo "</tr>";

	//mysqli_fetch_array($ketqua): Kết quả là mảng kết hợp và mảng tự động
	//mysqli_fetch_assoc($ketqua): Kết quả là mảng kết hợp
	while ($rows = mysqli_fetch_array($ketqua))
	{
		echo "<tr>";
		echo "<td>".$rows[0]."</td>";
		echo "<td>".$rows[1]."</td>";
		echo "<td>".$rows[2]."</td>";
		echo "<td>".$rows[3]."</td>";
		echo "<td>".$rows[4]."</td>";
		echo "<td>".$rows[5]."</td>";
		echo "<td>"."<a href = 'sua.php?id=".$rows[0]."'>sửa</a>"."</td>";
		echo "<td>"."<a href = 'xoa.php?id=".$rows[0]."'>xóa</a>"."</td>";
		echo "</tr>";
	}

	echo "</table>";

	echo "<a href = 'them.php'>Thêm thông tin</a>";
	mysqli_close($conn);
?>