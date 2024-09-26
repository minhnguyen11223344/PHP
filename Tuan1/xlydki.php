<?php
       $email=$_POST['email'];
       $pass=$_POST['pass'];

       if($email == $_POST["email"] &&  $pass == $_POST["pass"])
       {
        $email = $_POST['email'];
        $username=explode("@" ,$email)[0];
        echo "Chào mừng bạn " .$username;

       }
       else
       {
            echo"vui lòng kiểm tra lại ";
       }

    ?>