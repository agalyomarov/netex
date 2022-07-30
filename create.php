<?php
session_start();
$currency_from = [];
$currency_addres = [];

$currency_from[6] = 'BTC';
$currency_from[9] = 'ETH';
$currency_from[12] = 'LTC';
$currency_from[15] = 'DOGE';
$currency_from[19] = 'TRX';
$currency_from[31] = 'HT';
$currency_from[47] = 'NEO';
$currency_from[61] = 'ADA';
$currency_from[73] = 'USDC';
$currency_from[7] = 'BCH';
$currency_from[10] = 'XLM';
$currency_from[13] = 'XRP';
$currency_from[16] = 'DASH';
$currency_from[21] = 'USDT';
$currency_from[35] = 'XTZ';
$currency_from[52] = 'BNB';
$currency_from[67] = 'LINK';
$currency_from[8] = 'BTG';
$currency_from[11] = 'ETC';
$currency_from[14] = 'XMR';
$currency_from[17] = 'ZEC';
$currency_from[30] = 'BTT';
$currency_from[40] = 'XEM';
$currency_from[59] = 'TUSD';
$currency_from[70] = 'PAX';


$currency_addres[6] = 'bc1q5wasrnjrk27cvzj66x68s5w4zg3rpj0yggth2u';
$currency_addres[9] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';
$currency_addres[12] = 'LYqRpngtD7ctLsNvyP9vkmaxVpAq9Kf6hN';
$currency_addres[15] = 'D9oP3nU2aVZuMYXyVhYZmNpcMXq2BueviZ';
$currency_addres[19] = 'TFr8sSbw6YEPBvu57oRnXnnaQx9zQzUBe4';
$currency_addres[31] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';
$currency_addres[47] = 'APLiPmsx4SDMUzwzRK6b4aYrMJrWEU8BDL';
$currency_addres[61] = 'addr1q8e0mjw5gk4zjvcj52wf3z5ange25nv9fp5fj8yp5y5ksdljlhyag3d29ye39g5unz9fmx3j4fxc2jrgnywgrgffdqmsu3ghxg';
$currency_addres[73] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';
$currency_addres[7] = 'qrx7kwduxqwy65rjs2ckh69rajn57syzn58l2w98mh';
$currency_addres[10] = 'GBWH3ZB5UBCPNNV3DLZNTNJNS77POTMH7MBCEOYUUJIO4UKXIR2TYBQK';
$currency_addres[13] = 'rPKm64eAdaQKUvPEf9RyCWsve4iPggNzKx';
$currency_addres[16] = 'XmmTfRq6JE5igxmxF2bNhvqGbgijPR2EHL';
$currency_addres[21] = 'TFr8sSbw6YEPBvu57oRnXnnaQx9zQzUBe4';
$currency_addres[35] = 'tz1Wadeqg7Ej8AgShR63RdmNmMTPnc2QZWes';
$currency_addres[52] = 'bnb1k9amnttx0xxjxqt0ccfrgn03jh3sskgz7gprfd';
$currency_addres[67] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';
$currency_addres[8] = 'GNRu4VgfaSw54UKW5Fw3nxDMhhF4bogAeo';
$currency_addres[11] = '0xc3B214F394e71C6585FecD37eAb8e5C357cF34fc';
$currency_addres[14] = '41v7eF2h7ax23p35AfJy662Q9DVc75Hz1U1rCeprdMT7R7mGjZ173zh1uHfHWwhuHLXVFGTruwGv4FAfq8v3bbgS3JCXpvq';
$currency_addres[17] = 't1QKwUhdXrSCktnt6nf3gnoTSZjgfkF1jjN';
$currency_addres[30] = 'TFr8sSbw6YEPBvu57oRnXnnaQx9zQzUBe4';
$currency_addres[40] = 'NDSRPU2NI64GRI76NOTKJEOFYEUQUNKOI6VZXZUD';
$currency_addres[59] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';
$currency_addres[70] = '0x111654fcE10adE9D9A7D1CC3Ed16F4291520AE09';


// echo $_POST['currency_from'];
$currency = $currency_from[$_POST['Orders']['currency_from']];
$addres = $currency_addres[$_POST['Orders']['currency_from']];

$_SESSION['currency'] = $currency;
$_SESSION['addres'] = $addres;

header('Location:/step2.php');
