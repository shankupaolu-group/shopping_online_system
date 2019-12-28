<div class="container border shadow">

    <div class="row my-2">
        <div class="col-6">
            <img src="<?= $product_img_url ?>" alt="" class="img-thumbnail">
        </div>

        <div class="col-6 mt-2">
            <div class="row my-2">
                <div class="col-3">店铺</div>
                <div class="col-6"><?= $shop_name ?></div>
                <div class="col-3"><button class="btn btn-outline-info">进入店铺</button></div>

            </div>


            <div class="row my-2">
                <input type="hidden" id="pid" value="<?= $pid ?>">
                <div class="col-3">商品名称</div>
                <div class="col-9 product_name text-primary"><?= $product_name ?></div>
            </div>
            <div class="row my-2">
                <div class="col-3">价格：</div>
                <div class="col-9 price">￥<span class="mr-2"><?= $price ?></span>元</div>
            </div>
            <div class="row  my-2">
                <div class="col-3">库存量：</div>
                <div class="col-9"><span class="mr-2"><?= $product_count ?></span>件</div>
            </div>
            <div class="row my-2">
                <div class="col-3">购买数量</div>
                <div class="col-3"><input class="form-control"  id="buy_num" value="0" type="number" name="buynum" min="0" max="<?= $product_count ?>"></div>
            </div>
            <div class="row mr-2">
                <button class="col btn btn-primary mr-2" id="addto_cart">加入购物车<i class="fa fa-shopping-cart"></i></button>
                <button class="col btn btn-outline-primary" id="buynow">立即购买</button>
            </div>
        </div>
    </div>

    <?php if ($product_detail) { ?>
        <h2 class="display-4">商品描述</h2>
        <p><?= $product_detail ?></p>
    <?php } ?>

</div>
<script type="text/javascript">
    $(function() {
        $('#addto_cart').click(
            function() {
               
                $.ajax({
                    type: 'post',
                    url: '<?= $this->createUrl("index/addToCart"); ?>',
                    data: {
                        product_id: $('#pid').val(),
                        buy_num: $('#buy_num').val()
                    },
                    dataType: 'json',
                    success: function(d) {
                        if (d.status == 1) {
                            we.overlay("show");
                            we.success(d.msg, d.redirect);
                        } else {
                            we.overlay("show");
                            we.error(d.msg, d.redirect);
                        }
                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest);
                    }
                });
            });
    });
</script>