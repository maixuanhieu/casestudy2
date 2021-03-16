<?php
class CartItem {
    public $productId;
    public $Price;
    public $quantity;
    public $name;

    public function __construct(Product $product, int $qty)
    {
        $this->productId = $product->id;
        $this->Price = $product->price;
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
            return $carry + $item->qty * $item->unitPrice;
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

    public function removeItemInCart($productId) {
        $items = array_filter($this->items, function($item, $productId) {
            return $item->productId !== $productId;
        }, $productId);

        $this->storeIntoSession($items);
    }

    private static function findCartItem($productId) {
        $items = self::getItems();

        foreach($items as $item) {
            if($item->productId == $productId) {
                return $item;
            }
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
}