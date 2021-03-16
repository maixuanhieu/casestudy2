<?php

require_once('controllers/base_controller.php');

class ShopController extends BaseController {
    protected function getFolder()
    {
        return 'shop';
    }

    public function index() {
        $viewData = [];

        $this->render('index', $viewData, 'shop_layout');
    }
}