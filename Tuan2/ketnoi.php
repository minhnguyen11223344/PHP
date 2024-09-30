<?php
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'ql_ban_sua';

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if(!$conn)
    {
        echo "Kết nối không thành công ";
    }
?>