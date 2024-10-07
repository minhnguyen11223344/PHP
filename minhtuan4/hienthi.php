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

        $sql = "SELECT * FROM tbl_sach";

        $ketqua = mysqli_query($conn, $sql);
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<td>Ma sach</td>";
        echo "<td>Ten sach</td>";
        echo "<td>Ten tac gia</td>";
        echo "<td>Nha xuat ban</td>";
        echo "<td>Nam xuat ban</td>";
        echo "<td>So trang</td>";
        echo "<td>The loai</td>";
        echo "<td>Sua</td>";
        echo "<td>Xoa</td>";
        echo "</tr>";
        while($rows= mysqli_fetch_row($ketqua))
        {
            echo "<tr>";
            echo "<td>".$rows[0]."</td>";
            echo "<td>".$rows[1]."</td>";
            echo "<td>".$rows[2]."</td>";
            echo "<td>".$rows[3]."</td>";
            echo "<td>".$rows[4]."</td>";
            echo "<td>".$rows[5]."</td>";
            echo "<td>".$rows[6]."</td>";
            echo "<td><a href = 'sua.php?id=".$rows[0]."'>Sua</a></td>";
            echo "<td><a href = 'xoa.php?id=".$rows[0]."'>Xoa</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href = 'themtt.php'>Them thong tin </a>";
    ?>
</body>
</html>