<?php 
    require_once('db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE 28518_id = $id";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    header('location:trangchu.php');
?>