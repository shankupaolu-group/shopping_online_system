<?php

class IndexController extends BaseController
{
    protected $model = '';
    public $layout = "//layouts/mylayout"; //设置自定义布局

    public function actionIndex()
    {

        
        $view = isset($_GET['site']) ? $_GET['site'] : 'index';
        $this->render($view);
    }

    public function actionLogin()
    {
        $this->login_form();
    }
    
    public function actionPerson()
    {

    }

    public function actionLogout()
    {
        $_SESSION['name'] = null;
        $this->login_form();
    }

    function login_form()
    {
        Yii::app()->session['uid'] = null;
        $model = User::model();
        $data = [];
        $data['model'] = $model;

        if (Yii::app()->request->isPostRequest) {
            // 传进来name 和password
            $user = $_REQUEST['User'];
            $type = $_REQUEST['login_type']; // 1表示用户，2表示网店管理员，3表示超级管理员
            $name = $user['username'];
            $password = $user['password'];
            if (isset($type)) {
                if ($type == '1') {
                    $model2 = User::model()->find("username='" . $name . "'");
                    if (isset($model2->id)) {
                        if ($password == $model2->password)
                        {
                            // 登录成功
                            Yii::app()->session['name'] = $name;
                            $_SESSION['name'] = $name;
                            $this->redirect('index.php?r=index/index');

                        }else {
                            // 登录失败
                            return '<script>alert(登录失败);</script>';
                        }
                            
                    }
                } elseif ($type == '2') {// 网店管理员
                    $model2 = ShopAssistant::model()->find("assistant_name='" . $name . "'");
                    if ($password == $model2->password) {
                        Yii::app()->session['admin_id'] = $model2->id;
                         Yii::app()->session['name'] = $model2->admin_name;
                    }else {
                        // 登录失败
                        return '<script>alert(登录失败);</script>';
                    }

                    
                } elseif ($type == '3'){// 超级管理员
                    $model2 = Admin::model()->find("admin_name='" . $name . "'");
                    if ($password == $model2->password) {
                        Yii::app()->session['admin_id'] = $model2->id;
                        Yii::app()->session['name'] = $model2->admin_name;
                        
                    }else {
                        // 登录失败
                        return '<script>alert(登录失败);</script>';
                    }
                     
                 }
            }
         
        } 
        $this->render('login', $data);
    }


    public function actionRegister()
    {
        $model = User::model();
        if (Yii::app()->request->isPostRequst) {

        }else {
            $data = ['model' => $model];
            $this->render("register", $data);
        }
        
    }


    public function actionCheckuser()
    {
        // 传进来name 和password
        $type = $_REQUEST['type']; // 1表示用户，2表示网店管理员，3表示超级管理员
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];
        if (isset($type)) {
            if ($type == '1') {
                $model2 = User::model()->find("username='" . $name . "'");
                if (isset($model2->id)) {
                    if ($password == $model2->password)
                        Yii::app()->session['user_id'] = $model2->id;
                    Yii::app()->session['name'] = $model2->username;
                    ajax_exit(['name'=>$model2->username]);
                }
            } elseif ($type == '3') {
                $model2 = Admin::model()->find("admin_name='" . $name . "'");
                if ($password == $model2->password)
                    Yii::app()->session['admin_id'] = $model2->id;
                Yii::app()->session['name'] = $model2->admin_name;
                return json_encode(['name' => $model2->username]);
            } else { }
        }
    }
}
