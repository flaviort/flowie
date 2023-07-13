<?php

/*
 * Handles the instagram feed on homepage
 * As instagram api has a requests limit of 200 per hour,
 * we request the feed once per hour and save it on a local json file 
*/

$api_token = '9008645983.1677ed0.cc3aa828c52a4869ae5c36094aedfdf2';
$filename = 'instagram-data.json';
$api_url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=';


if ( file_exists($filename) && time() - filemtime($filename) < 3600 ) {
	// less than one hour since last update

	readfile($filename);

} else {

	$ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_url.$api_token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);

    if($errno = curl_errno($ch)) {
	    $error_message = curl_strerror($errno);
	    echo "cURL error ({$errno}):\n {$error_message}";
	}

    curl_close($ch);


// --- NEEDS SERVER PERMISSION 
    $json = fopen( $filename, "w" );
	fwrite($json, $output);
	fclose($json);

    echo $output;

}
