<?php 
class ShopManager extends BaseModel {
    public function tableName() {
        return '{{shop_manager}}';
    }
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function rules() {
        return array(
            'shop_name,contact','required','{attribute}不能为空'
        );
    }
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'shop_id'=>'店铺ID'

        );
    }
}