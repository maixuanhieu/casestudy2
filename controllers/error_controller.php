<?php
require_once("controllers/base_controller.php");

class ErrorController extends BaseController{
    protected function getFolder()
    {
        return 'error_pages';
    }
    
    public function page404(){
        $this->render('page', [], 'error_layout');
    }

}