<?php 
    require_once('db.php');
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:index.php');
    }
    $sql = "SELECT * FROM products inner join categories on products.28518_category_id = categories.28518_categories_id";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products inner join categories on products.28518_category_id = categories.28518_categories_id
        where products.28518_category_id = $id ";
    }
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $products = $statement -> fetchAll();
  
    //  
    $sql1 = "SELECT * FROM categories";
    $statement = $connect -> prepare($sql1);
    $statement -> execute();
    $categories = $statement -> fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    ul{
        list-style: none;
        display: flex;
    }
    a{
        text-decoration: none;
        padding: 10px;
    }
    img{
        max-width: 70px;
        max-height: 70px;
    }
</style>
<body class="container">
    <header>
        <ul>
            <li><a href="trangchu.php">Trang chu</a></li>
            <?php foreach ($categories as $key => $value) : ?>
                <li><a href="trangchu.php?id=<?= $value['28518_categories_id'] ?>"><?= $value['28518_categories_name'] ?></a></li>
            <?php  endforeach ?> 
        </ul>
    </header>
    <div class="">
    <div class="" style="float: left;">
        <a href="quantriusers.php">Quản trị user</a>
        <a href="quantridanhmuc">Quản Trị Danh Mục</a>
    </div>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>color</th>
                <th>price</th>
                <th>picture</th>
                <th>category</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $value) : ?>
                <tr>
                <td><?=$value['28518_name'] ?></td>
                <td><?=$value['28518_description'] ?></td>    
                <td><?=$value['28518_color'] ?></td>  
                <td><?=$value['28518_price'] ?></td>  
                <td><img src="<?=$value['28518_image_url'] ?>" alt=""></td>  
                <td><?=$value['28518_categories_name'] ?></td>  
                <td><a href="suasanpham.php?id=<?=$value['28518_id'] ?>"><button class="btn btn-warning">Sửa</button></a>
                    <a href="xoasanpham.php?id=<?=$value['28518_id'] ?>"><button class="btn btn-danger ">Xóa</button></a>
                </td>
                </tr>
            <?php  endforeach ?> 
        </tbody>
    </table>
    </div>
    
    <a href="themsanpham.php"><button class="btn btn-info mt-3">thêm sản phẩm</button></a>
    <a href="dangxuat.php"><button class="btn btn-primary mt-3">đăng Xuất</button></a>
</body>
</html>