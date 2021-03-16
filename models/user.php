<?php

class User {
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    private $password;
    public $address;
    public $address2;
    public $country;

    public static function findByEmailAndPassword($email, $password){
        $query = "SELECT * FROM users WHERE email = ? AND password = ?";

        $smpt = DB::getInstance()->prepare($query);
        $smpt->execute([$email, $password]);

        // Type: Associative Array
        $rawData = $smpt->fetch();

        // Kiểm tra, nếu dữ liệu lấy về là false thì trả về null
        if(!$rawData){
            return null;
        }

        // Trả về đối tượng User
        $user = new User();
        $user->id = $rawData["id"];
        $user->full_name = $rawData["first_name"];
        $user->full_name = $rawData["last_name"];
        $user->email = $rawData["email"];
        $user->password = $rawData["password"];
        $user->address = $rawData["address"];
        $user->address2 = $rawData["address2"];
        $user->country = $rawData["country"];
  
        return $user;
    }

        // Lưu thông tin người dùng đã đăng nhập: storeAuthUser
        static function storeAuthUser($user){
            $_SESSION[AUTH_KEY] = serialize($user);

            var_dump($user);
        }

        // Lấy thông tin người dùng đã đăng nhập: getAuthUser
        // Return Type: User
        static function getAuthUser(){
            return isset($_SESSION[AUTH_KEY]) ? unserialize($_SESSION[AUTH_KEY]) : null;
        }


        // xóa thông tin người dùng đã đăng nhập: removeAuthUser
        static function removeAuthUser(){
            unset($_SESSION[AUTH_KEY]);
        }


}