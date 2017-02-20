<!doctype html>
<html lang="ru">
<head>
    <title>Партнерам</title>
    <meta charset="UTF-8">
    <!--Для мобильных устройств-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script src="bower_components/jquery/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>

</head>
<body>
<br>
<br>
<div class="container">
    <div class="btn-group get-shop">
        <button type="button" class="btn btn-danger" data-city="moscow">В москве</button>
        <button type="button" class="btn btn-default" data-city="region">В регионе</button>
        <button type="button" class="btn btn-info" data-city="all-shops">Все</button>
    </div>
    <h3 class="block-shops">
        <span class="header">В москве</span>
        <span class="badge count">0</span></h3>
    <div id="content"></div>
</div>
</body>
<script>
    var $content = $('#content'),
        $header = $('.header'),
        $countShops = $('.count');

    $('.get-shop').on('click', '.btn', function () {
        var data = $(this).data(),
            $blockShops=$('.block-shops'),
            $header=$blockShops.find('.header');
        $header.text($(this).text());
        getShops(data);
    });
    function getShops(data) {
        $.ajax({
            url: 'http://www.svetonic.ru/getAjax/shops-ajax.php',
            type: 'POST',                              // Устанавливает тип запроса (GET или POST). Значение по умолчанию GET.
            data: data,                              // Данные, которые будут переданы на сервер (json,xml)
            dataType: 'json',                       // Ожидаемый для приема с сервера тип данных.
            success: function (json_data) {
                $content.empty();
                json_data = json_data.shop;
                if (json_data instanceof Array) {
                    for (var i = 0, n = json_data.length; i < n; i++) {
                        for (var val in json_data[i]) {
                            $content.append('<p>' + val + ':\t' + json_data[i][val] + '<p>')
                        }
                        $content.append('<hr>');
                        $countShops.text(n);
                    }
                }
                else {
                    for (var val in json_data) {
                        $content.append('<p>' + val + ':\t' + json_data[val] + '<p>')
                    }
                }
            },
            error: function () {
                $content.append('<h3>Ошибка!</h3>');
            }

        })
    }
</script>
</html>



