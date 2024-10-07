<?php
    $hostname = 'localhost';
    $username = 'root';
    $pass = '';
    $database = 'qlnhansu';

    $conn = mysqli_connect($hostname, $username, $pass, $database);
    $sql = "SELECT * FROM tbl_nhanvien";
    $ketqua = mysqli_query($conn, $sql);

    if(!$ketqua)
    {
        echo "Ket noi khong thanh cong";
    }
    
?>