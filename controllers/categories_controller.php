<?php
include_once("controllers/base_controller.php");
require_once("models/category.php");
require_once("models/product.php");
class CategoriesController extends BaseController
{
    protected function getFolder()
    {
        return "categories";
    }

    public function index()
    {
        $data = Category::all();

        $viewData = array("categories" => $data);

        $this->render('index', $viewData);
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->storeCategories();
        } else {
            $this->showCategoriesPage();
        }
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy được id phần tử từ URL
            $id = $_GET["id"];

            // Lấy được phần tử từ CSDL
            $category =  Category::find($id);
            // var_dump($category);die();
            // Xóa phần tử khỏi CSDL
            $category->destroy();

            // Điều hướng về trang danh sách
            header("Location:?controller=categories&action=index");
        }
    }

    protected function storeCategories()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
            $name = $_POST["name"];

            // Khởi tạo đối tượng Product
            $category = new Category();
            $category->name = $name;
            // var_dump($category);die();
            // Lưu đối tượng vào vào database
            $storedSuccessful = $category->save();

            if ($storedSuccessful) {
                $_SESSION["message"] = "A new Category has been stored successfully";
            }

            $this->showCategoriesPage();
        }
    }

    protected function showCategoriesPage()
    {
        $categories = Category::all();

        $viewData = array("categories" => $categories);

        $this->render('add', $viewData);
    }
}
