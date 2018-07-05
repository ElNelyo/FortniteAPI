<?php

if(isset($_POST['pseudo']) && isset($_POST['platform'])){
  $ch = curl_init();
  $link =  "https://api.fortnitetracker.com/v1/profile/".$_POST['platform']."/".$_POST['pseudo'];
  curl_setopt($ch, CURLOPT_URL,$link);
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
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>Fornite Webservice </title>
</head>
<body>

<h1>Fornite Webservice</h1>
<form method="post" action="#">
<input type="text" placeholder="Nelyo" name="pseudo">
<select name="platform">
<option value='xbox'>XBOX</option>
<option value="pc">PC</option>
<option value="ps4">PS4</option>
</select>
<input type="submit" value="Rechercher">
</form>

</body>
</html>
