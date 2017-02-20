<?php
//$ID = $_REQUEST['id'];

$dbh = new PDO("odbc:SVU");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $dbh->prepare('SELECT * FROM PARTNERSNICKS WHERE PARTNER_ID = ?');
$stmt->execute([$_REQUEST['id']]);
$my_array = array();
foreach ($stmt as $partner):
    ++$count_;
    $firm_name = iconv("CP1251", "UTF-8", $partner['NICKFIRMNAME']);            //Название компании
    $niks = array(
        'NIKS_ID' => $partner['ID'],
        'NIKS' => $firm_name
    );
    array_push($my_array, $niks);
endforeach;
echo json_encode($my_array);

?>