<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>

<form method="POST" action="/register">
    {!! csrf_field() !!}

    <div>
        用户名
        <input type="text" name="name" value="jackeye">
    </div>

    <div>
        Email
        <input type="email" name="email" value="jackjackeye@gmail.com">
    </div>

    <div>
        密码
        <input type="password" name="password" value="123456">
    </div>

    <div>
        确认密码
        <input type="password" name="password_confirmation" value="123456">
    </div>

    <div>
         <button type="submit">注册</button>
    </div>
</form>

</body>
</html>
