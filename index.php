<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/Nelyo");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'TRN-Api-Key: '
));
$response = curl_exec($ch);
curl_close($ch);
$fp = fopen("stats.json", "w");
fwrite($fp, $response);
fclose($fp);

?>
