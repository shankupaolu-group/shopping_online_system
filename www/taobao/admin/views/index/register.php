<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页-OOX</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/reglog.css">
   
    <style>
        #passstrength {
            display: block;
        }
    </style>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>

</head>

<body>
    <nav><a href="index.htm"><h1>OOX交易网站</h1></a></nav>
    <div id="wrapper">
        <div id="rec">
            <h2>快速注册</h2>
            <form action="register" method="POST" 
        >
                <div>
                    <span>用户名&nbsp</span>
                    <input type="text" maxlength=10 placeholder="请输入3-10个字符 " required>
                </div>
                <div>
                    <span>注册邮箱&nbsp</span>
                   <input type="email" placeholder="请输入你的邮箱账号 " required>
                
                </div>
                <div>
                    
                    <span>创建新密码&nbsp</span>
                    
                    
                        <input type="password" name="password" id="pass" placeholder="密码由数字、字母和下划线组成 " required>
                   
                    <div id="passstrength"></div>
                </div>
                <div class="bottom">
                    <span>确认密码&nbsp</span>
                    <input type="password" id="checkpass" placeholder="请再次输入密码 " required>
                    <div id="diffpass"></div>
                </div>
                <div class="bar">已有账号<a href="login.htm">立即登录</a></div>

                <div class="btn">
                        <button id="submit">完成注册</button>
                </div>

                
            </form>



        </div>
    </div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/content.js"></script>
</body>


</html>