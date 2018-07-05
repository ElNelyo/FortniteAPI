<?php


if(isset($_POST['pseudo']) && isset($_POST['platform'])){
  $ch = curl_init();
  $link =  "https://api.fortnitetracker.com/v1/profile/".$_POST['platform']."/".$_POST['pseudo'];
  curl_setopt($ch, CURLOPT_URL,$link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'TRN-Api-Key:'
  ));
  $response = curl_exec($ch);
  curl_close($ch);
  $fp = fopen("stats.json", "w");
  fwrite($fp, $response);
  fclose($fp);
  $string = file_get_contents("stats.json");
  $json_a = json_decode($string, true);

  //print_r($json_a);
}

?>
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
  <h1> <?php echo $json_a['epicUserHandle'];?></h1>

  <h2>SOLO</h2>
  <p>TOP1 : <?php echo $json_a['stats']['p2']['top1']['value'];?> </p>

  <h2>DUO</h2>
  <p>TOP1 : <?php echo $json_a['stats']['p10']['top1']['value'];?> </p>

  <h2>SQUAD</h2>
  <p>TOP1 : <?php echo $json_a['stats']['p9']['top1']['value'];?> </p>
</body>

</html>
