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

    <![endif]-->

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <style type="text/css">


        h1 {
            font-size: 1.6em;
            font-weight: normal;
            margin: 0;
        }

        h2 {
            position: relative;
            font-size: 16px;
            padding: 13px 0 10px 10px;
            margin: -42px 13px 5px -26px;
            color: #fff;
            background-color: #ff7600;
            -webkit-box-shadow: 0px 2px 4px #888;
            -moz-box-shadow: 0px 2px 4px #888;
            box-shadow: 0px 2px 4px #888;
        }

        h2:before, h2:after {
            content: ' ';
            position: absolute;
            width: 0;
            height: 0;
        }

        h2:before {
            width: 30px;
            left: -30px;
            top: 12px;
            border-width: 20px 10px;
            border-style: solid;

        }

        h2:after {
            left: 0px;
            top: 100%;
            border-width: 5px 10px;
            border-style: solid;
            border-color: #d35400 #d35400 transparent transparent;
        }

        /*  1.Header    */
        .header {
            background-color: #eee;
        }

        /*  4. About Area
/*----------------------------------------*/
        .about-area {
            background: rgba(0, 0, 0, 0) url("img/banner/1.jpg") no-repeat scroll center top;
            color: #ffffff;
            margin-top: 140px;
            padding-bottom: 54px;
            position: relative;
        }

        .about-area:before {
            height: 110px;
            left: 0;
            right: auto;
            top: -20px;
            width: 49.2%;
        }

        .about-area:after {
            border-width: 55px 30px;
            left: 49.2%;
            top: -20px;
            right: auto
        }

        .about-area h3 {
            font-size: 30px;
            margin-bottom: 79px;
            padding-top: 22px;
            z-index: 9;
            position: relative;
        }

        .about-area p {
            font-family: "Raleway";
            line-height: 26px;
            margin-bottom: 42px;
        }

        /*----------------------------------------*/
        /*  5. Course Area
        /*----------------------------------------*/
        .course-area .section-title-wrapper {
            margin-bottom: 122px;
        }

        .single-item-image a {
            display: inline-block;
        }

        .single-item-image {
            overflow: hidden;
            position: relative;
            text-align: center;
            top: -35px;
        }

        .overlay-effect a {
            position: relative
        }

        .overlay-effect a:before {
            background: rgba(45, 62, 80, 0.2) none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 100%;
            left: 0;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            position: absolute;
            right: 0;
            width: 100%;
        }

        .single-item:hover .overlay-effect a:before {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
        }

        .single-item {
            background: #f6f6f6 none repeat scroll 0 0;
            border: 1px solid #ff7600;
            border-radius: 13px;
            padding: 0 35px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            margin-bottom: 20px;
            margin-top: 70px;
        }

        .single-item:hover {
            background: #ffffff none repeat scroll 0 0;
            box-shadow: 0 2px 20px rgba(34, 30, 31, 0.4);
        }

        .single-item-text h4 {
            font-size: 20px;
            padding-top: 7px;
            text-align: center;
        }

        .single-item-text h4 a, .single-item-text h4 {
            color: #2d3e50;
        }

        .single-item-text-info span {
            color: #696969;
            font-family: "montserratregular";
            margin-right: 11px;
        }

        .single-item-text-info span span {
            color: #2d3e50;
        }

        .single-item-text > p {
            color: #222222;
        }

        .single-item-content {
            margin-bottom: 44px;
            overflow: hidden;
            padding-top: 21px;
        }

        .single-item-text-info {
            margin-bottom: 18px;
            padding-top: 5px;
        }

        .single-item-comment-view span {
            color: #696969;
            display: inline-block;
            font-family: "montserratregular";
            font-size: 12px;
            margin-right: 17px;
        }

        .single-item-comment-view span:last-child {
            margin-right: 0
        }

        .single-item-comment-view > span i {
            font-size: 14px;
            margin-right: 8px;
        }

        .single-item-comment-view, .single-item-rating {
            display: inline-block;
        }

        .single-item-rating {
            color: #f3c30b;
            float: right;
            font-size: 16px;
        }

        .single-item-rating i {
            margin-left: 3px;
        }

        .single-item .button-default {
            padding: 8px 33px;
        }

        .button-bottom {
            margin-bottom: -19.5px;
            text-align: center;
        }

        .single-item:hover .button-default {
            background: #2d3e50 none repeat scroll 0 0;
        }

        .button-large.button-default {
            box-shadow: 0 2px 20px rgba(34, 30, 31, 0.2);
            font-size: 18px;
            margin-top: 83px;
            padding: 12px 18px;
            text-transform: capitalize;
        }

        .shortcode .button-large.button-default {
            margin-top: 40px
        }

        .button-default.button-large:hover {
            background: #2d3e50 none repeat scroll 0 0;
        }

        .button-large.button-default i {
            font-size: 28px;
            line-height: 20px;
            margin-left: 11px;
            position: relative;
            top: 4px;
        }

        /*----------------------------------------*/
        /*Footer*/
        .footer-vault {
            background-color: #ff7600;;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            border-top: 1px solid #d35400;
        }

        .footer-company {
            margin-bottom: 10px;
            padding-bottom: 10px;

        }

        .live-lighter {
            text-align: center;
        }

        .live-lighter img {
            width: 100%;
            max-width: 226px;
            height: auto;
        }

        .menu-list-white {
            -webkit-padding-start: 0px;
            list-style-type: none;
        }

        .menu-list-white li {
            padding-bottom: 5px;
        }

        .menu-list-white a {
            color: #fff;
        }

    </style>

</head>

<body>
<div class="header">
    <div class="templatemo-top-bar" id="templatemo-top">
        <div class="container">
            <div class="subheader">
                <div id="phone" class="pull-left">
                    <span class="glyphicon glyphicon-earphone" style="font-size: 18px"></span>
                    (495) 981-06-15
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
                    <li class="active"><a href="#about">КАТАЛОГ</a></li>

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
                    <li class="menu-last"><a href="#contact">КОНТАКТЫ</a></li>
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
                    <img src="img/slide-1.jpg" alt="..." style="border-radius: 13px 13px 0px 0px">
                    <div class="carousel-caption">
                        <div class="left-carousel">
                            <img id="mini-slide" src="img/mini-slide-5.png">
                        </div>
                    </div>
                </div>
                <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
                <div class="item"><img src="img/slide-1.jpg" alt="..."></div>
            </div>
            <div class="text-slider-left">
                <div id='trapezoid'><span><strong>Новинка!</strong><br>Золотистые LED лампы! <br>(свечи, шары, рефлекторы R50, замена галогенок MR16 GU5.3)</span>
                </div>
                <div id="trapezoid-2">
                    <a href="@news">Другие <strong>новости</strong> Ecola</a>
                </div>


            </div>
            <div class="text-slider-right">
                <div class="row">
                    <h2 class="flag">Мощные светодиодные лампы? <span id="text-reload">А зачем</span>?</h2>
                    <p>Пора отойти от стереотипа, что бытовые и промышленные источники света должны быть
                        разными!</p>
                    <p><strong>ЭКОЛА предлагает переходники и разветвители. Вместо одной дорогой мощной лампы
                            - </strong>
                        простые и доступные варианты установки <strong>нескольких массовых ламп.</strong>
                    </p>

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
<!--/*Catalog + lamps + Idea*/-->
<div class="container">

    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="single-item">
                <div class="single-item-image overlay-effect">
                    <a href="#"><img src="img/disk-ecola.png" alt="" style="width: 200px;"></a>
                </div>
                <div class="single-item-text">
                    <h4><a href="#">Обучающий фильм</a></h4>
                    <div class="single-item-text-info">

                    </div>

                </div>
                <div class="button-bottom">
                    <a href="#" class="btn btn-orange">Посмотреть</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="single-item">
                <div class="single-item-image overlay-effect">
                    <a href="#"><img src="img/catalog.png" alt="" style="width: 293px;"></a>
                </div>
                <div class="single-item-text">
                    <h4><a href="#">Каталог Ecola 2017</a></h4>
                    <div class="single-item-text-info">

                    </div>

                </div>
                <div class="button-bottom">
                    <a href="#" class="btn btn-orange">Смотреть</a>
                    <a href="#" class="btn btn-orange">Скачать</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 hidden-sm">
            <div class="single-item">
                <div class="single-item-image overlay-effect">
                    <a href="#"><img src="img/lamps-light.png" alt="" width="160px"></a>
                </div>
                <div class="single-item-text">
                    <h4><a href="#">Светлые идеи от Ecola</a></h4>

                    <div class="single-item-content">

                    </div>
                </div>
                <div class="button-bottom">
                    <a href="#" class="btn btn-orange">Узнать больше</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="newsletter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="newsletter-content">
                    <img src="img/live-lighter.png">
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="newsletter-form angle">
                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix" novalidate="true">
                        <div class="subscribe-form">
                            <input id="mc-email" type="email" name="EMAIL" placeholder="email...">
                            <button id="mc-submit" type="submit">Подписаться</button>
                        </div>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre fix pull-right">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-vault">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 footer-company">
                Экола предлагает широкий ассортимент продукции
                для создания современного экономичного освещения:<br>
                энергосберегающие светодиодные лампы, светильники и прожекторы.<br>
                Изделия предназначены для использования в жилых домах и квартирах,
                офисных, производственных и других типах помещений, а также для подсветки
                архитектурных объектов различного назначения.
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="menu-list-white">
                        <li><a href="" target="_blank">Главная</a></li>
                        <li><a href="" target="_blank">О фирме</a></li>
                        <li><a href="" target="_blank">Контакты</a></li>
                        <li><a href="" target="_blank">Где купить?</a></li>
                        <li><a href="" target="_blank">Партнерам</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="menu-list-white">
                        <li><a href="" target="_blank">Каталог продукции</a></li>
                        <li><a href="" target="_blank">Новости</a></li>
                        <li><a href="" target="_blank">Об утилизации ламп</a></li>
                        <li><a href="" target="_blank">Статьи</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="footer_bottom_content">
    <div class="container">
        <span id="footer-line">Copyright © 2006 <a href="#">Ecola</a></span>
    </div>
</div>

</body>
</html>