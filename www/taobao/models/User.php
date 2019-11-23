<?php 
class User extends BaseModel {
    public function tableName() {
        return '{{user}}';
    }
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function rules() {
        return array(
            'password,username,recv_addr','required','{attribute}不能为空'
        );
    }
    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'password'=>'密码',
            'username'=>'用户名',
            'recv_addr'=>'收货地址'
        );
    }
}