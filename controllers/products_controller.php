<?php
require_once("controllers/base_controller.php");
require_once("models/product.php");
require_once("models/category.php");

class ProductsController extends BaseController{
    protected function getFolder()
    {
        return "products";
    }
    
    public function index(){
    
        $data = Product::all();
        $viewData = array("products" => $data);
         
        $this->render('index', $viewData);
    }
    // public function getCategory($id){
    //     return Category::find($id);
    // }

    public function create() {
        // Kiểm tra nếu request method là POST thì lưu data
        // Còn lại gọi hàm trả về giao diện thêm mới
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->storeProduct();   
        }else{
            $this->showCreatePage();
        }

        
    }

    public function edit(){
        // Kiểm tra, nếu request method là POST thì gọi hàm lưu thông tin sản phẩm
        // Còn lại thì gọi hàm tra về giao diện chỉnh sửa sản phẩm
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->updateProduct();
        } else {
            $this->showEditPage();
        }
    }

    public function delete(){
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Lấy được id phần tử từ URL
        $id = $_GET["id"];

        // Lấy được phần tử từ CSDL
        $product = Product::find($id);

        // Xóa phần tử khỏi CSDL
        $product->destroy();

        // Điều hướng về trang danh sách sản phẩm
        header("Location:?controller=products&action=index");
    }
}    

    protected function showEditPage(){
        // Lấy id sản phẩm 
        $id = $_GET["id"];
      

        // Lấy thông tin sản phẩm
        $product = Product::find($id);
        $categories = Category::all();
 
        $viewData = array(
            "product" => $product,
            "categories" => $categories
        );

        $this->render('edit',$viewData);
    }

    protected function updateProduct(){
        // Lấy id sản phẩm 
        $id = $_GET["id"];

        // Lấy phần tử từ trong dữ liệu 
        $product = Product::find($id);



        // Lấy dữ liệu từ form
        $product->name = $_POST["name"];
        $product->price = $_POST["price"];
        $product->quantity = $_POST["quantity"];
        $product->description = $_POST["description"];
        $product->category_id = $_POST["category_id"];
        $product->image_url = $_POST["image_url"];

        $storedSuccessful = $product->save();

        if($storedSuccessful){
            $_SESSION["message"] = "A new Product has been updated successfully";
        }

        // Điều hướng lại action showEditPage()
        $this->showEditPage();
    }

    protected function storeProduct(){
        // Lấy dữ liệu từ form
        $name = $_POST["name"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description = $_POST["description"];
        $category_id = $_POST["category_id"];
        $image_url = $_POST["image_url"];


        // Khởi tạo đối tượng Product
        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->quantity = $quantity;
        $product->description = $description;
        $product->category_id  = $category_id;
        $product->image_url = $image_url;

        // Lưu đối tượng vào database
        $storedSuccessful = $product->save();

        if($storedSuccessful){
            $_SESSION["message"] = "A new Product has been stored successfully";
        }

        $this->showCreatePage();
    }

    protected function showCreatePage(){
        $categories = Category::all();

        $viewData = array("categories" => $categories);

        $this->render('create', $viewData);
    }

    
}