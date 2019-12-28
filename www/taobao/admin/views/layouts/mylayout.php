<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <?php $cs = Yii::app()->clientScript;
    $js_path = Yii::app()->request->baseUrl . '/static/admin'; ?>
    <?php $cs->registerCssFile($js_path . '/css/public.css'); ?>
    <?php $cs->registerCssFile($js_path . '/css/font.css');//font-awesome.css ?>
    <?php //$cs->registerCssFile($js_path . '/css/style.css'); ?>
    <?php $cs->registerCoreScript('jquery'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.nicescroll.js'); ?>

    <?php $cs->registerCssFile($js_path . '/js/jquery.fallr/jquery.fallr.css'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.fallr/jquery.fallr.js'); ?>

    <?php $cs->registerScriptFile($js_path . '/js/ueditor/ueditor.config.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/ueditor/ueditor.all.min.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/ueditor/lang/zh-cn/zh-cn.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/ueditor/ueditor.parse.min.js'); ?>

    <?php $cs->registerCssFile($js_path . '/js/jquery.datetimepicker/jquery.datetimepicker.css'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.datetimepicker/jquery.datetimepicker.js'); ?>

    <?php $cs->registerCssFile($js_path . '/js/jquery.uploadifive/uploadifive.css'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.uploadifive/jquery.uploadifive.min.js'); ?>

    <?php $cs->registerScriptFile($js_path . '/js/My97DatePicker/WdatePicker.js'); ?>

    <?php $cs->registerCssFile($js_path . '/js/artDialog/skins/default.css'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/artDialog/jquery.artDialog.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/artDialog/plugins/iframeTools.js'); ?>

    <?php $cs->registerCssFile($js_path . '/js/jquery.contextMenu/jquery.contextMenu.css'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.contextMenu/jquery.ui.position.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/jquery.contextMenu/jquery.contextMenu.js'); ?>
    <?php $cs->registerScriptFile($js_path . '/js/public.js'); //自定义的js
    ?>

    <script charset="utf_8" src="<?php echo Yii::app()->request->baseUrl; ?>/static/admin/js/PCASClass.js">
    </script>
    <script>
        var baseUrl = '<?php echo Yii::app()->request->baseUrl; ?>';
        var indexUrl = '<?php echo get_cookie('_currentUrl_'); ?>';
        var uppicUrl = '<?php echo $this->createUrl('public/uppic'); ?>';
        var upfileUrl = '<?php echo $this->createUrl('public/upfile'); ?>';
        var submitType = 'tijiao'
    </script>

<!-- bootstrap4引入 -->
<link rel="stylesheet" href="static/admin/css/bootstrap.min.css">
<script src="static/admin/js/bootstrap.min.js"></script>

<title>Homework</title>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mr-auto" href="<?= Yii::app()->homeUrl?>">网上商品营销系统</a>

  <span>
    <?
    if (isset($_SESSION['name']) && $_SESSION['name'] != null) {
      echo CHtml::link($_SESSION['name'], ['index/person']); 
      echo '&nbsp;';
      echo CHtml::link('退出', ['index/logout']); 
    }else {
      echo CHtml::link('登录', ['index/login']); 
      echo '&nbsp;';
      echo CHtml::link('注册', ['index/register']); 
    }
    ?>
  </span>

  </div>
</nav>
<div class="container" style="margin-top:5rem;">
    <?php echo $content; ?>
</div>
</body>

</html>