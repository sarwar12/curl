<?php 
$ch = curl_init('http://localhost/curl/form.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user=sarwar&password=hello&submit=1');
//$cookie_file = '/tmp/cookies.txt';
$cookies = tempnam('/tmp','cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
echo curl_exec($ch);

$ch = curl_init('http://localhost/curl/form.php');
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($ch);
