<?php
if ($_POST['directmsg'] != '' || $_POST['directmsg'] != NULL && $_POST['directmsgpassphrase'] != '' || $_POST['directmsgpassphrase'] != NULL && $_POST['directmsgaddress'] != '' || $_POST['directmsgaddress'] != NULL) {

$directmsg=$_POST['directmsg'];
$directmsgpassphrase=$_POST['directmsgpassphrase'];
$directmsgaddress=$_POST['directmsgaddress'];

$addressmatch = explode('-', $directmsgaddress);
  
if ($addressmatch[0] != 'CRYT') {
echo '2';
unset($_POST['directmsg']);
unset($_POST['directmsgpassphrase']);
unset($_POST['directmsgaddress']);
      } else { 	 
// edit CRYT-BUYH-6XGS-3ZE8-7DX7X to your public group wallet address
if ($directmsgaddress != 'CRYT-BUYH-6XGS-3ZE8-7DX7X') {




$endpoint_url = 'https://wallet.crytrex.com/nxt?requestType=sendMessage';
// Creates our data array that we want to post to the endpoint
$data_to_post = [
	'recipient' => $directmsgaddress,
	'secretPhrase' => $directmsgpassphrase,
	'feeNQT' => '201000000',
	'deadline' => '1440',
	'broadcast' => true,
	'messageToEncrypt' => $directmsg,
	'messageToEncryptIsText' => true,
	'encryptedMessageIsPrunable' => true,
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

	
	
	
	
      } else { 	 
$endpoint_url = 'https://wallet.crytrex.com/nxt?requestType=sendMessage';
// Creates our data array that we want to post to the endpoint
$data_to_post = [
	'recipient' => $directmsgaddress,
	'secretPhrase' => $directmsgpassphrase,
	'feeNQT' => 101000000,
	'deadline' => 1440,
	'broadcast' => true,
	'message' => $directmsg,
	'messageIsText' => true,
	'messageIsPrunable' => true,
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

} 
unset($_POST['directmsg']);
unset($_POST['directmsgpassphrase']);
unset($_POST['directmsgaddress']);
	  } 
	  } else {
	echo 0;
	}
