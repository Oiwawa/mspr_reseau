<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
{{--    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto&display=swap" rel="stylesheet">
    <style>
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #080710;
        }
        .background{
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }
        .background .shape{
            height: 300px;
            width: 300px;
            position: absolute;
            border-radius: 50%;
        }
        .shape{
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
            left: 65px;
            top: -175px;
        }
        form{
            height: 520px;
            width: 400px;
            background-color: rgba(255,255,255,0.13);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 30px 35px;
        }
        form *{
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h1{
            color: #000;
            font-size: 32px;
            font-weight: bold;
            line-height: 42px;
            text-align: center;
            font-family: 'Kanit', sans-serif;
        }

        form label:first-of-type{
            margin-top: 55px !important;
        }

        label{
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder{
            color: #e5e5e5;
        }
        button{
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<div>
    <div class="background">
        <a href="{{url('/')}}"><div class="shape"></div></a>
    </div>
    <form action="{{ url('login') }}" method="post">
    <h1>Connexion</h1>
        {{ csrf_field() }}

        <label for="username">Username</label>
        <input type="text" id="username" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" required>

        <button type="submit" name="login" value="Login">Se connecter</button>
    </form>
</div>
</body>
</html>

