<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

$st = $dbh->prepare("SELECT * FROM setting");
$st->execute();
$stResult = $st->fetchAll(PDO::FETCH_ASSOC);
$stJson = json_encode($stResult);
$stJson = json_decode($stJson, true);
#$stJson[0]['setting_value'];

?>
