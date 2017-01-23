<!DOCTYPE html>
<html lang="en">
<head>
    <title>Urbanic Free Website Template</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Web Font Embed -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="js/colorbox/colorbox.css" rel='stylesheet' type='text/css'>
    <link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>

</head>

<body>
<div class="templatemo-top-bar" id="templatemo-top">
    <div class="container">
        <div class="subheader">
            <div id="phone" class="pull-left">
                <span class="glyphicon glyphicon-earphone" style="font-size: 18px"></span>
                (495)981-06-15
            </div>
            <div id="email" class="pull-right">
                <span class="glyphicon glyphicon-envelope" style="font-size: 18px"></span>
                info@ecola.ru
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md4 col-xs-4">
            <ul class="nav navbar-nav left-deg-menu">
                <li class="active menu-fist"><a href="#"><span>ГЛАВНАЯ</span></a></li>
                <li class="active"><a href="#"><span>О ФИРМЕ</span></a></li>
                <li class="active"><a href="#about">КОНТАКТЫ</a></li>

            </ul>
        </div>
        <div class="col-lg-4 col-md4 col-xs-4">
            <div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Urbanic Template"
                                                      title="Urbanic Template"></a>
            </div>
            <div class="row text-center">
                <h4>Светодиодные лампы и светильники</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md4 col-xs-4">
            <ul class="nav navbar-nav navbar-right right-deg-menu">
                <li><a href="#contact">ГДЕ КУПИТЬ?</a></li>
                <li><a href="#contact">ПАРТНЕРАМ</a></li>
                <li class="menu-last"><a href="#contact">КАТАЛОГ </a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <!-- Carousel -->
    <!-- Wrapper for slides -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="13000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/slide-1.jpg" alt="..." style="border-radius: 20px">
                <div class="carousel-caption">
                    <div class="left-carousel">
                        <img id="mini-slide" src="img/mini-slide-5.png">
                    </div>
                </div>
            </div>
            <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
            <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
        </div>

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
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                </ol>
            </div>
            <div class="row right-slider-bottom">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-orange">Узнать больше</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                    <button type="button" class="btn btn-orange">Статьи</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="templatemo-welcome" id="templatemo-welcome">
    <div class="container">
        <div class="templatemo-slogan text-center">
            <span class="txt_darkgrey">Подробнее ознакомиться с нашими <span class="txt_orange">светодиодными энергосберегающими</span> лампами и <span
                    class="txt_orange">светильниками</span> Вы можете в нашем  </span><span
                class="txt_orange">каталоге</span>
        </div>
    </div>
</div>
<script>


//        miniSlide(3, 700);
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
//    $(window).scroll(function () {
//        // Высота проявления кнопки
//        if ($(this).scrollTop() > 100) {
//            $('#go-to-top').fadeIn();
//        } else {
//            $('#go-to-top').fadeOut();
//        }
//    });
//    $('#go-to-top').click(function () {
//        $('body,html').animate({
//            scrollTop: 0
//            // Скорость подъема
//        }, 0);
//        return false;
//    });
</script>





</body>
</html>