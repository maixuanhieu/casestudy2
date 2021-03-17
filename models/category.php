<?php

class Category{
    public $id;
    public $name;

    static function all(){
        $sql = "SELECT * FROM categories";

        $smpt = DB::getInstance()->prepare($sql);
        $smpt->execute();

        // Array of Association Array
        $rawData = $smpt->fetchAll();

        $list = [];

        foreach($rawData as $row){
            $entity = new Category();
            $entity->id = $row["id"];
            $entity->name = $row["name"];

            $list[] = $entity;
        }
    
        return $list;
    }

    static function find($id){
        $sql = "SELECT * FROM categories WHERE id = $id";

        $smpt = DB::getInstance()->prepare($sql);
        $smpt->execute();

        $rawData = $smpt->fetch();

        $category = new Category();
        $category->id = $rawData["id"];
        $category->name = $rawData["name"];
        return $category;
    }

    public function save() {
        $sql = "INSERT INTO categories(
             name
            )
            VALUES(?)
            ON DUPLICATE KEY UPDATE    
            name=?
        ";

        $smpt = DB::getInstance()->prepare($sql);
        return $smpt->execute([

            $this->name,

          
            $this->name,
        ]);
    }

        public function destroy() {
            $db = DB::getInstance();
            $req = $db->prepare("DELETE FROM categories WHERE id = $this->id");
            $req->execute();
    }
}