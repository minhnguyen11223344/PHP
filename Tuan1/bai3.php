<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập vào n số cần tính giai thừa<input type="text" name="txtSo"> <br>
        <input type="submit" value="Tính" name="btnTinh">
    </form>
    <?php
    $giaiThua = 1;
   
    $nGiaiThua=$_POST['txtSo'];
    if(isset($_POST['btnTinh'])){
        if(is_numeric($nGiaiThua))
        {
        for($i=1; $i <= $nGiaiThua; $i++)
        {
            $giaiThua = $giaiThua * $i;
        }

            echo " giai thừa : $giaiThua";
        }
        else
        {
            echo "đây không phải là số vui lòng nhập lại";
        }
    
    }
    
?>
    
</body>
</html>