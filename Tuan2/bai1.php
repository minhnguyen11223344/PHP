<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['btnKq'])){
    
    $hky1=$_POST['hki1'];
    $hky2=$_POST['hki2'];
    if(is_numeric($hky1) && is_numeric($hky2)){
        $diemtb=($hky1+($hky2*2))/3;

        $_POST['diemtb']=$diemtb;

        if($diemtb<5)
        {
            $ketqua="ở lại lớp";
        }
        elseif($diemtb>=5)
        {
            $ketqua="lên lớp";
        }

        if($diemtb>=8)
        {
            $xeploai="Giỏi";
        }
        elseif($diemtb<8 && $diemtb>6.5)
        {
            $xeploai="Khá";
        }
        else {
            $xeploai="Yếu";
        }
    }
    else {
        echo "đây không phải là số vui lòng nhập lại";
    }
    
}
   
?>
<form action="" method="post">
        <h1 class="h1">Kết quả học tập</h1>
        Điểm học kì 1 : <input type="text" name="hki1" value="<?php if(isset($hky1)) echo $hky1; else echo ""; ?>"><br>
        Điểm học kì 2 : <input type="text" name="hki2" value="<?php if(isset($hky2)) echo $hky2; else echo ""; ?>"><br>
        Điểm trung bình : <input type="text" name="diemtb" value="<?php if(isset($diemtb)) echo $diemtb; else echo ""; ?>"><br>
        Kết quản : <input type="text" name="ketqua" value="<?php if(isset($ketqua)) echo $ketqua; else echo ""; ?>"><br>
        Xếp loại học lực : <input type="text" name="xeploai" value="<?php if(isset($xeploai)) echo $xeploai; else echo ""; ?>"><br>
        <input type="submit" name="btnKq" value="Xem kết quả"><br>
    </form>
    
</body>
</html>