<?php
$user = htmlspecialchars($_REQUEST['company']);
$pass = htmlspecialchars($_REQUEST['password']);
$user='Ампилогова Е.П. (ДМ)';
$pass='mos2003cowdm';

$answer = authorization($user,$pass);

function authorization($user,$password)
{
    if ($password == 'mos2003cowdm') {
        $dbh = new PDO("odbc:SVU");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $dbh->prepare('SELECT ID  FROM PARTNERS WHERE FIRMNAME=:company');
        $result->execute(array(':company' => $user));
        foreach ($result as $company) {
            echo $company['ID'];
            echo '<pre>';
            print_r($company);
            echo '</pre>';
        }
    }
};






