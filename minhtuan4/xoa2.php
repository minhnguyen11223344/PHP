<?php
    include_once('ketnoi2.php');
    $manv=$_GET['id'];

    $sql = "DELETE FROM tbl_nhanvien WHERE manv='$manv'";

    $ketqua = mysqli_query($conn, $sql);

    if($ketqua)
    {
        header('location:hienthi2.php');
    }
    else
    {
        echo "xoa that bai";
    }
?>