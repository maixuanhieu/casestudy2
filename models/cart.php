<?php
class CartItem {
    public $id;
    public $price;
    public $quantity;
    public $name;

    public function __construct(Product $product, int $qty)
    {
        $this->id = $product->id;
        $this->price = $product->price;
        $this->quantity = $qty;
        $this->name = $product->name;
    }

    public function increaseQty($qty = 1) {
        $this->quantity += $qty;
    }

    public function decrease($qty = 1) {
        // Check if quantity decrease is less than current quantity, then descrease
        // Otherwise, quantity will be set to 1
        if($this->quantity > $qty) {
            $this->quantity -= $qty;
        } else {
            $this->quantity = 1;
        }
    }
}

class Cart {   
    public static function countItems() {
        return count(self::getItems());
    }

    public function getTotal() {
        return array_reduce(self::getItems(), function($carry, $item) {
            return $carry + $item->qty * $item->price;
        }, 0);
    }

    public function addToCart(Product $product, $qty = 1) {
        $items =  self::getItems();
  
        // Check if product is exist, increase Qty of there item
        // Otherwise, add new CartItem to item list
        if($item = self::findCartItem($product->id)) {
            $item->increaseQty($qty);
        } else {
            $items[] = new CartItem($product, $qty);
        }
       
        self::storeIntoSession($items);
    }

    public function removeItemInCart($id) {
        $items = array_filter($this->items, function($item, $id) {
            return $item->id !== $id;
        }, $id);

        $this->storeIntoSession($items);
    }

    private static function findCartItem($id) {
        $items = self::getItems();

        foreach($items as $item) {
            if($item->id == $id) {
                return $item;
            }
        }

        return null;
    }

    private static function findDeleteCartItem($id) {
        $items = self::getItems();
        $index = 0;
        foreach($items as $item) {
            if($item->id == $id) {
                $arr = ['index' => $index, 'item' => $item];
                return $arr;
            }
            $index ++;
        }

        return null;
    }


    private static function isCartExistInSession() {
        return isset($_SESSION["cart"]);
    }

    public static function getItems() {
        if(!self::isCartExistInSession()) {
            self::init();
        }

        return unserialize($_SESSION["cart"]);
    }

    private static function storeIntoSession($items) {
        $_SESSION['cart'] = serialize($items);
    }

    private static function init() {
        if(!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = serialize([]);
        }
    }
    
    public function destroy($id)
    {
        // Lấy danh sách cart items
        $items = self::getItems();
        // lấy index 
        $arr = self::findDeleteCartItem($id);
        // xóa tại vị trí index
        array_splice($items, $arr['index'], 1);
        
        self::storeIntoSession($items);
    }
}