<?php 
class MyHtmlController extends BaseController {
public $layout = false;
public function actionIndex() {
    $this->render('index');
}
}
?>
