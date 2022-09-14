<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tạo tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="container">
    <h1 style="color: orange ;">tạo tài khoản</h1>
    <form action="xuly_dangky.php" method="post">
        <div class="">
            <h6>Tài Khoản</h6>
            <input type="email" name="username" value=" <?= isset($_GET['username']) ? $_GET['username'] : "" ?>" class="form-control" style="width: 250px;" required>
            <h4 style="color: red ;"> <?= isset($_GET['errorstk']) ? $_GET['errorstk'] : "" ?></h4>
        </div>
        <div class="">
            <h6>Mật khẩu</h6>
            <input type="text" name="password" class="form-control" style="width: 250px;">
            <h4 style="color: red ;"><?= isset($_GET['errorsnull'])  ? $_GET['errorsnull'] : "" ?></h4>
        </div>
        <div class="">
            <h6>nhập lại Mật khẩu</>
                <input type="text" name="re_password" class="form-control" style="width: 250px;">
        </div>
        <h4 style="color: red ;"> <?= isset($_GET['errorsrp'])  ? $_GET['errorsrp'] : "" ?></h4>
        <button class="btn btn-primary mt-3">Tạo Tài Khoản</button>
    </form>

</body>

</html>