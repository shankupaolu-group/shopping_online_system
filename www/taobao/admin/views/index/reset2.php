<!DOCTYPE html>

<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改密码</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/reglog.css">

</head>

<body>
    <nav><a href="index.htm"> <h1>OOX交易网站</h1></a></nav>

    <div id="wrapper">
        <div id="rec">
            <h2>更改密码</h2>
            <form action="login?method=update" method="post">
                <div> <span>验证码&nbsp</span> <input name="code" type="text" placeholder="请输入3-10个字符 ">
                </div>
                <div> <span>创建新密码&nbsp</span><input type="password" name="password" id="pass" placeholder="密码由数字、字母和标点符号组成 "
                        required>
                        <div id="passstrength"></div>
                </div>
               

                <div>
                    <span>确认密码&nbsp</span>
                    <input type="password" id="checkpass" placeholder="请再次输入密码 " required>
                    <div id="diffpass"></div>
                </div>
                <div class="btn"><button type="submit">确认</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/content.js"></script>
</body>

</html>