<div class="jumbotron shadow" style="max-width:600px;margin:auto;">

    <?php $form = $this->beginWidget('CActiveForm', get_form_register()); ?>
    <div class="form-group">
        <h1 class="text-center">快速注册</h1>
    </div>
    <div class="form-group">
        <label for="User_username">用户名：</label>
        <?php echo $form->textField($model, 'username', array('maxlength' => 50, 'class' => 'form-control', 'placeholder' => '用户名由字母数字和下划线组成')); ?>
        <?php echo $form->error($model, 'username', $htmlOptions = ['class' => 'alert alert-info']); ?>
    </div>

    <div class="form-group">
        <label for="User_password">密码:</label>
        <?= $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => '输入8到18位密码')); ?>
        <?= $form->error($model, 'password', $htmlOptions = ['class' => 'alert alert-info']); ?>
    </div>
    <div class="form-group">
        <label for="repeat_password">重复输入密码:</label>
        <input class="form-control" placeholder="再次输入密码" name="repeat_pass" id="repeat_password" type="password">
        
    </div>
    <!-- <div class="form-group">
        登录类型：
        <label><input type="radio" class="radio" name="login_type" value="1">用户</label>
        <label><input type="radio" class="radio" name="login_type" value="2">网店管理员</label>
        <label><input type="radio" class="radio" name="login_type" value="3">超级管理员</label>
    </div> -->
    <div class="form-group">
        <input class="btn btn-primary btn-block" type="submit" value="立即注册">
    </div>
    <?php $this->endWidget(); ?>
   
</div>
