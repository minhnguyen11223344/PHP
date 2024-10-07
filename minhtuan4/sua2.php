<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('ketnoi2.php');

        $manv = $_GET['id'];

        $sql = "SELECT * FROM tbl_nhanvien WHERE manv= '$manv'";

        $ketqua = mysqli_query($conn, $sql);

        $rows=mysqli_fetch_row($ketqua);
    ?>

    <form action="" method="post">
        ma nhan vien: <input type="text" name="manv" id="" value="<?php echo $rows[0]; ?> "><br>
        ten nhan vien: <input type="text" name="hoten" id="" value="<?php echo $rows[1]; ?>"><br>
        Gioi tinh : <input type="text" name="gioitinh" id="" value="<?php echo $rows[2]; ?>"><br>
        Ngay sinh : <input type="text" name="ngaysinh" id="" value="<?php echo $rows[3]; ?>"><br>
        Dia chi : <input type="text" name="diachi" id="" value="<?php echo $rows[4]; ?>"><br>
        Email : <input type="text" name="email" id="" value="<?php echo $rows[5]; ?>"><br>
        Don vi :<input type="text" name="donvi" id="" value="<?php echo $rows[6]; ?>"><br>
        Chuc vu :  <input type="text" name="chucvu" id="" value="<?php echo $rows[7]; ?>"><br>
        <input type="submit" name="btnsua" id="" value = "Sua">
    </form>

    <?php
        if(isset($_POST['btnsua']))
        {
            $manv = $_POST['manv'];
            $tennv = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            $email= $_POST['email'];
            $donvi= $_POST['donvi'];
            $chucvu = $_POST['chucvu'];

            $sql = "UPDATE tbl_nhanvien SET manv='$manv',hoten='$tennv',gioitinh='$gioitinh',ngaysinh='$ngaysinh',diachi='$diachi',email='$email',donvi='$donvi',chucvu='$chucvu' where manv='$manv'";
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