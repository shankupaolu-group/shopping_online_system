<?php

class ProductList extends BaseModel {
    public $product_list_pic='';
    public function tableName() {
        return '{{product_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('product_name,shop_id,product_count,price,product_type', 'required', 'message' => '{attribute} 不能为空'),
            array('product_img_url,product_detail','safe')
 
        );
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(
         
        );
    }

    /**
     * 属性标签
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'product_name' => '商品名称',
            'shop_id'=>'店铺id',
            'product_img_url' => '图片url',
            'product_detail' => '商品详细信息',
            'product_count' => '商品库存',
            'price' => '商品单价',
            'product_type'=>'商品类型'
        );
    }

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    
}
