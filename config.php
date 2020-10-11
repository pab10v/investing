<?php

$currency = 14;
$pairs = '1,2,3,4,5,6,7,8,9';
$cols  = 'bid,time';

//Single Currency Crosses
$url['single'] = "https://mx.widgets.investing.com/single-currency-crosses?cols=$cols&currency=$currency";
$url['rates'] = "https://mx.widgets.investing.com/live-currency-cross-rates?cols=$cols&pairs=$pairs";

?>