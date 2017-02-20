<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<input type="text" name="referal" placeholder="Живой поиск" value="" class="who" autocomplete="off">
<ul class="search_result"></ul>
</body>
<script>
    $(function () {

        //Живой поиск
        $('.who').bind("change keyup input click", function () {
            if (this.value.length >= 2) {
                $.ajax({
                    type: 'post',
                    url: "model.php", //Путь к обработчику
                    data: {'referal': this.value},
                    response: 'text',
                    success: function (data) {
                        $(".search_result").html(data).fadeIn(); //Выводим полученые данные в списке
                    }
                })
            }
        })

        $(".search_result").hover(function () {
            $(".who").blur(); //Убираем фокус с input
        })

        //При выборе результата поиска, прячем список и заносим выбранный результат в input
        $(".search_result").on("click", "li", function () {
            s_user = $(this).text();
            //$(".who").val(s_user).attr('disabled', 'disabled'); //деактивируем input, если нужно
            $(".search_result").fadeOut();
        })

    })
</script>
</html>