// (function ($, undefined) {
/**
 * @$blockCart  Корзина
 * @$content    Список товаров
 * @$butSearch  Поиск в СВИУ
 * @$productList Cписок товаров подгружаемый Ajax
 * @goodsInCart {array} Товары в корзине
 */
var $content = $('#content')
    , $butSearch = $('#but-search')
    , $blockCart = $('#block-cart')
    , $partnersList = $('#partners-list')
    , $partnersHtml = $('#partners-nick')
    , $productList = $('#product-list')
    , $butOrder = $('#but-order')
    , $sumPrice = $('#all-sum-price')
    , $navTab = $('.nav-tabs')
    , $breadcrumb = $('.breadcrumb')
    , $modal = $('#modal-shop')
    , goodsInCart = [];

//Навигация
$navTab.on('click', 'a', function () {
    var tabText = $(this).find('.nav-text').text(),
        $navActive = $breadcrumb.find('.active');
    $navActive.text(tabText);
});
//Список товаров по P/N или Наименованию
$butSearch.on('click', function () {
    var $search = $('#search-price')
        , $searchInput = $search.find('input')
        , searchText = $searchInput.serializeArray();
    $search.on('submit', function () {
        return false;
    });
    if ($searchInput.val()) {
        $.ajax({
            url: 'price.php',
            data: searchText,
            dataType: 'html',
            success: function (serverData) {
                $productList.empty().html(serverData);
            }
        });
    }
    return false;
});

//Плательщик
$content.on('click', '#svu-order-but', function () {
    var idNick = $partnersHtml.find('input:checked').val();
    var Niks = {
        niks: idNick
    };
    if (idNick)
        return alert('Выберите плательщика');
    //Добавляем количество к товарам
    for (var i = 0, n = goodsInCart.length; i < n; i++) {
        var id = goodsInCart[i].IdProduct;
        var qn = $("tr#" + id).find('.number input').val();
        goodsInCart[i].Quantity = qn;
    }

    goodsInCart.unshift(Niks);
    $.ajax({
        url: 'basesvu.php',
        data: {
            ORDER: goodsInCart
        },
        dataType: 'html',
        success: function (html_data) {
            $content.html(html_data);
        }
    });
});
$partnersList.on('change', function () {
    var partnerId = $partnersList.find('option:selected').data('partner');
    $partnersHtml.empty();
    partnersNicks(partnerId);
});

function partnersNicks(partnerId) {
    var data_ser = {
        id: partnerId
    };
    $.ajax({
        url: 'nick.php',
        data: data_ser,
        dataType: 'json',
        success: function (json_data) {
            var head_table = '<tr><th>ID_Плательщика</th><th>Плательщик</th><th>Выбрать</th></tr>';
            for (var i = 0, n = json_data.length; i < n; i++) {
                var partner = partner + '<tr>' + '<td>' + json_data[i].NIKS_ID + '</td>' + '<td>' + json_data[i].NIKS + '</td>' + '<td><input type="radio" name="payer" value="' + json_data[i].NIKS_ID + '"></td></tr>';
            }
            $partnersHtml.append(head_table + partner);
        }
    });
}

/**
 * Корзина товаров
 * @goodsInCart {array} Товары в корзине
 * @$store Наличие товара
 */

$productList.on('click', '.store-hidden', function () {
    $(this).find('.all-store').fadeToggle('fast');
});
$productList.on('click', '.btn', function () {
    var idGoods = $(this).data('product-id')
        , partNumber = $(this).data('product-pn')
        , price = $(this).data('product-price')
        , goodTitle = $('#' + 'name_price_' + idGoods).text()
        , good
        , goodCount = 1
        , sum_product = 0;

    if ($(this).text() == 'Перейти в корзину') {
        $butOrder.trigger('click');
    }
    else {
        $(this).text('Перейти в корзину');

        sum_product += price;
        $("#price").text(sum_product + ' руб.');
        good = new ProductCart(idGoods, partNumber, goodTitle, price, goodCount);
        goodsInCart.push(good);
        $butOrder.find('.count').text(goodsInCart.length);
    }
});
function ProductCart(idGoods, partNumber, goodTitle, price, goodCount) {
    this.idGoods = idGoods;
    this.partNumber = partNumber;
    this.goodTitle = goodTitle;
    this.price = price;
    this.count = goodCount;
}
$butOrder.click(function () {
    if (goodsInCart.length) {
        var
            cartModal,
            sum = 0,
            totalItems = '';

        for (var i = 0, n = goodsInCart.length; i < n; i++) {
            totalItems += '<tr id="' + goodsInCart[i].idGoods +
                '" data-partum="' + goodsInCart[i].partNumber +
                '" data-price="' + goodsInCart[i].price +
                '"><td>' + goodsInCart[i].partNumber +
                '</td><td>' + goodsInCart[i].goodTitle +
                '</td><td class="count-prod">' + goodsInCart[i].price +
                '</td><td>' + '<div class="number"><span class="minus">-</span> ' +
                '<input  data-id="' + goodsInCart[i].idGoods +
                '" class="var-input" type="text" value="1" size="5"/><span class="plus">+</span></div>' + '</td><td class="sum-prod">' +
                goodsInCart[i].price + '</td></tr>';

            sum += goodsInCart[i].price;
        }
        $blockCart.find('tbody').html(totalItems);
        $sumPrice.text(sum);
    } else {
        cartModal=new createModal();
        cartModal
            .setTitle('Корзина')
            .setBody('Ваша корзина пуста')
            .create();
        return false;
    }
});
//Оформление заказа
$content.on('click', '.minus', function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$content.on('click', '.plus', function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});

$content.on('change', '.var-input', function () {
    var prod_id = $(this).data('id')
        , tr_data = $('#' + prod_id)
        , //Строка товара
        $sumProd = $('.sum-prod')
        , price = tr_data.data('price')
        , quantity = $(this).val()
        , sum = price * quantity
        , all_sum = 0
        , prod_sum = 0
        , currentSum = 0
        , i = 0;
    tr_data.find('.sum-prod').text(sum);
    for (; i < $sumProd.length; ++i) {
        prod_sum = $sumProd[i].innerText;
        currentSum = parseInt(prod_sum);
        all_sum += currentSum;
        $sumPrice.text(all_sum);
    }
});

/**
 * Modal - Builder returns an object created from a template
 * obj = new createModal()
 * obj.setTitle() {string}
 * obj.setBody()  {string}
 * obj.create() {return object getModal}
 */

function getModal(title, message) {
    var $modalHeader = $('#modalHeader'),
        $modalBody = $('.modal-body'),
        $butClose = $('#modal-close'),
        $butSave = $('#modal-save');
    $modalHeader.text(title);
    $modalBody.text(message);
    $modal.modal();
}
function createModal() {
    var self = this;
    this.modalBody='';
    this.modalTitle='';
    this.butClose=false;
    this.setBody = function (modalBody) {
        self.modalBody = modalBody;
        return self;
    };
    this.setTitle = function (modalTitle) {
        self.modalTitle = modalTitle;
        return self;
    };
    this.create = function () {
        return new getModal(self.modalTitle, self.modalBody)
    }
}



// })(jQuery);
