<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
    .fail {width:200px; margin: 20px auto; color: red;}
    form {font-size:16px; color:#999; font-weight: bold;}
    form {width:160px; margin:20px auto; padding: 10px; border:1px dotted #ccc;}
    form input[type="text"], form input[type="password"] {margin: 2px 0 20px; color:#999;}
    form input[type="submit"] {width: 100%; height: 30px; color:#666; font-size:16px;}
    </style>
</head>
<body>


<form method="POST" action="/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        密码
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> 记住我
    </div>

    <div>
        <button type="submit">登录</button>
    </div>
</form>
</body>
</html>
