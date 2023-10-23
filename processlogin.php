<?php

$open_connect = 1;
require('connect.php');

if(isset($_POST['email_accouunt']) && isset($_POST['password_accouunt'])){
   $email_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['email_accouunt']));
   $password_account = htmlspecialchars( mysqli_real_escape_string($connect, $_POST['password_accouunt']));
    $query_check_account = "SELECT * FROM account WHERE email_account = '$email_account'";
    $call_back_check_account = mysqli_query($connect, $query_check_account);
    if(mysqli_num_rows($call_back_check_account) == 1){
        $result_check_account = mysqli_fetch_assoc($call_back_check_account);
        echo  $result_check_account['password_account'];

    }else{
        die(header('location: login.php')); //ไม่มีอีเมล์ในระบบ
    }
}else{
    die(header('location: login.php')); //กรุณากรอกข้อมูล
}

?>