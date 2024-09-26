<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nhập email:<input type="text" name="email">
        Password : <input type="text" name="pass"><br>
        <input type="submit" name="" id="" value="Gửi">
    </form>

    <?php
        // $email="minhdubai@gmail.com";
        // $pass="123";

        // if($email == $_POST["email"] &&  $pass == $_POST["pass"])
        // {
            $email = $_POST['email'];
            $username=explode("@" ,$email)[0];
            echo $username;
            
        // }
        // else
        // {
        //     echo "Sai thông tin . Vui lòng nhập lại";
        // }

    ?>
</body>
</html>

