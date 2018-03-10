<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.kucoin.com/v1/market/open/coin-info
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
$response = curl_exec($ch);
curl_close($ch);
var_dump($response);
