<?php

error_reporting(0);


include("bin.php");


function multiexplode($delimiters, $string) {
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];



function getStr2($string, $start, $end) {
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $name = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];



$ch = curl_init('');
curl_setopt($ch, CURLOPT_URL, ''); //หาไส่เองนะค่ะ
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ', //หาไส่เองนะค่ะ
'accept: ', //หาไส่เองนะค่ะ
'accept-encoding: ', //หาไส่เองนะค่ะ
'content-type: ', //หาไส่เองนะค่ะ
'accept-language: ', //หาไส่เองนะค่ะ
'cookie: ', //หาไส่เองนะค่ะ
'Origin: ', //หาไส่เองนะค่ะ
'referer: ', //หาไส่เองนะค่ะ
'sec-fetch-dest: empty', //หาไส่เองนะค่ะ
'sec-fetch-mode: cors', //หาไส่เองนะค่ะ
'sec-fetch-site: same-origin', //หาไส่เองนะค่ะ
'user-agent: ', //หาไส่เองนะค่ะ
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, '');

$c = curl_exec($ch);

$token = trim(strip_tags(getstr($c,'id": "','"')));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''); //หาไส่เองนะค่ะ
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: ', //หาไส่เองนะค่ะ
'accept: ', //หาไส่เองนะค่ะ
'accept-encoding: ', //หาไส่เองนะค่ะ
'content-type: ', //หาไส่เองนะค่ะ
'accept-language: ', //หาไส่เองนะค่ะ
'Origin: ', //หาไส่เองนะค่ะ
'referer: ', //หาไส่เองนะค่ะ
'sec-fetch-dest: empty', //หาไส่เองนะค่ะ
'sec-fetch-mode: cors', //หาไส่เองนะค่ะ
'sec-fetch-site: same-origin', //หาไส่เองนะค่ะ
'user-agent: ', //หาไส่เองนะค่ะ
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, ''); //หาไส่เองนะค่ะ

$a = curl_exec($ch);

$message = trim(strip_tags(getstr(a,'"message":"','"')));
if (strpos($a, "Your card's security code is incorrect.")) {
 echo '<span class="badge badge-success">#Live</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b style="color: white;"> ❤Live❤ '.$bin.' ('.$banco.'-'.$nivel.')  <br>';
  }
else if(substr_count($c, 'incorrect_number') > 0){
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b> ❌ Invalid ❌  </b>';
  exit();
  }
  
else if (strpos($c, "Your card's security code is incorrect.")) {
 echo '<span class="badge badge-success">#Live</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b style="color: white;"> ❤Live❤ '.$bin.' ('.$banco.'-'.$nivel.')  <br>';
  }





else if (strpos($c, "Your card does not support this type of purchase.")) {
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.'<b>❌ Blocked ❌'.$bin.'   </b>';
}


else if (strpos($a, "Your card was declined.")) {
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.'<b>❌ Dead ❌'.$bin.' ('.$banco.'-'.$nivel.')  </b>';
}


else if (strpos($a, "Your card number is incorrect.")) {
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.'<b> ❌ Invalid ❌  </b>';
}

else if (strpos($a, "Your card does not support this type of purchase.")) {
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.'<b>❌ Blocked ❌'.$bin.'   </b>';
}
else if (strpos($c, "Your card was declined.")) {
  echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.'<b>❌ Dead ❌'.$bin.' ('.$banco.'-'.$nivel.')  </b>';
}
else {
 echo '<span class="badge badge-danger">💀Dead💀</span> '.$cc.' '.$mes.' '.$ano.' '.$cvv.' <b>❌ Err0r ❌ '.$bin.'   </b>';
}


?>