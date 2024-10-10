<?php 
set_time_limit(0);
$ch = curl_init("https://images.unsplash.com/photo-1727549133759-dd5b1a105ed9");
$filename = fopen("image.jpg", "w");
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);