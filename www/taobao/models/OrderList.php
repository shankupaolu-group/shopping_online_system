<?php
class OrderList extends BaseModel {
    public function tableName()
    {
        return '{{order_list}}';
    }
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
        /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(
            array('shop_id,price,send_addr,recv_addr,order_state,timestamp,product_name,product_type,buy_num', 'required', 'message' => '{attribute} 不能为空'),
            array('user_id,product_img_url,product_detail', 'safe')
   
        );
    
    }
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'shop_id'=>'网店ID',
            'user_id'=>'用户ID',
            'price'=>'商品单价',
            'send_addr'=>'发货地址',
            'recv_addr'=>'收货地址',
            'order_state'=>'订单状态',
            'timestamp'=>'订单创建日期',
            'product_name'=>'商品名称',
            'product_type'=>'商品类型',
            'buy_num'=>'购买数量',
            'product_img_url'=>'商品图片',
            'product_detail'=>"商品详情"
        );
    }
}