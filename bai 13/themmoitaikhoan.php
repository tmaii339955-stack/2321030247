<?php
    if(isset($_POST['tenDangNhap']) && 
        isset($_POST['matKhau']) &&
        isset($_POST['email']) &&
        isset($_POST['soDienThoai'])){
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $soDienThoai = $_POST['soDienThoai'];
            if(!empty($tenDangNhap) &&
            !empty($matKhau) &&
            !empty($email) &&
            !empty($soDienThoai)){
                $sql = "INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `email`, `so_dien_thoai`) VALUES ('$tenDangNhap','$matKhau','$email','$soDienThoai')";

                if(mysqli_query($conn, $sql)){
                    header("location: index.php?trang=taikhoan");
                }
                else{
                    echo "thêm không thành công!";
                }
            }else{
                echo "Vui lòng nhập đầy đủ thông tin!";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới tài khoản</h1>
    <form action="index.php?trang=themmoitaikhoan" method="POST">
        <div>
            <p>Tên đăng nhập</p>
            <input name="tenDangNhap" type="text">
        </div>
        <div>
            <p>Mật khẩu</p>
            <input name="matKhau" type="password">
        </div>
        <div>
            <p>Email</p>
            <input name="email" type="email">
        </div>
        <div>
            <p>Số điện thoại</p>
            <input name="soDienThoai" type="tel">
        </div>
        <div>
           <button>Thêm</button>
        </div>
    </form>
</body>
</html>