<?php  
$ch = curl_init('https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg');
//curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch); 
$info = curl_getinfo($ch);
print_r($info);

// Show All response Headers
$headers = get_headers('https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg');
print_r($headers);


