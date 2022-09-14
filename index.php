<?php 
    // session_start();
    // var_dump($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment2</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1 style="color: blue ;">Đăng Nhập</h1>
    <form action="xuly_dangnhap.php" method="post">
        <div class="">
            <p>Tài Khoản</p>
            <input type="text" name="username" class="form-control" style="width: 250px;">
        </div>
        <div class="">
            <p>Mật khẩu</p>
            <input type="text" name="password" class="form-control" style="width: 250px;">
        </div>
            <h4 style=" color: red ;"> <?= isset($_GET['errors']) ? $_GET['errors'] : "" ?></h4>
        <button class="btn btn-primary mt-3">Đăng Nhập</button>
    </form>
    <a href="dangky.php"><button class="btn btn-info my-3">Đăng Ký</button></a> 
</body>
</html>