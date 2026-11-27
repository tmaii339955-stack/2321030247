<?php
    $id = $_GET['id'];
    $sql ="DELETE FROM `nguoi_dung` where id = '$id'";
    mysqli_query($conn, $sql);
    header("location: index.php?trang=taikhoan");
?>