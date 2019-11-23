<?php

class IndexController extends BaseController
{
    public $layout = "//layouts/mylayout";//设置自定义布局

    public function actionIndex()
    {
        $view = isset($_GET['site']) ? $_GET['site'] : 'index';
        $this->render($view);
   
        // $this->render('index');
    }

    public function actionUpdate()
    {

    }
}
