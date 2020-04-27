<?php
if ($_POST['sendamount'] != '' || $_POST['sendamount'] != NULL && $_POST['sendpass'] != '' || $_POST['sendpass'] != NULL && $_POST['sendaddress'] != '' || $_POST['sendaddress'] != NULL) {

$sendamount=$_POST['sendamount'];
$sendpass=$_POST['sendpass'];
$sendaddress=$_POST['sendaddress'];

$addressmatch = explode('-', $sendaddress);
  
if ($addressmatch[0] != 'CRYT') {
echo '2';
unset($_POST['sendamount']);
unset($_POST['sendpass']);
unset($_POST['sendaddress']);
      } else { 	 
$nqtamount = 1 * 100000000;
$endpoint_url = 'https://wallet.crytrex.com/nxt?requestType=sendMoney';
// Creates our data array that we want to post to the endpoint
$data_to_post = [
	'secretPhrase' => $sendpass,
	'recipient' => $sendaddress,
	'amountNQT' => $nqtamount,
	'feeNQT' => '1000000',
	'deadline' => '60',
];
// Sets our options array so we can assign them all at once
$options = [
    CURLOPT_RETURNTRANSFER => 1,
  	CURLOPT_URL        => $endpoint_url,
	CURLOPT_POST       => true,
	CURLOPT_POSTFIELDS => $data_to_post,
];
// Initiates the cURL object
$curl = curl_init();
// Assigns our options
curl_setopt_array($curl, $options);
// Executes the cURL POST
$results = curl_exec($curl);
// Be kind, tidy up!
curl_close($curl);
$obj = json_decode($results);
$txid= $obj->{'transactionJSON'}->{'fullHash'};

if ($txid != '' || $txid != NULL) {
	echo 0;
	} else {
	echo 1;
	}

unset($_POST['sendamount']);
unset($_POST['sendpass']);
unset($_POST['sendaddress']);
	  } 
	  } 
