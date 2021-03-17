<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');
require_once('models/cart.php');

class ShopController extends BaseController {
    protected function getFolder()
    {
        return 'shop';
    }

    public function cartPage() {
        $viewData = [];
        
        $this->render('cart', $viewData, 'shop_layout');
    }

    public function index() {
        $products = Product::all();

        $viewData = [
            "products" => $products
        ];

        $this->render('landing-page', $viewData, 'shop_layout');
    }

    public function addToCart() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $productId = $_GET["id"];

            $product = Product::find($productId);

            $cart = new Cart();

            $cart->addToCart($product);

            echo "
            <script type='text/javascript'>
                window.history.go(-1);
            </script>
            ";
        }
    }
}