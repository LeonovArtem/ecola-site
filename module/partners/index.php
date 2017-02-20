<!doctype html>
<head>
    <title>Партнерам</title>
    <meta charset="UTF-8">
    <!--Для мобильных устройств-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
            padding-left: 20px;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form-signin" data-toggle="validator" role="form">
        <h2 class="form-signin-heading">Авторизация</h2>
        <div class="form-group">
            <input id="company" type="text" class="form-control" placeholder="Название компании" name="company"
                   required="" autofocus="">
            <input id="password" type="password" class="form-control" placeholder="Пароль" name="password" required="">
            <label class="checkbox">
                <input type="checkbox" value="remember-me">Запомнить
            </label>
            <button id="but-aut" type="submit" class="btn btn-lg btn-primary btn-block">Войти</button>
        </div>
    </form>
</div>
<script>
    (function ($, undefined) {
        var $company = $('#company'),
            $password = $('#password'),
            $butAut = $('#but-aut');
        $butAut.on('click',function () {

            return false;
        });

    })(jQuery);

</script>
</body>
</html>