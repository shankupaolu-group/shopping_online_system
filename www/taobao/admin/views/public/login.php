
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zh-cn"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="zh-cn"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="zh-cn"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="zh-cn"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>网站后台管理登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <?php $cs = Yii::app()->clientScript;?>
    <?php $cs->registerCssFile(Yii::app()->request->baseUrl.'/static/admin/css/login.css');?>
    <?php $cs->registerCoreScript('jquery');?>
    <?php $cs->registerScriptFile(Yii::app()->request->baseUrl.'/static/admin/js/jquery.nicescroll.js');?>

    <?php $cs->registerCssFile(Yii::app()->request->baseUrl.'/static/admin/js/jquery.fallr/jquery.fallr.css');?>
    <?php $cs->registerScriptFile(Yii::app()->request->baseUrl.'/static/admin/js/jquery.fallr/jquery.fallr.js');?>

    <?php $cs->registerScriptFile(Yii::app()->request->baseUrl.'/static/admin/js/public.js');?>
    <script>
        var baseUrl = '<?php echo Yii::app()->request->baseUrl;?>';
        var indexUrl = '<?php echo get_cookie('_currentUrl_');?>';
        var uppicUrl = '<?php echo $this->createUrl('public/uppic');?>';
        var upfileUrl = '<?php echo $this->createUrl('public/upfile');?>';
    </script>
</head>
<body>
<span class="btn btn-blue">request->baseurl<?php echo Yii::app()->request->baseurl?></span>
<span class="btn btn-blue">homeUrl<?php echo Yii::app()->homeUrl?></span>
<span class="btn btn-blue">user->returnUrl<?php echo Yii::app()->user->returnUrl?></span>
<span class="btn btn-blue">request->url<?php echo Yii::app()->request->url?></span>


</body>
</html>