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
            $id = $_GET["id"];

            $product = Product::find($id);

            $cart = new Cart();

            $cart->addToCart($product);
      

            echo "
            <script type='text/javascript'>
                window.history.go(-1);
            </script>
            ";
        }
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Lấy được id phần tử từ URL
            $id = $_GET["id"];
          
            // Lấy được phần tử từ CSDL
            $cart =  new Cart;

            // Xóa phần tử khỏi CSDL
            $cart->destroy($id);

            // Điều hướng về trang danh sách
            header("Location:?controller=shop&action=cartPage"); 
        }
    }
}