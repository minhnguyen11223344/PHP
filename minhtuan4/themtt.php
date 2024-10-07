<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhap ma sach : <input type="text" name="masach" id=""> <br>
        Nhap ten sach : <input type="text" name="tensach" id=""><br>
        Tac gia : <input type="text" name="tacgia" id=""><br>
        Nha xuat ban : <input type="text" name="nhaxb" id=""><br>
        Nam xuat ban : <input type="text" name="namxb" id=""><br>
        So trang : <input type="text" name="sotrang" id=""><br>
        The loai : <input type="text" name="theloai" id=""><br>
        <input type="submit" name="btnthem" id="" value = "Them">
    </form>

    <?php
        // ket noi database
        include_once('ketnoi.php');
        if (isset($_POST['btnthem']))
		{
            $masach = $_POST['masach'];
            $tensach = $_POST['tensach'];
            $tacgia = $_POST['tacgia'];
            $nhaxb = $_POST['nhaxb'];
            $namxb = $_POST['namxb'];
            $sotrang = $_POST['sotrang'];
            $theloai = $_POST['theloai'];

            $sql = "INSERT INTO tbl_sach VALUES('$masach','$tensach','$tacgia','$nhaxb','$namxb','$sotrang','$theloai')";

            $ketqua = mysqli_query($conn, $sql);

            if($ketqua)
            {
                header("location:hienthi.php");
            }
            else
            {
                echo "chua them thanh cong";
            }
        }
    ?>
</body>
</html>