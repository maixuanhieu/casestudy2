<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $description;
    public $category_id;
    public $image_url;

    // public $category;

    // Trả về mảng các đối tượng Product
    static function all()
    {
        $sql = "SELECT 
        t1.*,
        t2.name as category
        FROM cs_module2_db.products t1
        INNER JOIN categories t2
        ON t1.category_id = t2.id";


        $smpt = DB::getInstance()->prepare($sql);
        $smpt->execute();

        // Kiểu dữ liệu là mảng của các mảng liên kết
        $rawData = $smpt->fetchAll();

        // Chuyển đổi mảng liên kết thành mảng của các Product
        $list = [];

        // var_dump($rawData[0]);
        // die();

        foreach ($rawData as $row) {
            $entity = new Product();

            $entity->id = $row["id"];
            $entity->name = $row["name"];
            $entity->price = $row["price"];
            $entity->quantity = $row["quantity"];
            $entity->description = $row["description"];
            $entity->category_id = $row["category_id"];
            $entity->category = $row["category"];
            $entity->image_url = $row["image_url"];

            $list[] = $entity;
        }

        // Trả về mảng các phần tử Product
        return $list;
    }


    // Trả về đối tượng Product
    static function find($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";

        $smpt = DB::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetch();
       
        $product = new Product();
        $product->id = $rawData["id"];
        $product->name = $rawData["name"];
        $product->price = $rawData["price"];
        $product->quantity = $rawData["quantity"];
        $product->description = $rawData["description"];
        $product->category_id = $rawData["category_id"];
        $product->image_url = $rawData["image_url"];


        return $product;
    }


    // Lưu thực thể Product vào cơ sở dữ liệu
    // Trả về bool: Execute có thành công hay không

    public function save()
    {
        $sql = "INSERT INTO products(name, price, quantity, description, category_id, image_url)
        VALUES(?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE
        name=?,
        price=?,
        quantity=?,
        description=?,
        category_id=?,
        image_url=?
    
    ";
    // var_dump($sql);die();
        $smpt = DB::getInstance()->prepare($sql);
        return $smpt->execute([

            $this->name,
            $this->price,
            $this->quantity,
            $this->description,
            $this->category_id,
            $this->image_url,

 
            $this->name,
            $this->price,
            $this->quantity,
            $this->description,
            $this->category_id,
            $this->image_url,
        ]);
    }

    public function destroy(){
        $db = DB ::getInstance();
        $req = $db->prepare("DELETE FROM products WHERE id = $this->id");
        $req->execute();
    }
}
