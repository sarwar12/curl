<?php
$data = array(
    array(
        'fname'    => urlencode('সারোয়ার'),
        'lname'    => urlencode('খান'),
        'email'    => 'sarwar@gmail.com',
        'phone'    => time(),
        'district' => 'ctg',
    ),
    array(
        'fname'    => 'Rahul',
        'lname'    => 'Khan',
        'email'    => 'rahuk@gmail.com',
        'phone'    => time(),
        'district' => 'cumilla',
    ),
    array(
        'fname'    => 'Israt',
        'lname'    => 'Khan',
        'email'    => 'israt@gmail.com',
        'phone'    => time(),
        'district' => 'cumilla',
    ),
);

foreach ( $data as $entry ) {
    $ch = curl_init( "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdRsb8dGgCeowP_-_BW417QgIa2YVhF7Mh2uttDJppsptZkQA/formResponse" );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, "entry.350696233={$entry['fname']}&entry.1920439418={$entry['lname']}&entry.1808644455={$entry['email']}&entry.67874474={$entry['phone']}&entry.1997387373={$entry['district']}" );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $result = curl_exec( $ch );
    if ( curl_error( $ch ) ) {
        echo curl_error( $ch );
    } else {
        echo $result;
    }
}
