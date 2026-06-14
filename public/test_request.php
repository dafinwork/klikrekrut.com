<?php
$ch = curl_init('http://kliksoft.test');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
} else {
    file_put_contents(__DIR__ . '/test_curl.html', $response);
    echo "Done. Length: " . strlen($response);
}
curl_close($ch);
