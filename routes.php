<?php
    $controllers = array(
        'account' => ['login', 'register', 'logout', 'changePassword'],
        'home' => ['index', 'error','user'],
        'payment' => ['thanhtoan'],
        'about' => ['index'],
        'contact' => ['index'],
        'cart' => ['index'],
        'order' => ['index'],
        'product' => ['index','product_all','search']
    ); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

    // Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
    // thì trang báo lỗi sẽ được gọi ra.
    if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
        $controller = 'home';
        $action = 'error';
    }

    // Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
    $controllerName = ucfirst($controller) . 'Controller';
    include_once('controllers/' . $controllerName . '.php');
    // Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
    $controller = new $controllerName;
    $controller->$action();