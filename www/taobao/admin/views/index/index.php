<div class="container">
<div class="my-2">
  <form action="<?= Yii::app()->request->url ?>" class="form-inline">

    <input type="text" placeholder="请输入你要查询的商品名称" name="keyword" class="form-control mr-2">

    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>立即搜索</button>
  </form>
</div>


<div class="product-list">

<?php foreach($arclist as $v){ ?>

<a href="index.php?r=index/detail&id=<?= $v['id'] ?>">
  <div class="card">
    <img src="<?= $v['product_img_url']?>" alt="" class="card-img">
    <div class="card-body">
      <div class="card-title text-center price" title="商品价格">￥<?= $v['price'] ?>元</div>
      <div class="card-subtitle text-center product_name" title="商品名称"><?= $v['product_name'] ?> </span></div>
 
    </div>
  </div>
</a>

<?php } ?>
</div>
<nav aria-label="Page navigation example">
  <?php 
    $this->widget('MyLinkPager', array(
      'pages' => $pages,
      'cssFile' => false,
      'header' => '',
      'footer' => '<div class="pagination justify-content-center my-2">共' . $pages->getItemCount() . '条内容，当前第' . ($pages->currentPage + 1) . '/' . $pages->pageCount . '页</div>',
      'maxButtonCount' => 5,
      'firstPageLabel' => '首页',
      'prevPageLabel' => '上一页',
      'nextPageLabel' => '下一页',
      'lastPageLabel' => '末页'
  ));
  ?>
   
</nav>

</div>