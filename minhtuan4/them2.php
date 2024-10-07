<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        ma nhan vien: <input type="text" name="manv" id=""><br>
        ten nhan vien: <input type="text" name="tennv" id=""><br>
        Gioi tinh : <input type="text" name="gioitinh" id=""><br>
        Ngay sinh : <input type="text" name="ngaysinh" id=""><br>
        Dia chi : <input type="text" name="diachi" id=""><br>
        Email : <input type="text" name="email" id=""><br>
        Don vi :<input type="text" name="donvi" id=""><br>
        Chuc vu :  <input type="text" name="chucvu" id=""><br>
        <input type="submit" name="btnthem" id="">
    </form>

    <?php
        include_once('ketnoi2.php');
        if(isset($_POST['btnthem']))
        {
            $manv = $_POST['manv'];
            $hoten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $email= $_POST['email'];
            $donvi= $_POST['donvi'];
            $chucvu = $_POST['chucvu'];

            $sql = "INSERT INTO tbl_nhanvien VALUES('$manv','$hoten','$gioitinh','$ngaysinh','$diachi','$email','$donvi','$chucvu')";
            $ketqua = mysqli_query($conn, $sql);

            if($ketqua)
            {
                header('location:hienthi2.php');
            }
            else
            {
                echo "Them that bai";
            }
        }

        
        
    ?>
</body>
</html>