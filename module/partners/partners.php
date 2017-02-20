<!doctype html>
<html lang="ru">
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
    <script src="bower_components/underscore/underscore-min.js"></script>
    <script src="scripts/cartadd.js" defer></script>

</head>
<body>
<br>
<br>
<div class="modal fade" id="modal-shop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="modalHeader">Название модали</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button id="modal-close" type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
                <button id="modal-save" type="button" class="btn btn-primary hidden">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Партнерам</a></li>
                <li class="active">Магазин</li>
            </ol>
            <div id="content">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#shop" data-toggle="tab">
                            <span class="nav-text">Магазин</span>
                        </a>
                    </li>
                    <li>
                        <a href="#nick" data-toggle="tab">
                            <span class="glyphicon glyphicon-user pull-right"></span>
                            <span class="nav-text">Выбор плательщика<span>
                        </a>
                    </li>
                    <li><a href="#order" data-toggle="tab">
                            <span class="glyphicon glyphicon-shopping-cart pull-right"></span>
                            <span class="nav-text">Текущие заказы</span>
                        </a>
                    </li>
                    <li><a id="but-order" href="#cart" data-toggle="tab"><span class="badge pull-right count">0</span>
                            <span class="nav-text">Моя корзина</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="shop">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <!--Form Search-->
                                <form id="search-price" data-toggle="validator" role="form">
                                    <span class="text-primary">Поиск товаров:</span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="P/N или наименование"
                                               name="search_text" required>
                                        <span class="input-group-btn">
                                            <button id="but-search" class="btn btn-primary" type="submit">Найти</button>
                                        </span>
                                    </div>
                                    <span class="text-primary">Параметры поиска:</span>
                                    <br>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-success active">
                                            <input type="radio" name="view" value="PN">P/N
                                        </label>
                                        <label class="btn btn-warning">
                                            <input type="radio" name="view" value="name">Наименование
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Список товаров
                                    </div>
                                    <div id="find-price" class="table-responsive ">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>P/N</th>
                                                <th>Наименование товара</th>
                                                <th>Цена</th>
                                                <th>Наличие</th>
                                            </tr>
                                            </thead>
                                            <tbody id="product-list">
                                            <!--Список товаров-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nick">
                        <h3>Список партенров:</h3>
                        <?php
                        /**
                         * @$dbh - BD СВУ соединение по ODBC(SVU)
                         */
                        $dbh = new PDO("odbc:SVU");
                        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $queryStr = 'SELECT ID,FIRMNAME FROM PARTNERS WHERE FIRMSTATUS=\'D\' ORDER BY ID';
                        $res = $dbh->query($queryStr);
                        echo '<select id="partners-list">';
                        $count_part = 0;
                        foreach ($res as $partner):
                            ++$count_part;
                            $st = '<br>ID=' . $partner['ID'] . '<br/>Партнеры: ' . $partner['FIRMNAME'] . "<hr/> \r\n";
                            $firm_name = iconv("CP1251", "UTF-8", $partner['FIRMNAME']);
                            echo "Дилер: <option name=\"$partner[ID]\" data-partner='$partner[ID]'>" . $firm_name . "</option> \n";
                        endforeach;
                        echo '</select>';
                        echo "<p>Количество партнеров:<b>$count_part</b></p>";

                        ?>
                        <h2>Выберите плательщика:</h2>
                        <hr>
                        <div id="partners-nick"></div>
                    </div>
                    <div class="tab-pane" id="order">...</div>
                    <div class="tab-pane" id="cart">
                        <div id="block-cart">
                            <!--Товары в корзине-->
                            <table class="table table-hover shopping_list">
                                <thead>
                                <tr class="warning">
                                    <th>P/N</th>
                                    <th>Наименование</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>Сумма</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <hr>
                                    <div class="all-sum">
                                        <span>Итого:</span>
                                            <span id="all-sum-price"></span>
                                            <span class="ruble">руб.</span>
                                        <button id="svu-order-but" type="button" class="btn btn-danger">Оформить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>

