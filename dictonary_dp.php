<?php
require_once "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser;

$word = "Morning";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";
echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$resutl = curl_exec($ch);
$dom = HtmlDomParser::str_get_html($resutl);

$short = $dom->getElementByTagName("p.short");
echo "<strong>Short Meaning</strong>: {$short}<br/>";

$short = $dom->getElementByTagName("p.long");
echo "<strong>Short Meaning</strong>: {$short}<br/>";

$alldd = $dom->find("dd a");
echo $alldd[2]->plaintext;

