<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include_once('ketnoi.php');
        $masach = $_GET['id'];
        $sql = "SELECT * FROM tbl_sach WHERE masach = '$masach'";
        $ketqua=mysqli_query($conn, $sql);

        $row = mysqli_fetch_row($ketqua);
        

    ?>
<form action="" method="post">
        Nhap ma sach : <input type="text" name="masach" id=""  value="<?php echo $row[0]; ?>"> <br>
        Nhap ten sach : <input type="text" name="tensach" id=""  value="<?php echo $row[1]; ?>"><br>
        Tac gia : <input type="text" name="tacgia" id=""  value="<?php echo $row[2]; ?> "><br>
        Nha xuat ban : <input type="text" name="nhaxb" id=""  value="<?php echo $row[3]; ?>"><br>
        Nam xuat ban : <input type="text" name="namxb" id=""  value="<?php echo $row[4]; ?>"><br>
        So trang : <input type="text" name="sotrang" id=""  value="<?php echo $row[5]; ?>"><br>
        The loai : <input type="text" name="theloai" id=""  value="<?php echo $row[6]; ?>"><br>
        <input type="submit" name="btnsua" id="" value = "Sua thong tin">
    </form>

    

    <?php
        if (isset($_POST['btnsua']))
		{
            $masach = $_POST['masach'];
            $tensach = $_POST['tensach'];
            $tacgia = $_POST['tacgia'];
            $nhaxb = $_POST['nhaxb'];
            $namxb = $_POST['namxb'];
            $sotrang = $_POST['sotrang'];
            $theloai = $_POST['theloai'];

            $sql = "UPDATE tbl_sach SET masach = '$masach',tensach='$tensach',tacgia='$tacgia',nhaxb='$nhaxb',namxb='$namxb',sotrang='$sotrang',theloai='$theloai' WHERE masach = '$masach'";

            $ketqua = mysqli_query($conn, $sql);

            if($ketqua)
            {
                header('location:hienthi.php');
            }
            else
            {
                echo "chua them thanh cong";
            }
        }
       

        


    ?>
</body>
</html>