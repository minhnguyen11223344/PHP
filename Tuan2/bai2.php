<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['btnTim']))
        {
            $soA=$_POST['soA'];
            $soB=$_POST['soB'];

            if(is_numeric($soA) && is_numeric($soB))
            {
                if($soA>$soB)
                {
                    $ketqua=$soA;
                }
                else {
                    $ketqua=$soB;
                }
            }
            else {
                $ketqua= "Đây không phải là số vui lòng nhập lại";
            }
        }
    ?>
<form action="" method="post">
        <h1>Tìm số lớn hơn</h1>
        Số A : <input type="text" name="soA" value="<?php if(isset($soA)) echo $soA; else echo " "; ?>"><br>
        Số B : <input type="text" name="soB" value="<?php if(isset($soB)) echo $soB; else echo " "; ?>"><br>
        Số lớn hơn : <input type="text" name="soLon" value="<?php if(isset($ketqua)) echo $ketqua; else echo " "; ?>"><br>
        <input type="submit" name="btnTim" value="Tìm">
    </form>
</body>
</html>