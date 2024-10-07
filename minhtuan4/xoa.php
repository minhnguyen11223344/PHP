<?php
    include_once('ketnoi.php');

    $masach=$_GET['id'];

    $sql = "DELETE FROM tbl_sach WHERE masach = '$masach'";

    $ketqua = mysqli_query($conn, $sql);

    if($ketqua)
    {
        header('location:hienthi.php');
    }
    else
    {
        echo "Xoa khong thanh cong ";
    }
?>