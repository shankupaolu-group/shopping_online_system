<?php 
class Shopping_cart extends BaseModel {
    public function tableName() {
        return 'shopping_cart';
    }
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function rules() {
        return array('product_id,buy_num','required','{attribute}不能为空');
    }
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'product_id'=>'商品id',
            'buy_num'=>'购买数量'
        );
    }
}