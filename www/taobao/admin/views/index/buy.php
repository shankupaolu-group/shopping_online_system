<!DOCTYPE html>
<html lang="zh-CN">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>购买商品-OOX交易网站</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <link rel="stylesheet" type="text/css" href="css/reglog.css">
        <style>
      
        input{
                background-color: #fff;
                box-sizing: border-box;
                width: 294px;
                outline: none;
                border-style:none;
                          
        }
        textarea {
            width:450px;
            height:80px;
        }
    
        #file, #file:hover {
                background-color:transparent;
                width:auto;
        }
        .data>div{
                text-align: left;
                
                margin-top:16px;
        }
        span {
                vertical-align: top;
        }
        .data div {
                margin-top:1.5em;
        }
      select,option {
              color:#333;
      }
     
        </style>
</head>

<body>
        <nav class="top clearfix">
                        <a href="index.htm""> <h1>OOX交易网站</h1></a>
                <ul>
                        <li><a href="login.htm">登录</a></li>
                        <li><a href="register.htm">注册</a></li>
                </ul>
        </nav>
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
        <div id="wrapper">
                <div id="rec">
                                <h2>购买商品</h2>
                <form action="buy" method="post" autocomplete="on">

                        <input type="hidden" name="method" value="buyservice" />

                        <div class="data">
                               
                                    <div>商品名:&nbsp&nbsp <span id="pname"></span></div>
                                   
                                    <div>购买件数: <input type="number" name="num" id="num" required>
                                    </div>
                                    <div>总计价格：￥<span id="total">0</span>元</div>
                                    <div>联系电话：<input id="tel" required></div>
                                    <div><span>收货地址：</span><textarea id="address"></textarea>
                                     </div>
                             

                        </div>
                        <button class="btn">提交</button>
                </form>
        </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/content.js"></script>
        <script src="js/buy.js"></script>
</body>
</html>