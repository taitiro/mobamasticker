<?php
require_once dirname(__FILE__)."\simple_html_dom.php";

$getNum = 300;
$getDate = date('Y-m-d', strtotime("-1 day"));
$getOldDate = date('Y-m-d', strtotime("-2 day"));
$inputURL = "http://mobile-trade.jp/fun/sp/idolmaster/ranking.php?table=bid&sort=3&date_min="
    .$getDate
    ."&row="
    .$getNum;
$inputOldDate = dirname(__FILE__)."\\".$getOldDate.".json";
$outputDate = dirname(__FILE__)."\\".$getDate.".json";
$outputJSFile = dirname(__FILE__)."\\mobamas.js";
$file = file_get_html($inputURL);
echo htmlspecialchars($file->find('table.card_ranking_result_table tbody', 0 )->find('tr',2)->find('td',0)->plaintext);
?>