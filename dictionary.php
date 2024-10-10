<?php
$word = "Morning";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";
//$endpoint = "https://www.collinsdictionary.com/dictionary/english/morning";
//$endpoint = "https://dictionary.cambridge.org/dictionary/english/{word}";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$resutl = curl_exec($ch);
echo $resutl;