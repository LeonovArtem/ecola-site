<?php
file_put_contents('data_test.txt', $_REQUEST);
echo '<pre>';
//print_r($_REQUEST);
echo '</pre>';

$dbh = new PDO("odbc:SVU");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i = 0, $n = count($_REQUEST['ORDER']); $i < $n; $i++):
if($_REQUEST['ORDER'][$i]['niks']){
    $insert_niks = $dbh->prepare('INSERT INTO  INTERNETORDERS(IDPARTNERSNICK,DOCDATE) VALUES (?,current_timestamp)');
    $insert_niks->execute(array($_REQUEST['ORDER'][$i]['niks']));
}else{
    $pn=$_REQUEST['ORDER'][$i]['Partnum'];
    $qn=$_REQUEST['ORDER'][$i]['Quantity'];
    $all_st_prod='INSERT INTO  INTERNETORDERSITEMS(IDINTERNETORDER,PARTNUM,QUANTITY) 
                  VALUES((select max(ID) from INTERNETORDERS),\''.$pn.'\','.$qn.');';
    $insert_prod = $dbh->query($all_st_prod);
}
endfor;
echo '<h1>Заказ успешно создан!</h1>';
?>
