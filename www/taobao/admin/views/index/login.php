<!DOCTYPE html>
<html lang="zh-CN">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/reglog.css">

    <title>登录页-OOX交易网站</title>
   

</head>



<body>
    <nav><a href="index.htm"> <h1>OOX交易网站</h1></a></nav>
    <div id="wrapper">
        <div id="rec">


            <h2>欢迎登录OOX网站</h2>
            <form action="login" method="POST"
            class="clearfix" >
                <div><span class="input">
                        <input name="account" type="email" placeholder="请输入登录用的邮箱号码" required>
                    </span></div>
                <div> <span class="input">
                        <input name="password" type="password" placeholder="请输入密码" required>
                    </span></div>
                <div class="bar">
                    <div class="left">
                        还没有账号？<br>
                        <a href="register.htm">点此注册</a>
                    </div>
                    <div class="right">
                        <a href="reset.htm">忘记密码</a>
                    </div>
                </div>
                <div class="btn">
                        <button>立即登录</button>
                </div>
                

            </form>
        </div>
    </div>

<!-- 
    <footer>
        <small>Copyright © 2018 XXXXXXX All Rights Given up.</small>
    </footer> -->
    <script src="js/jquery-3.3.1.min.js "></script>
    <script src="js/content.js "></script>
</body>

<script type="text/javascript" src="main.js"></script>
</html>
