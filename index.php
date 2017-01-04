<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified JavaScript -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-4">
                <a href="/"><img id="logo" src="img/logo.png"></a>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="row">
                    <div class="col-lg-12 head-text-right">
                        <h3 class="text-danger"><strong>Светодиодные лампы и светильники</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <!--City-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row head-text-right">
                            <div class="col-lg-12">
                                <strong>Телефон:(495)981-06-15</strong>
                            </div>
                            <div class="col-lg-12">
                                <strong>Факс:(495)981-06-15</strong>
                            </div>
                            <div class="col-lg-12">
                                <strong>Email:</strong><a href="mailto:#"><strong>info@ecola.ru</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Главная</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">О фирме</a></li>
                    <li><a href="#about">Контакты</a></li>
                    <li><a href="#contact">Где купить?</a></li>
                    <li><a href="#contact">Партнерам</a></li>
                    <li><a href="#contact">Каталог продукции</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="one col-lg-3 col-md-4">one</div>
            <div class="col-lg-9 col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/slide-1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="left-carousel">
                                    <img id="mini-slide" src="img/mini-slide-1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <?php

    ?>
    <script>
        miniSlide(3,700);
        function miniSlide(repeat,delay) {
            var nslide = 0;
            var reslide = 0;
            var slider = setInterval(function () {
                $('#mini-slide').attr('src', 'img/mini-slide-' + ++nslide + '.png');
                if (nslide == 5) {
                    nslide = 0;
                    ++reslide;
                }
                if (reslide == repeat)
                    clearTimeout(slider);
            }, delay);
        }
    </script>
</body>


