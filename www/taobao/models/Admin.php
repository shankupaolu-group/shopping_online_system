<?php
class Admin extends BaseModel
{
    public function tableName()
    {
        return '{{admin}}';
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    /**
     * 模型验证规则
     */
    public function rules()
    {

        return array(
            array('password', 'required', 'message' => '{attribute} 不能为空'),
            array('admin_name', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'id'=>'ID',
            'admin_name'=>'超级管理员昵称',
            'password'=>'密码'
        );
    }
}
