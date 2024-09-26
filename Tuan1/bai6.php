<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 style>Thông tin tài khoản</h1>
    </div>
    <div>
        <form action="dangnhap.html" method="post">
        <p>Thông tin tài khoản : <input type="text" name="txtTT" id=""></p>
        <p>Email : <input type="text" name="email" id=""></p>
        <p>password: <input type="text" name="pass" id=""></p>
        <p style="color:Tomato;">Thông tin cá nhân </p>
        <p>Họ và tên : <input type="text" name="hoTen" id=""></p>
        <p>Số điện thoại : <input type="text" name="Sdt" id=""></p>
        <p>Địa chỉ : <input type="text" name="" id="diaChi"></p>
        <p>Giới tính : 
        <input type="radio" id="" name="gioiTinh" value="Nam">Nam
        <input type="radio" id="" name="gioiTinh" value="Nu">Nữ
        </p>
        <p>Sở thích : 
        <input type="checkbox" name="Example-1" value="on" id="Example-1"> Xanh
        <input type="checkbox" name="Example-1" value="on" id="Example-1"> Đỏ
        <input type="checkbox" name="Example-1" value="on" id="Example-1"> Vàng
        </p>
        <div>
            <input type="submit" name="btnDky" id="" value="Đăng ký">
            <input type="submit" name="lamLai" id="" value="Làm lại">
        </div>    
    </form>
    </div>

    <?php
       $email=$_POST['email'];
       $pass=$_POST['pass'];

       if($email == $_POST["email"] &&  $pass == $_POST["pass"])
       {
        $email = $_POST['email'];
        $username=explode("@" ,$email)[0];
        echo $username;

       }
       else
       {
            echo"vui lòng kiểm tra lại ";
       }

    ?>
</body>
</html>