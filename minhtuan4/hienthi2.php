<?php
    include_once('ketnoi2.php');

    $sql = "SELECT *FROM tbl_nhanvien";
    $ketqua = mysqli_query($conn, $sql);
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<td>Ma nhan vien</td>";
    echo "<td>Ten nhan vien</td>";
    echo "<td>Gioi tinh</td>";
    echo "<td>Ngay sinh</td>";
    echo "<td>Dia chi</td>";
    echo "<td>Email</td>";
    echo "<td>Don vi</td>";
    echo "<td>Chuc vu</td>";
    echo "<td>Sua</td>";
    echo "<td>Xoa</td>";
    echo "</tr>";
    while($rows=mysqli_fetch_row($ketqua))
    {
        echo "<tr>";
        echo "<td>".$rows[0]."</td>";
        echo "<td>".$rows[1]."</td>";
        echo "<td>".$rows[2]."</td>";
        echo "<td>".$rows[3]."</td>";
        echo "<td>".$rows[4]."</td>";
        echo "<td>".$rows[5]."</td>";
        echo "<td>".$rows[6]."</td>";
        echo "<td>".$rows[7]."</td>";
        echo "<td><a href = 'sua2.php?id=".$rows[0]."'>Sua</a></td>";
        echo "<td><a href = 'xoa2.php?id=".$rows[0]."'>Xoa</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href = them2.php>them thong tin </a>";



?>