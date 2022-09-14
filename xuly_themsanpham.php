<?php 
    require_once('db.php');
    $name = $_POST['name'];
    $description= $_POST['description'];
    $color= $_POST['color'];
    $price= $_POST['price'];
    $anh= $_FILES['image_url'];
    $category_id= $_POST['category_id'];  
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
    $sql = "INSERT INTO products (28518_id, 28518_name, 28518_description, 28518_color, 28518_price, 28518_image_url, 28518_category_id) 
    VALUES (NULL, '$name', '$description', '$color', '$price', '$link_anh', '$category_id')";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    header('location:trangchu.php');
?>