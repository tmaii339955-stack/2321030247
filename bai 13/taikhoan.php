<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        tr,th,td{
            border: 1px solid black;
        }

        a{
            text-decoration: none;
        }

        .xoa{
            color: red;
        }
    </style>
</head>
<body>
    <a href="index.php?trang=themmoitaikhoan">Thêm mới</a>
    <h1>Danh sách tài khoản</h1>
    <table>
        <tr>
            <th>id</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Chức năng</th>
        </tr>
        <?php
            $sql = "select * from nguoi_dung";
            $ketQua = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($ketQua)){         
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['ten_dang_nhap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['so_dien_thoai'] ?></td>
            <td>
                <a href="#">Sửa</a>
                <a class="xoa" href="index.php?trang=xoataikhoan&id=<?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>