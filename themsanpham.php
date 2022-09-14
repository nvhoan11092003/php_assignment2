<?php 
    require_once('db.php');
    $sql = "SELECT * FROM categories";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    $categories = $statement -> fetchAll();
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
    <title>themsanpham</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Thêm Sản Phẩm</h1>
    <form action="xuly_themsanpham.php" method="post" class=""  enctype="multipart/form-data">
        <div>
            <p>nhập name</p>
            <input type="text" name="name" class="form-control"  required>
        </div>
        <div class="">
            <p>description</p>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="">
            <p>color</p>
            <input type="text" name="color" class="form-control"  required>
        </div>
        <div class="">
            <p>price</p>
            <input type="text" name="price" class="form-control"   required>
        </div>
        <div class="">
            <p>image</p>
            <input type="file" name="image_url" class="form-control">
        </div>
        <div class="">
        <p>categori</p>
        <select name="category_id" style="width: 100px;" class="form-control">
            <?php foreach ($categories as $key => $category) : ?>
                <option value="<?= $category['28518_categories_id'] ?>"><?= $category['28518_categories_name'] ?></option>
            <?php endforeach ?>
        </select>
        </div>
        <button class="btn btn-info mt-3">Tạo Sản Phẩm</button>
    </form>
    <form action="xuly_themsanpham" method="post" class=""  enctype="multipart/form-data">
    <div class="">
            <p>image</p>
            <input type="file" name="image_url" class="form-control">
        </div>
       
        <button class="btn btn-info mt-3" onclick="return confirm('Bạn có muốn xoá không?')">Tạo Sản Phẩm</button>
    </form>
     <!-- lấy thông tin qua file qua phương thức $_FILES
     file su ly
    $anh= $_FILES['image_url']; 
    $link_anh = '';
    if ($anh['tmp_name'] != '') {
        // Nếu ảnh có nội dung khác chuỗi rỗng thì sẽ upload
        $folderName = 'images/';
        $fileName = uniqid() . '_' . $anh['name'];
        // move_uploaded_file(nội dung file, đường dẫn tới ảnh được lưu);
        move_uploaded_file($anh['tmp_name'], $folderName . $fileName);
        // Gán đường dẫn ảnh vào biến để lưu vào DB
        $link_anh = $folderName . $fileName;
    }
     -->
</body>
</html>