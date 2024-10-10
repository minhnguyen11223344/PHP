<?php
	//B1: Kết nối csdl
	//B2: Viết câu lệnh truy vấn
	//B3: Thực thi câu lệnh truy vấn
	//B4: Xử lý kết quả
	//Đóng kết nối

	//B1: Kết nối csdl
	include('ketnoi.php');

	//B2: Viết câu lệnh truy vấn
	//Câu lệnh lấy dữ liệu từ bảng sinh viên
	$sql = "SELECT * FROM tbl_sinhvien";

	//B3: Thực thi câu lệnh truy vấn
	//mysqli_query(biến kết nối, câu lệnh sql)
	//Hàm này trả về giá trị True/False

	$ketqua = mysqli_query($conn, $sql);

	//B4: Xử lý kết quả truy vấn
	//mysqli_fetch_row($ketqua)
	//mysqli_fetch_array($ketqua)
	//mysqli_fetch_assoc($ketqua)
	//Kết quả trả về của các hàm trên là mảng
	//mysqli_fetch_row trả về mảng có khóa tự động

	while ($rows = mysqli_fetch_row($ketqua))
	{
		echo "$rows[0] - $rows[1] - $rows[2] - $rows[3] - $rows[4] - $rows[5]";
		echo "<br>";
	}

	//B5: Đóng kết nối
	//mysqli_close(biến kết nối)

	mysqli_close($conn);
?>