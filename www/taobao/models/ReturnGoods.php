<?php 
class ReturnGoods extends BaseModel {
    public function tableName() {
        return '{{return_goods}}';
    }
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function rules() {
        return array(
            array('return_state,order_id','required','{attribute}不能为空'),
        array('user_id','safe'));
    
    }
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
       'return_state'=>'退货状态',
       'user_id'=>'用户ID',
       'order_id'=>'订单ID'
        );
    }
}