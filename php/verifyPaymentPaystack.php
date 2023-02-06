<?php
function verifyPaymentPaystack(string $secretKey, string $transactionReference)
: array{

//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'.$transactionReference;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
  $ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer '.$secretKey]
);
//send request
$request = curl_exec($ch);
//close connection
curl_close($ch);
//declare an array that will contain the result 
$result = array();
if ($request) {
  $result = json_decode($request, true);
}else{
    return [
        'status' => false,
        'message' => 'data_fetch_error'
    ];
}
$status =(array_key_exists('data', $result) 
&& array_key_exists('status', $result['data']) 
&& ($result['data']['status'] === 'success'));
return $result;
}

/*----------------------------------------------------------------
Author : Biodun Bamigboye
usage example
verifyPaymentPaystack('sk_live_eeeehjjdhfnfhhdndf776dhfhdhd',36364553545);
First Parameter is the secret key to your paystack account
Second Parameter is the transaction reference to be queried
returns an array 
status key which is boolean shows the state of the transaction

*/
