<?php
require_once("controllers/base_controller.php");
require_once("models/user.php");


class AuthController extends BaseController {
    protected function getFolder()
    {
        return "auth";
    }

    function logIn(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->submitLogin();
        } else {
            $this->showLoginPage();
        }
    }

    function logOut(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            // Xóa thông tin đăng nhập khỏi Session
            User::removeAuthUser();


            // Điều hướng về trang đăng nhập
            header("Location:?controller=home&action=welcome");
        }
    }

    protected function submitLogin(){
        
        // Lấy được thông tin đăng nhập từ client request
        $email = $_POST["email"];
        $password = $_POST["password"];


        // Kiểm tra email và mật khẩu có hợp lệ hay không
        // Tìm người dùng với email và mật khẩu trên
        $user = User::findByEmailAndPassword($email, $password);


        // Nếu người dùng tồn tại thì đăng nhập thành công
        // Nếu không thì thông báo lỗi đăng nhập không hợp lệ
        if($user){
            // Lưu thông tin người dùng đã đăng nhập vào Session
            User::storeAuthUser($user);

            header("Location:?controller=home&action=welcome");
        } else {
            // Thông báo lỗi ra trang login
            $_SESSION["invalid_credentials"] == "Email or password is not matched";
        
            header("Location:?controller=auth&action=login");
        }
        
        // Đăng nhập thành công

        // Đăng nhập thất bại
    }

    protected function showLoginPage(){
        // Kiểm tra nếu người dùng đã đăng nhập thì điều hướng tới trang welcome
        if(User::getAuthUser()){
            header("Location:?controller=home&action=welcome");
        }
        
        $this->render('login',[],'auth_layout');
    }

}