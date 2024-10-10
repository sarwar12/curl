<?php 
$ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSdRsb8dGgCeowP_-_BW417QgIa2YVhF7Mh2uttDJppsptZkQA/formResponse");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.350696233=sarwar&entry.1920439418=khan&entry.1808644455=sarwar@gmail.com&entry.67874474=0122&entry.1997387373=feni");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if(curl_error($ch)){
    echo curl_errno($ch);
}else{
    echo $result;
}



