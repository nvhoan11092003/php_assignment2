<?php 
    require_once('db.php');
    $id =$_GET['id'];
    $sql =  "DELETE FROM users WHERE users.28518_id = '$id'";
    $statement = $connect -> prepare($sql);
    $statement -> execute();
    header('location:quantriusers.php');
?>