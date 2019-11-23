<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台-OOX交易网站</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="clearfix">
    <nav class="top clearfix">
        <nav><a href="index.htm"> <h1>OOX交易网站</h1></a></nav>

        <ul>
            <li><a href="login.htm">登录</a></li>
            <li><a href="register.htm">注册</a></li>

        </ul>
    </nav>
    <div>

        <div id="list">
            <h2>后台功能</h2>

            <div id="force-end">强制终止交易</div>
            <div id="down-goods">交易下架</div>
            <div id="check">交易审核申请</div>
            <!-- <div id="punish">处罚</div> -->
            <div id="edit-info">修改交易信息时间名称描述</div>
            <div id="sumbit-news">发布新闻</div>
            <div id="add-class">增加新的交易类别</div>
            <div id="top-goods">置顶交易</div>
            <div id="ban">禁言</div>
            <div id="cancel">封禁</div>
        </div>

    </div>
    </div>
    <div id="wrapper">
            <table>
                <thead>
                    <th>
                        用户名
                    </th>
                    <th>
                        用户id
                    </th>
                    <th>
                    </th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody id="user-list">
                    <tr>
                        <td>Adam</td>
                        <td>43545345634543</td>
                        <td><button>禁言</button></td>
                        <td><button>删帖</button></td>
                        <td><button>删除用户</button></td>
                    </tr>
                    <tr>
                        <td>Adam</td>
                        <td>43545345634543</td>
                        <td><button>禁言</button></td>
                        <td><button>删帖</button></td>
                        <td><button>删除用户</button></td>

                    </tr>
                    <tr>
                        <td>Adam</td>
                        <td>43545345634543</td>
                        <td><button>禁言</button></td>
                        <td><button>删帖</button></td>
                        <td><button>删除用户</button></td>

                    </tr>
                </tbody>

            </table>
        </div>


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


        <footer>
            <small>Copyright © 2018 XXXXXXX All Rights Given up.</small>
        </footer>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/content.js"></script>
        <script src="js/manage.js"></script>
</body>


</html>