<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>个人中心</title>
</head>

<body>
    <nav class="top clearfix">
        <a href="index.htm"><h1>OOX交易网站</h1></a>
    </nav>
    <main>
        <div id="info">
            <fieldset>
                <legend>个人信息</legend>
                用户名:<span id="name">路人甲</span><br> 邮箱:
                <span id="email">oox@qq.com</span><br>
                <!-- <br> <a style="font-size:20px;text-decoration-line: underline;" href="order.htm">我的订单</a><br> -->
                <h2>订单详情</h2>
                <div class="order-class">
                    <div id="buyer">我是买家</div>
                    <div id="seller">我是卖家</div>
                </div>
                <div id="buy-or-sell"></div>
                <!-- <div id="sell-list">

                <div class="clearfix">
                    <div class="left-item">
                        <h3>商品1</h3>
                        <div>商品名:<span>山寨手机</span></div>
                        <div>商品价格:<span>￥9999.99元</span></div>
                        <div>库存量:<span>222</span>件</div>
                        <div>商品描述:<br><span>这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述</span></div>
                    </div>
                    <div class="right-item">
                        <img src="images/goods.jpg" alt="">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="left-item">
                        <h3>商品2</h3>
                        <div>商品名:<span id="pname">山寨手机</span></div>
                        <div>商品价格:<span id="price">￥9999.99元</span></div>
                        <div>库存量:<span id="num">222</span>件</div>
                        <div>商品描述:<br><span id="description">这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述</span></div>
                    </div>
                    <div class="right-item">
                        <img src="images/goods.jpg" alt="">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="left-item">
                        <h3>商品3</h3>
                        <div>商品名:<span id="pname">山寨手机</span></div>
                        <div>商品价格:<span id="price">￥9999.99元</span></div>
                        <div>库存量:<span id="num">222</span>件</div>
                        <div>商品描述:<br><span id="description">这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述这是一段商品描述</span></div>
                    </div>
                    <div class="right-item">
                        <img src="images/goods.jpg" alt="">
                    </div> -->
                <!-- <h3>已确认的订单</h3>
                    <div>
                        订单2<br>
                        交易id:9809879071<br>
                        交易商品名称:山寨手机<br>
                        交易时间:2018/12/18/0:10<br>
                        交易价格:￥99999.99元<br>
                        交易状态:未收货<br>
                        商品id:<a style="text-decoration-line: underline;">2345678</a><br>
                        卖家id:123456789<br>
                </div><div>
                    订单2<br>
                    交易id:9809879071<br>
                    交易商品名称:山寨手机<br>
                    交易时间:2018/12/18/0:10<br>
                    交易价格:￥99999.99元<br>
                    交易状态:未收货<br>
                    商品id:<a style="text-decoration-line: underline;">2345678</a><br>
                    卖家id:123456789<br>
            </div> -->
        </div>

        </fieldset>
        </div>


    </main>
    <nav class="right">

        <ul>
            <li><a href="news.htm">新闻</a></li>
            <li><a href="user.htm">用户中心</a></li>
            <li><a href="topup.htm">充值</a></li>
            <li><a href="intro.htm">操作介绍</a></li>
            <li><a href="sell.htm">发布商品</a></li>
            <li><a href="forum.htm">论坛入口</a></li>

        </ul>

    </nav>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/content.js"></script>
<script>
    $(function () {

        $('#seller').bind({
            // 鼠标悬停在该位置会显示下边界
            mouseover: function () {
                $('#seller').css('border-bottom-style', 'solid');
            },
            // 鼠标离开后取消下边界
            mouseleave: function () {
                $('#seller').css('border-bottom-style', 'none');

            },
            // 点击时加载订单信息
            click: function () {
                htmlobj = $.ajax({ url: '', async: false });
                objs = JSON.parse(htmlobj.responseText);


                // 生成对应的html代码并插入
                html = '';
                for (var i = 0; i < objs.length; i++) {
                    html += '\
        <div class="clearfix">\
                <div class="left-item">\
                    <h3>商品' + (i + 1) + '</h3>\
                    <div>商品名:<span>' + objs[i].pname + '</span></div>\
                    <div>商品价格:<span>￥' + objs[i].shop_price + '元</span></div>\
                    <div>库存量:<span>' + objs[i].num + '</span>件</div>\
                    <div>商品描述:<br><span>' + objs[i].pdesc + '</span></div>\
                </div>\
                <div class="right-item">\
                    <img src=" ' + objs[i].pimage + ' " alt="无法加载图片">\
                </div>\
            </div>';

                }
                $('buy-or-sell').html(html);
            }
        });

        $('#buyer').bind({
            mouseover: function () {
                // 鼠标悬停在该位置会显示下边界
                $('#buyer').css('border-bottom-style', 'solid');
            },
            // 鼠标离开后取消下边界
            mouseleave: function () {
                $('#buyer').css('border-bottom-style', 'none');

            },
            click: function () {
               $.ajax({url:'',async:false});
                html = '<div id="my-order"> ' +
                    '<h3>已确认的订单</h3>';
                for (var i = 0; i < objs.length; i++) {
                    html +=
                        '<div>订单' + (i + 1) + '<br>' +
                        // '交易id:' + objs[i].oid + '<br>' +
                        '商品名称:' + objs[i].pname + '<br>' +
                        '交易时间:' + objs[i].pdate + '<br>' +
                        '交易价格:' + objs[i].shop_price + '<br>' +
                        // '交易状态:' + objs[i].pstate + '<br>' +
                        '商品id:' + objs[i].pid + '<br>' +
                        '卖家id:' + objs[i].uid + '<br>' +
                        '</div>';

                }
                $('buy-or-sell').html(html);
            }
        });
    });

// 接受的json的key如下
// pid
// pname
// shop_price
// pimage 
// pdate 
// pdesc 
// cid 
// uid 
// num 
</script>

</html>