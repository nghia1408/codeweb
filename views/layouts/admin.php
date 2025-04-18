<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <title>Home - Exclusive E-Commerce Website</title>
</head>
<body>
<div class="top_nav">
    <div class="container top_nav_container">
        <div class="top_nav_wrapper">
            <p class="tap_nav_p">Nội Thất Gia Đình Giảm Lên Đến - 50%!</p>
            <a href="#" class="top_nav_link">MUA NGAY</a>
        </div>
    </div>
</div>
<nav class="nav">
    <div class="container nav_container">
        <a href="?controller=home&action=index" class="nav_logo">CASAFINE</a>
        <ul class="nav_list">
            <li class="nav_item">
                <a href="?controller=home&action=index" class="nav_link">Trang Chủ</a>
            </li>
            <li class="nav_item">
                <a href="?controller=about&action=index" class="nav_link">Giới Thiệu</a>
            </li>
            <li class="nav_item">
                <a href="?controller=contact&action=index" class="nav_link">Liên Hệ</a>
            </li>
            <li class="nav_item">
                <a href="?controller=account&action=register" class="nav_link">Đăng Ký</a>
            </li>
        </ul>
        <div class="nav_items">
            <form action="#" class="nav_form">
                <input type="text" class="nav_input" placeholder="Tìm kiếm..." />
                <img src="./assets/image/search.png" alt="" class="nav_search" />
            </form>
            <img src="./assets/image/heart.png" alt="" class="nav_heart" />
            <a href="?controller=cart&action=index">
                <img src="./assets/image/cart.png" alt="" class="nav_cart" />
            </a>
        </div>
        <span class="hamburger">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
          >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
          </svg>
        </span>
    </div>
</nav>
<nav class="mobile_nav mobile_nav_hide">
    <ul class="mobile_nav_list">
        <li class="mobile_nav_item">
            <a href="/" class="mobile_nav_link">Home</a>
        </li>
        <li class="mobile_nav_item">
            <a href="#" class="mobile_nav_link">About</a>
        </li>
        <li class="mobile_nav_item">
            <a href="#" class="mobile_nav_link">Contact</a>
        </li>
        <li class="mobile_nav_item">
            <a href="./sign-up.html" class="mobile_nav_link">Sign Up</a>
        </li>
        <li class="mobile_nav_item">
            <a href="/cart.html" class="mobile_nav_link">Cart</a>
        </li>
    </ul>
</nav>
<?= @$content ?>

<!-- JavaScript Libraries -->
<script src="./assets/js/cart.js"></script>
<script src="./assets/js/app.js"></script>
</body>
</html>