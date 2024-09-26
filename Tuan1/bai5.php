<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập số thứ nhất : <input type="text" name="txtSo1"><br>
        Nhập số thứ hai : <input type="text" name="txtSo2"><br>
        <input type="submit" value="+" name="cong">
        <input type="submit" value="-" name="tru">
        <input type="submit" value="*" name="nhan">
        <input type="submit" value="/" name="chia">
    </form>

    <?php
    if(isset($_POST['txtSo1']))
    {
        $soThuNhat=$_POST['txtSo1'];
    }
    
    if(isset($_POST['txtSo1']))
    {
        $soThuHai=$_POST['txtSo2'];
    }
        if(is_numeric($soThuNhat) && is_numeric($soThuHai))
        {
            if (isset($_POST['cong'])) {
                $cong = $soThuNhat + $soThuHai;
                echo "Kết quả: $cong" ;
            }
            if (isset($_POST['tru'])) {
                $tru = $soThuNhat - $soThuHai;
                echo "Kết quả: $tru" ;
            }
            if (isset($_POST['nhan'])) {
                $nhan = $soThuNhat * $soThuHai;
                echo "Kết quả: $nhan" ;
            }
            if (isset($_POST['chia'])) {
                $chia = $soThuNhat / $soThuHai;
                echo "Kết quả: $chia" ;
            }
        }
        else
        {
            echo "đây không phải là số vui lòng nhập lại ";
        }   
    ?>
</body>
</html>