<?php
$st = '85,55000000000000E+06';

function get_float($st){
    $st[strpos($st, ',')]='.'; //Позиция +
    $price_st=NULL;         //Преобразованная строка
    for ($i = 0, $n = strlen($st); $i < $n; $i++):
        if($st[$i])                 //Можно так $st[$i]?$price_st.=$st[$i]:false;
            $price_st.=$st[$i];
    endfor;
    return (float)$price_st;
}
echo get_float($st);

?>

