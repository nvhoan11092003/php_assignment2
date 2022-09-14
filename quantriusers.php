<?php 
    require_once('db.php');
    $sql = "SELECT * FROM users";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $users = $statement -> fetchAll();
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <table class="table" border="1">
        <thead>
            <tr>
                <th>users</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            
                <?php foreach ($users as $key => $value) :?>
                    <tr>
                    <td> <?= $value['28518_username'] ?></td>
                    <td>*********</td>
                    <td><a href="sua_user.php?id=<?= $value['28518_id']?>"><button class="btn btn-warning">Sửa</button></a>
                    <a href="xoa_user.php?id=<?= $value['28518_id']?>   "><button class="btn btn-danger">Xóa</button></a></td>
                    </tr>
                <?php endforeach ?>
            
        </tbody>
    </table>
    <a href="dangky.php"><button class="btn btn-info my-3">Đăng Ký</button></a> 
</body>
</html>