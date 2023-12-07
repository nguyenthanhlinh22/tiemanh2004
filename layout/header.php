<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- gg font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <!-- link css -->
    <link rel="stylesheet" href="pulic/Css/style.css">
    <title>Tiệm ảnh 2004</title>
    <link rel="icon" href="pulic/img/T.png" type="image/x-icon">
</head>
<body>
   <div id="main">
    <!-- heder -->
    <header>
      
           <!-- logo -->
           <div class="header_logo">
                 <a href="/index.php?action=trangchu"><img src="pulic/img/T.png" alt="Logo wed"></a>
            </div>
            <!-- nav -->
            <ul class="nav_links">
                <li class="nav_link"><a href="/index.php?action=trangchu">Trang chủ </a></li>
                <li class="nav_link"><a href="/index.php?action=gioithieu">Giới Thiệu </a></li>
                <li class="nav_link"><a href="/index.php?action=dichvu">Dịch Vụ</a></li>
                <li class="nav_link"><a href="/index.php?action=phukien">Phụ Kiện </a></li>
                <li class="nav_link"><a href="/index.php?action=trangphuc">Trang phục </a></li>
                <li class="nav_link"><a href="/index.php?action=blog">Blog </a></li>
                <li class="nav_link"><a href="/index.php?action=addlh">Liên Hệ </a></li>
            </ul>
         <!-- header_login -->
         <?php
         // Kiểm tra xem đã có session 'user' hay chưa
            if(isset($_SESSION['user'])){
              extract($_SESSION['user']); //chuyển các thành phần của session 'user' thành các biến cục bộ
            ?>
            <div class="header_login">
              
              <?php if($user>0){
                echo '<a href="/index?action=viewcart"><i class="fa-solid fa-cart-shopping"></i></a>';
                echo '<a href="/index.php?action=thongtincanhan"><i class="fa-solid fa-user"></i></a>';
                } else echo "<a href='/index.php?action=dangnhap'><button onclick='dangNhap()'> Đăng nhập</button></a>";
                ?>
            </div>
            <?php

                } else {

            ?>
            
            <div class="header_login">
              <a href="/index.php?action=dangnhap"><button onclick="dangNhap()"> Đăng nhập</button></a>
            </div>
            <?php } ?>

            <!-- cart -->
            <!-- <div class="header_cart">
              <a href="/index.php?action=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
            </div> -->