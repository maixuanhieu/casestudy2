<?php 
include_once("controllers/base_controller.php");
class CategoriesController extends BaseController{
    protected function getFolder()
    {
        return "categories";
    }

    public function index(){
        $this->render("index");

    }

    public function add() {
        $this->render("add");
    }

}