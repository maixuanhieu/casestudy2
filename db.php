<?php
$server = "localhost";
$username = "root";
$password = "123456";
$database = "cs_module2_db";
$port = 3306;

class DB{
    private static $connection = null ;

    public static function getInstance(){
      global $server, $username, $password, $database, $port;
        // Kiểm tra nếu $connection là null, thì khởi tạo connection là một đối tượng PDO
        if(!isset(self::$connection)){
            try {
                self::$connection = new PDO("mysql:host=$server;port=$port;dbname=$database", $username, $password);
                // set the PDO error mode to exception
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
        return self ::$connection;
    }
}

?>