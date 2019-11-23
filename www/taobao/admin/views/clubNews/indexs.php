<?php if (!isset($_REQUEST['news_type'])) {$_REQUEST['news_type']=0;} ?>
<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>信息列表</h1></div><!--box-title end-->
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>刪除</a>
        </div><!--box-header end-->

        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
             <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                      <label style="margin-right:20px;">
        <span>學年:</span>
        <select name="styear">
            <option value="">請選擇</option>
            <?php foreach($years as $v){?>
            <option value="<?php echo $v->F_CODE;?>"<?php if(Yii::app()->request->getParam('styear')==$v->F_CODE){?> selected<?php }?>><?php echo $v->F_NAME;?></option>
            <?php }?>
        </select>
    </label>

    <label style="margin-right:20px;">
        <span>學段:</span>
        <select name="stterm">
            <option value="">請選擇</option>
            <?php foreach($terms as $v){?>
            <option value="<?php echo $v->F_CODE;?>"<?php if(Yii::app()->request->getParam('stterm')==$v->F_CODE){?> selected<?php }?>><?php echo $v->F_NAME;?></option>
            <?php }?>
        </select>
      </label>
               
                <label style="margin-right:10px;">
                    <span>關鍵字：</span>
                    <input style="width:200px;" class="input-text" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                </label>
                  
               
                <label style="margin-right:20px;">
                    <span>狀態：</span>
                    <select name="state">
                        <option value="">請選擇</option>
                        <?php foreach($state as $v){?>
                        <option value="<?php echo $v->f_id;?>"<?php if(Yii::app()->request->getParam('state')==$v->f_id){?> selected<?php }?>><?php echo $v->F_NAME;?></option>
                        <?php }?>
                    </select>
                </label>

                <label style="margin-right:10px;">
                    <span>上線日期：</span>
                    <input style="width:120px;" class="input-text" type="text" id="start_date" name="start_date" value="<?php echo Yii::app()->request->getParam('start_date');?>">
                    <span>-</span>
                    <input style="width:120px;" class="input-text" type="text" id="end_date" name="end_date" value="<?php echo Yii::app()->request->getParam('end_date');?>">
                </label>
                <button class="btn btn-blue" type="submit">查詢</button>
            </form>
        </div><!--box-search end-->



<div class="box-table">
    <table class="list">
<thead>
    <tr>
        <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
        <th style='text-align: center;'>序號</th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_code');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_title');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_introduction');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_address');?></th>
       
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('club_id');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('sign_date_start');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('sign_date_end');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('sign_max');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('sign_num');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('state');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_clicked');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_date_start');?></th>
        <th style='text-align: center;'><?php echo $model->getAttributeLabel('news_date_end');?></th>
        <th style='text-align: center;'>操作</th>
    </tr>
</thead>
        <tbody>

<?php 
$index = 1;
foreach($arclist as $v){ 
?>
<tr>
    <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
    <td style='text-align: center;'><span class="num num-1"><?php echo $index ?></span></td>
    <td style='text-align: center;'><?php echo $v->news_code; ?></td>
   <td style='text-align: center;'><?php echo $v->news_title; ?></td>
   <td style='text-align: center;'><?php echo $v->news_introduction; ?></td>
   <td style='text-align: center;'><?php echo $v->news_address; ?></td>
   
    <td style='text-align: center;'><?php echo $v->news_club_name; ?></td>
    <td style='text-align: center;'><?php echo $v->sign_date_start; ?></td>
    <td style='text-align: center;'><?php echo $v->sign_date_end; ?></td>
    <td style='text-align: center;'><?php echo $v->sign_max; ?></td>
    <td style='text-align: center;'><?php echo $v->sign_num; ?></td>
    <td style='text-align: center;'><?php echo $v->state_name; ?></td>
    <td style='text-align: center;'><?php echo $v->news_clicked; ?></td>
    <td style='text-align: center;'><?php echo $v->news_date_start; ?></td>
    <td style='text-align: center;'><?php echo $v->news_date_end; ?></td>
    <td style='text-align: center;'>
     <a class="btn" href="<?php echo $this->createUrl('clubNewsSignList/index',array('club_news_id' => $v->id));?>" title="報名會員">報名會員</a>
        <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id,'news_type'=>Yii::app()->request->getParam('news_type')));?>" title="編輯"><i class="fa fa-edit"></i></a>
        <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="刪除"><i class="fa fa-trash-o"></i></a>
    </td>
</tr>
<?php $index++; } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages);?></div>
    </div><!--box-content end-->
</div><!--box end-->

<script>
var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID'));?>';

</script>
