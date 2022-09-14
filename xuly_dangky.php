<?php 
    require_once('db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    // var_dump($username , $password , $re_password);
    //  check username
    $sql = "SELECT * FROM users";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $users = $statement -> fetchAll();
    foreach ($users as $key => $value) {
        if ($username == $value["28518_username"]) {
            header("location:dangky.php?errorstk=tài khoản này đã tồn tại&username=$username");
        }
    }
    if ($username == "") {
        header("location:dangky.php?errorstk=tài khoản không được để trống&username=$username");
    } 
    if ($password == "") {
        $errors = " Mật Khẩu Không Được Để Trống";
        header("location:dangky.php?errorsnull=$errors&username=$username");
    }
    if ($password != $re_password) {
        $errors = "Mật Khẩu Không Trùng nhau";
        header("location:dangky.php?errorsrp=$errors&username=$username");
    }
   
    $new_password = password_hash($password, PASSWORD_BCRYPT);
    // var_dump($new_password);
    $sql = "INSERT INTO users (28518_id, 28518_username, 28518_password) VALUES (NULL, '$username', '$new_password')";
    $statement = $connect -> prepare($sql);
    $statement -> execute();

        
    
    
?>