<?php 
    //session
    session_start(); //Bắt đầu session
    $_SESSION['Name'] = "user";

    echo "Session Name: " . $_SESSION['Name'];
    echo "<br>";

    //cookie
    $cookieName = "user";
    $cookieValue = "Tuyết Mai";

    setcookie($cookieName, $cookieValue, time() + 86400, "/");
    if(isset($_COOKIE[$cookieName])) {
        echo "Cookie đã tồn tại";
    } else {
        echo "Cookie chưa được thiết lập!";
    }

?>