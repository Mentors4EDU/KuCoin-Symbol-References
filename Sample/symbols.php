<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.kucoin.com/v1/order?symbol=BTC&symbols=ETH&symbols=NEO
");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
$response = curl_exec($ch);
curl_close($ch);
var_dump($response);
