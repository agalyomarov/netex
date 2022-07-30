<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

const URL = "https://cex.io/api/last_price/";
const URL2 = "https://api.nomics.com/v1/currencies/ticker?key=8434b60cc4ae7498f254d451b37f1d7bcd399124&interval=1s&convert=RUB&per-page=1000&page=1&ids=";
try {
   $client = new Client();
   $eurrub = round((json_decode($client->get("https://www.cbr-xml-daily.ru/latest.js")->getBody()->getContents(), true)['rates']['EUR']), 5);
   $uahrub = round((json_decode($client->get("https://www.cbr-xml-daily.ru/latest.js")->getBody()->getContents(), true)['rates']['UAH']), 5);
   $kztrub = round((json_decode($client->get("https://www.cbr-xml-daily.ru/latest.js")->getBody()->getContents(), true)['rates']['KZT']), 5);
   $usdrub = round(1 / (json_decode($client->get("https://www.cbr-xml-daily.ru/latest.js")->getBody()->getContents(), true)['rates']['USD']), 5);
   $getprice = function ($ticker) use ($usdrub) {
      $client = new Client();
      $response = $client->get(URL . $ticker);
      return round((json_decode($response->getBody()->getContents(), true)['lprice'] * $usdrub), 4);
   };
   $getprice2 = function ($ticker) {
      $client = new Client();
      $response = $client->get(URL2 . $ticker);
      return round(json_decode($response->getBody()->getContents(), true)[0]['price'], 4);
   };
   $usdrub = round((json_decode($client->get("https://www.cbr-xml-daily.ru/latest.js")->getBody()->getContents(), true)['rates']['USD']), 5);
   $data = [
      "TRX/USD" => $getprice("TRX/USD"),
      "BTC/USD" => $getprice("BTC/USD"),
      "BCH/USD" => $getprice("BCH/USD"),
      "ETH/USD" => $getprice("ETH/USD"),
      "XLM/USD" => $getprice("XLM/USD"),
      "LTC/USD" => $getprice("LTC/USD"),
      "XRP/USD" => round(($getprice("XRP/USD") * 12 / 100), 5),
      "DOGE/USD" => $getprice("DOGE/USD"),
      "DASH/USD" => $getprice("DASH/USD"),
      "USDT/USD" => $getprice("USDT/USD"),
      "XTZ/USD" => $getprice("XTZ/USD"),
      "NEO/USD" => $getprice("NEO/USD"),
      "BNB/USD" => $getprice("BNB/USD"),
      "TUSD/USD" => $getprice("TUSD/USD"),
      "ADA/USD" => $getprice("ADA/USD"),
      "LINK/USD" => $getprice("LINK/USD"),
      "USDC/USD" => $getprice("USDC/USD"),
      "BTG" => $getprice2("BTG"),
      "ETC" => $getprice2("ETC"),
      "XMR" => $getprice2("XMR"),
      "ZEC" => $getprice2("ZEC"),
      "BTT" => $getprice2("BTT"),
      "HT" => $getprice2("HT"),
      "XEM" => $getprice2("XEM"),
      "PAX" => $getprice2("PAX"),
      'USD/RUB' => $usdrub,
      'EUR/RUB' => $eurrub,
      'UAH/RUB' => $uahrub,
      "KZT/RUB" => $kztrub,
   ];
   file_put_contents('prices.txt', json_encode($data));
} catch (\Exception $e) {
   echo $e->getMessage();
}
