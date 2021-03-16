<?php

// Constants
define("AUTH_KEY", "AUTH_KEY");


//Khai báo sử dụng session
session_start();    


// Lấy được request yêu cầu đến controller và action
$controller =  isset($_GET["controller"]) ? $_GET["controller"] :  null;
$action = $_GET["action"] ?? null;

// Kiểm tra nếu mà controller trống, thì điều hướng tới controller là home và action là welcome
if (!$controller) {
    header("Location:?controller=home&action=welcome");
}

// Danh sách tên các controller yêu cầu xác thực
const CONTROLLERS_REQUIRE_AUTH = ['products', 'categories'];

// Kiểm tra nếu người dùng chưa đăng nhập, thì điều hướng tới trang đăng nhập
if (!isset($_SESSION[AUTH_KEY]) && in_array($controller, CONTROLLERS_REQUIRE_AUTH) && $controller != "auth" && $action != "login") {
    header("Location:?controller=auth&action=login");
}


// Hàm kiểm tra lien kết có đúng với đường dẫn hay không, nếu đúng thì in ra active
function showActive($controllerName, $actionName = null)
{
    global $controller;
    if ($controller == $controllerName) {
        echo "active";
    }
}

// Yêu cầu kết nối MySQL
require_once("db.php");

$connect = DB::getInstance();


try {
    //  Nhúng file controller
    $controllerFilePath = "controllers/$controller" . "_controller.php";
    if (!file_exists($controllerFilePath)) {
        throw new Exception("File not found");
    }
    require_once($controllerFilePath);


    // Kiểm tra nếu file không tồn tại thì ném ra ngoại lệ


    // Khởi tạo controller
    // home: HomeController
    $controllerName = ucwords($controller) . "Controller";

    $controllerInstance = new $controllerName;

    // Kiểm tra nếu action không tồn tại thì ném ra ngoai lệ 
    if (!method_exists($controllerInstance, $action)) {
        throw new Exception("Action $action is not exist in $controllerName");
    }

    // Gọi action
    $controllerInstance->$action();
} catch (Exception $ex) {
    echo $ex->getMessage();
    // header("Location:?controller=error&action=page");
}
