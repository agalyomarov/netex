<?php
require 'vendor/autoload.php';

try {
   $data = file_get_contents('prices.txt');
   $prices = json_decode($data, true);
   $getprice = function ($ticker) use ($prices) {
      return $prices[$ticker];
   };
   $trxrub = $getprice("TRX/USD");
   $btcrub = $getprice("BTC/USD");
   $bchrub = $getprice("BCH/USD");
   $btgrub = $getprice("BTG");
   $ethrub = $getprice("ETH/USD");
   $xlmrub = $getprice("XLM/USD");
   $etcrub = $getprice("ETC");
   $ltcrub = $getprice("LTC/USD");
   $xrprub = round($getprice("XRP/USD") * 112 / 100, 5);
   $xmrrub = $getprice("XMR");
   $dogerub = $getprice("DOGE/USD");
   $dashrub = $getprice("DASH/USD");
   $zecrub = $getprice("ZEC");
   $usdtrub = $getprice("USDT/USD");
   $bttrub = $getprice("BTT");
   $htrub = $getprice("HT");
   $xtzrub = $getprice("XTZ/USD");
   $xemrub = $getprice("XEM");
   $neorub = $getprice("NEO/USD");
   $bnbrub = $getprice("BNB/USD");
   $tusdrub = $getprice("TUSD/USD");
   $adarub = $getprice("ADA/USD");
   $linkrub = $getprice("LINK/USD");
   $paxrub = $getprice("PAX");
   $usdcrub = $getprice("USDC/USD");
   $usdrub = $getprice("USD/RUB");
   $eurrub = $getprice("EUR/RUB");
   $uahrub = $getprice("UAH/RUB");
   $kztrub = $getprice("KZT/RUB");
} catch (\Exception $e) {
   echo $e->getMessage();
}
