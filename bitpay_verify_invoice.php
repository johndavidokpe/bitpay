<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://test.bitpay.com/invoices/R6CpaxBqcBVuP7hEH1u2J5?token=3xTSoTKnmwBZnXe3o4TwxfZrtuDqWNPdevo8JkaP567c",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
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