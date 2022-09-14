<?php 
    require_once('db.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $users = $statement -> fetchAll();
    $on = false;
    foreach ($users as $key => $value) {
        if ($username == $value["28518_username"]) {
           if (password_verify($password , $value['28518_password'])) {
                $_SESSION['user'] = $users[$key];
                $on = true;  
           }
        }
    }
    var_dump($on);
    if ($on) {
        header('location:trangchu.php');
    }
    else {
        header('location:index.php?errors=tài khoản hoặc mật khẩu không đúng');
    }
    var_dump( $_SESSION['user']);


?>