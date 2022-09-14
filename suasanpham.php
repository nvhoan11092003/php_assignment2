<?php 
    require_once('db.php');
    session_start();
    if (!isset($_SESSION['user'])) {
        header('location:index.php');
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM products where 28518_id = $id";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $product = $statement -> fetch();
?>
<?php 
    $sql = "SELECT * FROM categories";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $categories = $statement -> fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suasanpham</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Sửa Sản Phẩm</h1>
    <form action="xuly_suasanpham.php?id=<?=$id?>" method="post" class=""  enctype="multipart/form-data">
        <div>
            <p>nhập name</p>
            <input type="text" name="name" class="form-control"  required value="<?= $product['28518_name'] ?>">
        </div>
        <div class="">
            <p>description</p>
            <input type="text" name="description" class="form-control" value="<?=$product['28518_description'] ?>">
        </div>
        <div class="">
            <p>color</p>
            <input type="text" name="color" class="form-control"  required value="<?=$product['28518_color'] ?>">
        </div>
        <div class="">
            <p>price</p>
            <input type="text" name="price" class="form-control"   required value="<?=$product['28518_price']?>">
        </div>
        <div class="">
            <p>image</p>
            <input type="file" name="image_url" class="form-control" value="<?=$product['28518_image_url']?>" >
        </div>
        <div class="">
        <p>categori</p>
        <select name="category_id" style="width: 100px;" class="form-control">
            <?php foreach ($categories as $key => $category) : ?>
                <option <?php if($category['28518_categories_id'] == $product['28518_category_id'])echo 'selected="selected"' ?> value="<?= $category['28518_categories_id'] ?>"><?= $category['28518_categories_name'] ?></option>
            <?php endforeach ?>
            <option   value="<?= $category['28518_categories_id'] ?>">lol</option>
        </select>
        <input type="text" disabled value="<?=$id?>" name="id">
        </div>
        <button class="btn btn-info mt-3">Sửa Sản Phẩm</button>
    </form>
</body>
</html>