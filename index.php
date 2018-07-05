
<!DOCTYPE html>
<html>
<html lang="fr">
<head>
<meta charset="UTF-8">

  <title>Fornite Webservice</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
  		<div class="container-contact2">
  			<div class="wrap-contact2">
        <form method="post" action="#" class="contact2-form validate-form">
          <span class="contact2-form-title">
  					Fortnite Web Service
  				</span>
          <span class="contact2-form-title">
  					Saisissez votre pseudo Fortnite
  				</span>
          <input type="text" placeholder="Nelyo" name="pseudo">
          <select name="platform">
          <option value='xbox'>XBOX</option>
          <option value="pc">PC</option>
          <option value="ps4">PS4</option>
          </select>
          <input type="submit" value="Rechercher">
        </form>
      </div>
    </div>
  </div>


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
  echo'</br>';
  echo'<a href="stats.json">Voir le résultat</a>';
}


?>
