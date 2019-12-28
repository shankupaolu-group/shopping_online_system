<?php

class IndexController extends BaseController
{
    protected $model = '';
    public $layout = "//layouts/mylayout"; //设置自定义布局

    public function actionIndex()
    {
        set_cookie('_currentUrl_', Yii::app()->request->url);

        $view = isset($_GET['site']) ? $_GET['site'] : 'index';
        $this->render($view);
    }

    public function actionLogin()
    {
        $this->login_form();
    }

    public function actionPerson()
    { }

    public function actionLogout()
    {
        $_SESSION['name'] = null;
        $_SESSION['id'] = null;
        $_SESSION['login_type'] = null;
        $this->login_form();
    }

    // 登录表单
    function login_form()
    {

        $model = User::model();
        $data = [];
        $data['model'] = $model;

        if (Yii::app()->request->isPostRequest) {
            // 传进来name 和password
            $user = $_REQUEST['User'];
            $type = $_REQUEST['login_type'];
            // $type = $user['login_type']; // 1表示用户，2表示网店管理员，3表示超级管理员
            $name = $user['username'];
            $password = encrypt($user['password']);// md5加密
            if (isset($type)) {
                switch ($type) {
                    case '1':
                        $model = User::model()->find("username='" . $name . "'");
                        break;
                    case '2':
                        $model = User::model()->find("username='" . $name . "'");
                        break;
                    case '3':
                        $model = ShopAssistant::model()->find("assistant_name='" . $name . "'");
                        break;
                }
                // show_status($password == $model->password,'登录成功','index.php?r=index/index','密码错误');  

                if ($password == $model->password) {
                    $sessions = [
                        'id' => $model->id,
                        'login_type' => $type,
                        'name' => $name
                    ];
                    $this->set_session($sessions);
                }
                show_status($password == $model->password, '登录成功', 'index.php?r=index/index', '密码错误');
            }
        } else {
            $this->render('login', $data);
        }
    }

    public function set_session($sessions)
    {
        foreach ($sessions as $k => $v) {
            $_SESSION[$k] = $v;
        }
    }



    // 注册用户
    public function actionRegister()
    {

        if (Yii::app()->request->isPostRequest) {
            $user = $_POST['User'];
            $name = $user['username'];
            $password = $user['password'];
            $repeat_pass = $_REQUEST['repeat_pass'];
            if ($password != $repeat_pass) {
                show_status(1, '两次密码不一致');
            }
            $m2 = User::model()->find("username='" . $name . "'");
            if ($m2) {
                show_status(1, '该用户名已存在');
            } else {
                // 写入注册信息
                $model = new User('create');
                $model['username'] = $name;
                $model['password'] = encrypt($password);
                if ($model->save()) {
                    $m2 = User::model()->find("username='" . $name . "'");
                    if ($m2) {
                        $sessions = [
                            'id' => $m2['id'],
                            'name' => $m2['username'],
                            'login_type' => '1'
                        ];
                        $this->set_session($sessions);
                    }
                }
                show_status($model->save(), '保存注册信息成功', get_cookie('_currentUrl_'), '保存失败');
                
            }
        } else {
            $model = User::model();
            // 注册界面
            $data = ['model' => $model];
            $this->render("register", $data);
        }
    }


    // 暂时无用
    public function actionCheckuser()
    {
        // // 传进来name 和password
        // $type = $_REQUEST['type']; // 1表示用户，2表示网店管理员，3表示超级管理员
        // $name = $_REQUEST['name'];
        // $password = $_REQUEST['password'];
        // if (isset($type)) {
        //     if ($type == '1') {
        //         $model2 = User::model()->find("username='" . $name . "'");
        //         if (isset($model2->id)) {
        //             if ($password == $model2->password)
        //                 Yii::app()->session['user_id'] = $model2->id;
        //             Yii::app()->session['name'] = $model2->username;
        //             ajax_exit(['name' => $model2->username]);
        //         }
        //     } elseif ($type == '3') {
        //         $model2 = Admin::model()->find("admin_name='" . $name . "'");
        //         if ($password == $model2->password)
        //             Yii::app()->session['admin_id'] = $model2->id;
        //         Yii::app()->session['name'] = $model2->admin_name;
        //         ajax_exit(['name' => $model2->username]);
        //     } else { }
        // }
    }
}
