<?php

class ShopList extends BaseModel {
    public function tableName() {
        return '{{shop_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
        return array(
           'shop_name,contact','required','{attribute}不能为空' 
        );
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array();
    }
    /**
     * 属性标签
     */
    public function attributeLabels() {
        return array(
            'id'=>'网店ID',
            'shop_name'=>'网店名字',
            'shop_contact'=>'网店联系方式',
        
        );
    }





    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }


        


    protected function beforeSave() {
        parent::beforeSave();
      
        return true;
    }

}
