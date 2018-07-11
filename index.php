
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

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>

  <div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
  		<div class="container-contact2">
  			<div class="wrap-contact2">
        <form method="post" action="data.php" class="contact2-form validate-form">
          <span class="contact2-form-title">
  					Saisissez votre pseudo Fortnite
  				</span>
          <div class="wrap-input2 validate-input" id="wrapper" data-validate="Le pseudo est requis">
            <input type="text" class="input2" id="recherche" placeholder="" name="pseudo" required="required">
            <span class="focus-input2" data-placeholder="PSEUDO"></span>
          </div>

              <select name="platform">
              <option value='xbox'>XBOX</option>
              <option value="pc">PC</option>
              <option value="ps4">PS4</option>
              </select>

          <div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
              <button class="contact2-form-btn" value="Rechercher">Rechercher</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
<script>
    $( document ).ready(function() {
        $("#recherche").on("change",function () {
           if($("#recherche").val()!= ""){
               $( ".focus-input2" ).remove();
           }else{
               $("#wrapper").append('<span class="focus-input2" data-placeholder="PSEUDO"></span>');



           }
        });
    });
</script>
</html>