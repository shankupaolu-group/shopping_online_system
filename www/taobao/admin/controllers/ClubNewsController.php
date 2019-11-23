<?php

class ClubNewsController extends BaseController {

    protected $model = '';

    public function init() {
        $this->model = substr(__CLASS__, 0, -10);
        parent::init();
        //dump(Yii::app()->request->isPostRequest);
    }

    public function actionIndex($styear="0",$sterm="0") {
    set_cookie('_currentUrl_', Yii::app()->request->url);
    $modelName = $this->model;
    $model = $modelName::model();
    $criteria = new CDbCriteria;
    // $w1=get_where('1=1',($styear!="0"),'f_year',$styear,'"');
    // $criteria->condition=get_where($w1,($sterm!="0"),'f_term',$sterm,'"');
    $criteria->order = 'news_code';
    $data = array();
    parent::_list($model, $criteria, 'index', $data,20);
    }

   public function actionCreate() {
        $modelName = $this->model;
        $model = new $modelName('create');
        $data = array();
        parent::_create($model, 'update', $data, get_cookie('_currentUrl_'));
    }

    public function actionUpdate($id) {
        $modelName = $this->model;
        $model = $this->loadModel($id, $modelName);
        $data = array();
        parent::_update($model, 'update', $data, get_cookie('_currentUrl_'));
    }

    public function actionDelete($id) {
        parent::_clear($id);
    }
 
}

