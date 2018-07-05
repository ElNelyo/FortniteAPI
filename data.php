<?php


if(isset($_POST['pseudo']) && isset($_POST['platform'])){
  $ch = curl_init();
  $link =  "https://api.fortnitetracker.com/v1/profile/".$_POST['platform']."/".$_POST['pseudo'];
  curl_setopt($ch, CURLOPT_URL,$link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'TRN-Api-Key: b8822cb4-20ff-4868-a704-46173e32c106'
  ));
  $response = curl_exec($ch);
  curl_close($ch);
  $fp = fopen("stats.json", "w");
  fwrite($fp, $response);
  fclose($fp);
  $string = file_get_contents("stats.json");
  $json_a = json_decode($string, true);

  print_r($json_a);
}
?>
