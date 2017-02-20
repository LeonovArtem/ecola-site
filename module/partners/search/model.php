<?php
#DB2 c CDN=SVU
$dbh = new PDO("odbc:SVU");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Партнеры
$search = trim(strtolower($_REQUEST['search_text'])); //Преобразуем входные данные к нижнему регистру
$search_ru = iconv("UTF-8", "CP1251", $search);
$like = "$search_ru%";

$stmt = $dbh->prepare('SELECT FIRMNAME FROM PARTNERS WHERE FIRMSTATUS=\'D\' AND LOWER(FIRMNAME)  LIKE :search ORDER BY FIRMNAME');
$stmt->execute(array(':search' => $like));
foreach ($stmt as $partner):
    echo "\n<li>".iconv("CP1251", "UTF-8", $partner["FIRMNAME"])."</li>"; //$row["name"] - имя поля таблицы
endforeach;


?>