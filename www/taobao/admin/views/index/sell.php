<!DOCTYPE html>
<html lang="zh-CN">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>发布商品-OOX交易网站</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <link rel="stylesheet" type="text/css" href="css/reglog.css">
        <style>
      
        input, textarea {
                background-color: #fff;
                box-sizing: border-box;
                width: 294px;
                outline: none;
                border-style:none;
                          
        }
        textarea {
                padding: 10px;
                box-sizing: border-box;
                border-radius: 10px;
                width:25em;
                background-color: #fff;
        }
    
        #file, #file:hover {
                background-color:transparent;
                width:auto;
        }
        .data>div{
                text-align: justify;
                
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
                                <h2>发布商品</h2>
                <form action="sell" method="post" autocomplete="on">

                        <input type="hidden" name="method" value="sellservice" />

                        <div class="data">
                               
                                <div>
                                        <span> 商品名称:</span>
                                        <input type="text" name="pname"
                                                placeholder="必填" required /></span>
                                </div>
                                <div>
                                        <span>商品类别:</span>
                                        <select id="class" name="cid" required>
                                                <option value="1">数码</option>
                                                <option value="2">服装</option>
                                                <option value="3">生活用品</option>
                                                <option value="4">学习用品</option>
                                                <option value="5">美食</option>
                                                <option value="6">家具</option>
                         
                                                <option value="7">化妆品</option>
                                                <option value="8">医药保健</option>
                                                <option value="9">二手商品</option>
                                                <option value="10">其他</option>
                                        </select></div>
                                <div> 
                                        <span> 商品图片:</span>
                                       <input id=“file“ type="file" name="pimage" required/></span>
                                </div>
                                <div>
                                        <span> 商品价格:</span>
                                        <input type="text" 
                                                required name="show_price" /></span>
                                </div>
                                <div> 
                                        <span>商品数量:</span> 
                                       <input type="number" 
                                                required name="num" /></span>
                                </div>
                                <div>
                                        <span>商品介绍:</span>
                                        <textarea id="pdesc" rows="6" cols="25" name="pdesc" 
                                        placeholder="请输入产品描述，不超过150个字符(可选)"></textarea>
                                </div>

                        </div>
                        <button>提交</button>
                </form>
        </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/content.js"></script>
</body>