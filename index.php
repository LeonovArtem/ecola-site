<!doctype html>
<html lang="ru">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!--Header-->
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-4">
            <a href="/"><img id="logo" src="img/logo.png"></a>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-8">
            <div class="row">
                <div class="col-lg-12 head-text-right">
                    <h3><strong>Светодиодные лампы и светильники</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <!--City-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row head-text-right">
                        <div class="col-lg-12 phone">
                            <strong>Телефон:</strong>(495)981-06-15
                        </div>
                        <div class="col-lg-12 phone">
                            <strong>Факс:</strong>(495)981-06-15
                        </div>
                        <div class="col-lg-12 mail">
                            <strong>Email:</strong><a href="mailto:#">info@ecola.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Menu-->
    <div class="row">
        <div class="navbar navbar-inverse text-uppercase" role="navigation">
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
                    <li><a href="#"><span>О фирме</span></a></li>
                    <li><a href="#about">Контакты</a></li>
                    <li><a href="#contact">Где купить?</a></li>
                    <li><a href="#contact">Партнерам</a></li>
                    <li><a href="#contact">Каталог продукции</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Wrapper-->
    <div class="row wrap-slide">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="row left-slide">
                <div class="col-md-12 left-slide-top">
                    <div class="banner"><img src="img/left-banner.png"></div>
                </div>
                <div class="col-md-12  left-slide-middle">
                    <p><strong>Новинка!</strong><br>Золотистые LED лампы! (свечи, шары, рефлекторы R50, замена галогенок
                        MR16
                        GU5.3)</p>
                </div>
                <div class="col-md-12  left-slide-bottom">
                    <h4><a href="@news">Другие <strong>новости</strong> ecola</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="row right-slider">
                <!-- Wrapper for slides -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="13000">
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
                        <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
                        <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!--Slider Text-->
                    <div class="text-slider-right">
                        <div>
                            <div class="text-slider-header">Мощные светодиодные лампы?<br>
                                А зачем?
                            </div>
                            <p>Пора отойти от стереотипа, что бытовые и промышленные источники света должны быть
                                разными!</p>
                            <p><strong>ЭКОЛА предлагает переходники и разветвители. Вместо одной дорогой мощной лампы
                                    - </strong>
                                простые и доступные варианты установки <strong>нескольких массовых ламп.</strong>
                            </p>
                        </div>
                        <div class="carousel-list">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <div class="row right-slider-bottom">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <button type="button" class="btn btn-secondary-outline">Узнать больше</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                                <button type="button" class="btn btn-secondary-outline">Статьи</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center"> Подробнее ознакомиться с нашими <strong>
                    светодиодными энергосберегающими</strong> лампами и <strong>светильниками</strong>
                Вы можете в нашем <strong>каталоге</strong></h4>
        </div>
    </div>
    <div class="row align-items-start ">
        <div class="col-lg-6 col-md-6">
            <div class="row footer-left-top">
                Светодиодные лампы и светильники Ecola (Экола)
            </div>
            <div class="footer-left-middle">
                <p>
                    С момента образования в 2006 году,
                    компания Экола производит один из самых широких ассортиментов светодиодных
                    и энергосберегающих ламп и светильников в России.<br>
                    Приоритетами развития бренда являются:<br>
                    качество, широкий ассортимент, доступная цена.<br>
                    Экола - один из признанных лидеров на рынке. Чтобы удерживать лидерство,
                    мы не только внимательно следим за тенденциями изменения спроса покупателей и
                    развития светотехнической отрасли, но формируем рынок, создавая новые тренды и инновации.

                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 ">
            <div class="row footer-right">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="thumbnail  footer-catalog">
                        <div class="text-footer-head"><strong>Каталог Ecola 2017</strong></div>
                        <div>
                            <button type="button" class="btn btn-ecola-white">Посмотреть</button>
                        </div>
                        <div>
                            <img src=img/catalog-2017.jpg alt="...">
                        </div>
                        <div class="catalog-load">
                            <button type="button" class="btn btn-ecola-catalog"><span
                                    class="glyphicon glyphicon-arrow-down"></span> Скачать PDF(16 мб.)
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="thumbnail  footer-util">
                        <a id="arrows-util" href="#">
                            <p class="text-upper-white">Об утилизации ламп</p>
                            <img data-src="holder.js/300x200" src=img/arrows-util.png alt="...">
                        </a>
                    </div>
                    <div class="thumbnail footer-idea">
                        <h4 class="text-upper-black">Светлые идеи от Ecola</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Menu-->
    <div class="row footer-vault">
        <div class="col-lg-6 col-md-6 footer-company">
            Экола предлагает широкий ассортимент продукции
            для создания современного экономичного освещения:<br>
            энергосберегающие светодиодные лампы, светильники и прожекторы.<br>
            Изделия предназначены для использования в жилых домах и квартирах,
            офисных, производственных и других типах помещений, а также для подсветки
            архитектурных объектов различного назначения.
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <ul class="menu-list-white">
                    <li><a href="" target="_blank">Главная</a></li>
                    <li><a href="" target="_blank">О фирме</a></li>
                    <li><a href="" target="_blank">Контакты</a></li>
                    <li><a href="" target="_blank">Где купить?</a></li>
                    <li><a href="" target="_blank">Партнерам</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <ul class="menu-list-white">
                    <li><a href="" target="_blank">Каталог продукции</a></li>
                    <li><a href="" target="_blank">Новости</a></li>
                    <li><a href="" target="_blank">Об утилизации ламп</a></li>
                    <li><a href="" target="_blank">Статьи</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 live-lighter">
                <img src="img/live-lighter.png" alt="...">
            </div>
        </div>

    </div>

</div>
<!--Document Scroll arrow-->
<a id="go-to-top" href="#" class="btn btn-primary btn-lg go-to-top" role="button" title="Вверх">
    <span class="glyphicon glyphicon-chevron-up"></span>
</a>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 20000
        });
        miniSlide(3, 700);
        arrowSlide(100);
    });
    function arrowSlide(delay) {
        var turn = 0;
        $('#arrows-util').on('mouseover', function () {
            var img = $('#arrows-util').find('img');
            var slider = setInterval(function () {
                $(img).css('-webkit-transform', 'rotate(' + turn * 20 + 'deg)');
                turn++;
            }, delay);
            $(self).on('mouseout', function () {
                clearTimeout(slider);
            });
        });
    }
    function miniSlide(repeat, delay) {
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
    //Document Scroll arrow
    $(window).scroll(function () {
        // Высота проявления кнопки
        if ($(this).scrollTop() > 100) {
            $('#go-to-top').fadeIn();
        } else {
            $('#go-to-top').fadeOut();
        }
    });
    $('#go-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
            // Скорость подъема
        }, 0);
        return false;
    });
</script>
</body>
</html>