<?php
/*
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://test.bitpay.com/tokens",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'facade' => 'pos',
    'id' => '3xTSoTKnmwBZnXe3o4TwxfZrtuDqWNPdevo8JkaP567c'
  ]),
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "X-Accept-Version: 2.0.0",
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}*/
?>

<?php
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://test.bitpay.com/invoices",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'itemizedDetails' => [
        'isFee' => true
    ],
    'token' => '3xTSoTKnmwBZnXe3o4TwxfZrtuDqWNPdevo8JkaP567c',
    'price' => 0.00700,
    'currency' => 'btc'
  ]),
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "X-Accept-Version: 2.0.0",
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
<!--
<script defer async src="https://integrate.depay.com/widgets/v12.js"></script>
<script>
DePayWidgets.Payment({
  integration: 'ae78160e-08be-478a-abb8-623e94f06517'
})


</script>
<div
  class="DePayButton"
  label="Pay"
  integration="ae78160e-08be-478a-abb8-623e94f06517"
  blockchains='["ethereum","bsc"]'
     payload='{"items":[{"id": 1, "amount": 2}, {"id": 2, "amount": 1}], 
              "forward_to": "https://example.com/depay/success/1212391238123"
}'

></div>
<script src="https://integrate.depay.com/buttons/v12.js"></script>
<noscript><a href="https://depay.com">Web3 Payments</a> are only supported with JavaScript enabled.</noscript>
<script>DePayButtons.init({document: document});</script>
!-->
