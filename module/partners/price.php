<?php
function get_float($st)
{
    if (strlen($st) == 0)
        return 0;
    $st[strpos($st, ',')] = '.'; //Позиция +
    $price_st = NULL;         //Преобразованная строка
    for ($i = 0, $n = strlen($st); $i < $n; $i++):
        if ($st[$i])                 //Можно так $st[$i]?$price_st.=$st[$i]:false;
            $price_st .= $st[$i];
    endfor;
    return (float)$price_st;
}

#DB2 c CDN=SVU
$dbh = new PDO("odbc:SVU");
$search = trim(strtolower($_REQUEST['search_text'])); //Преобразуем входные данные к нижнему регистру
$search_ru = iconv("UTF-8", "CP1251", $search);
$like = "%$search_ru%";
if ($_REQUEST['view'] == 'name') {
    //$stmt = $dbh->prepare("SELECT ID,PARTNUM,NAME FROM  GOODSTEMPLATES WHERE OBSOLETE=0 AND REPAIR=0 AND PARTNUM IS NOT NULL  AND PARTNUM LIKE '_________' AND LOWER(NAME) LIKE :search  ORDER BY ID;");
    $stmt = $dbh->prepare("Select GT.id,GT.name,GT.partnum, PV2.valueopen,
                                (COUNTINSTATE0-RESERVEDINSTATE0+COUNTINSTATE1-RESERVEDINSTATE1+COUNTINSTATE2-RESERVEDINSTATE2),
                                (COUNTINSTATE5-RESERVEDINSTATE5), 
                                (COUNTINSTATE4-RESERVEDINSTATE4),
                                (COUNTINSTATE3-RESERVEDINSTATE3)  
                            FROM goodstemplates  GT left OUTER JOIN PRICE_VALUES PV2  ON  PV2.IDGOODSTEMPLATES = GT.ID AND  PV2.IDPRICE_BE_TYPE = 5 
                            WHERE GT.OBSOLETE=0 AND GT.REPAIR=0 AND GT.PARTNUM IS NOT NULL AND GT.PARTNUM LIKE '_________' AND GT.COUNTINSTATEALL-GT.RESERVEDINSTATEALL>0 
                            AND LOWER(NAME) LIKE :search  ORDER BY ID");
} else {
    //$stmt = $dbh->prepare("SELECT ID,PARTNUM,NAME FROM  GOODSTEMPLATES WHERE OBSOLETE=0 AND REPAIR=0 AND PARTNUM IS NOT NULL  AND PARTNUM LIKE '_________' AND LOWER(PARTNUM) LIKE :search  ORDER BY ID;");
    $stmt = $dbh->prepare("Select GT.id,GT.name,GT.partnum, PV2.valueopen,
                                (COUNTINSTATE0-RESERVEDINSTATE0+COUNTINSTATE1-RESERVEDINSTATE1+COUNTINSTATE2-RESERVEDINSTATE2),
                                (COUNTINSTATE5-RESERVEDINSTATE5), 
                                (COUNTINSTATE4-RESERVEDINSTATE4),
                                (COUNTINSTATE3-RESERVEDINSTATE3)  
                            FROM goodstemplates  GT left OUTER JOIN PRICE_VALUES PV2  ON  PV2.IDGOODSTEMPLATES = GT.ID AND  PV2.IDPRICE_BE_TYPE = 5 
                            WHERE GT.OBSOLETE=0 AND GT.REPAIR=0 AND GT.PARTNUM IS NOT NULL AND GT.PARTNUM LIKE '_________' AND GT.COUNTINSTATEALL-GT.RESERVEDINSTATEALL>0 
                            AND LOWER(PARTNUM) LIKE :search  ORDER BY ID");
}
$stmt->execute(array(':search' => $like));
?>
<? foreach ($stmt as $row):
    $PRICE = get_float($row['VALUEOPEN']);//Цена товара
    ?>
    <tr>
        <td><?= $row['PARTNUM'] ?>
            <div class="in-cart">
                <button type="button" class="btn btn-danger" data-product-id="<?= $row['ID'] ?>"
                        data-product-pn=<?= $row['PARTNUM'] ?> data-product-price="<?= $PRICE ?>">В корзину
                </button>
            </div>
        </td>
        <td id="name_price_<?= $row['ID'] ?>"> <?= iconv("CP1251", "UTF-8", $row['NAME']) ?></td>
        <td class="ruble"><?= $PRICE ?> руб.</td>
        <td>
            <?
            $sum = $row[6] + $row[7] + $row[8];
            if ($row[5] == 0)
                $m_store = $sum > 0 ? "<div class='circule store-Color-1'></div>Ожидает поступления" : "<div class='circule store-Color-2'></div>Нет в наличии";
            else
                $m_store = "<div class='circule store-Color-3'></div><span>В наличии</span>"
            ?>
            <div class="store-hidden" data-toggle="tooltip" data-placement="bottom" data-trigger="hover"
                 title="подробнее">
                <?= $m_store ?>
                <div class="all-store">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-xs-9"><span class="text-info">Основной склад:</span></div>
                        <div class="col-lg-3 col-md-3 col-xs-3"><?= $row['5'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<span class="text-danger">Поступления</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-xs-9">1-2 недели:</div>
                        <div class="col-lg-3 col-md-3 col-xs-3"><?= $row['6'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-xs-9">3-4 недели:</div>
                        <div class="col-lg-3 col-md-3 col-xs-3"><?= $row['7'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-xs-9">1-1.5 месяца:</div>
                        <div class="col-lg-3 col-md-3 col-xs-3"><?= $row['8'] ?></div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
<? endforeach; ?>