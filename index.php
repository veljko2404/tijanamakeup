<?php

	if(isset($_POST['ime'])&&isset($_POST['broj'])&&isset($_POST['termin'])) {
		$ime = htmlspecialchars($_POST['ime']);
		$broj = htmlspecialchars($_POST['broj']);
		$termin = htmlspecialchars($_POST['termin']);
		if(!empty($ime)&&!empty($broj)&&!empty($termin)) {
			$query = "INSERT INTO `termini` VALUES ('','".addslashes($ime)."','".addslashes($broj)."','".addslashes($termin)."');";
			if(mysqli_query($conn, $query)){
				$message_success = "Успешно сте заказали шминкање, очекујте позив на телефону због потврде !";
				$scroll = 1;
				$to = "ptiijana@hotmail.com";
				$subject = "Ново шминкање !";
				$body = "Име: ".$ime.", број: ".$broj.", термин: ".$termin.", /n/n линк: http://tijanamakeup.com/termini";
				$headers = "from: termini@tijanamakeup.com";
			} else {
				$error_message = "Дошло је до грешке, покушајте поново !";
				$scroll = 1;
			}
		} else {
			$scroll = 1;
			$empty_message = 'Сва поља морају бити попуњена !';
		}
	}

?>
<!DOCTYPE html>
<html lang="sr-rs">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="styleindex.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" sizes="196x196" href="photos/logo.png">
<link rel="apple-touch-icon" href="photos/logo.png">
<meta name="description" content="Sminkanje Tijana Majk ap, u Nišu, naselje PANTELEJ. Vrlo povoljne cene, za više informacija posetite stranicu...">
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<meta name="keywords" content="Sminkanje, Sminkanje Nis Pantelej, Makeup, Make up, Kozmeticki salon, Kozmeticki salon nis">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="indexjava.js"></script>
<script type="text/javascript">

$(window).scroll(function() {
	$(".slideanim").each(function(){
		var pos = $(this).offset().top;

		var winTop = $(window).scrollTop();
		if (pos < winTop + 600) {
			$(this).addClass("slide");
		}
	});
});

</script>
<title>Tijana MakeUp salon u Nisu, veoma povoljne cene.</title>
<style>
		@media only screen and (max-width:768px) {
			#linktogal {
				font-size: 20px;
			}
			#googleMap {
				height: 300px !important;
			}
			#footer {
				margin: 15px auto 0;
			}
			#kontakt {
				margin: 15px auto;
			}
			#onama {
				margin: 15px auto;
			}
			#cenovnik {
				margin: 15px auto;
			}
		}
	</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" <?php if(isset($scroll)){ if($scroll==1){ echo 'onload="window.scrollTo(0, 2500);"'; } } ?> onload="load()">

	<div class="loader" id="load">
    <svg viewBox="0 0 32 32" width="32" height="32">
      <circle id="spinner" cx="16" cy="16" r="14" fill="none"></circle>
    </svg>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img class="navbar-brand" href="#myPage" src="photos/logo.png" style="width: 70px; height: auto; border-radius: 50%; transform: translateY(-10px); -webkit-transform: translateY(-10px); -ms-transform: translateY(-10px);" />
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#galerija">Галерија</a></li>
          <li><a href="#cenovnik">Ценовник</a></li>
          <li><a href="#guglmapa">Локација</a></li>
          <li><a href="#kontakt">Закажите шминкање</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="div1">
    <div class="jumbotron text-center">
      <h1>Салон шминкања</h1>
      <h2>У Нишу по повољним ценама.</h2>
      <h3>Погледај <a href="#cenovnik" class="tocenovnik">ценовник</a>.</h3>
    </div>
  </div>
  <div id="galerija" class="container slideanim">
    <div class="container">
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="photos/slika1.jpg" style="width: 100%;" />
        </div>
        <div class="item">
          <img src="photos/slika2.jpg" style="width: 100%;" />
        </div>
      </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <h2 class="text-center"><a href="galerija/index.html" id="linktogal"><span>Види целу галерију</span></a><h2>
  </div>

  <div id="cenovnik" class="container slideanim">
  <h1 class="text-center">Ценовник</h1><hr />
    <table class="table table-striped text-center" style="color:#606060 !important; font-size:1.35em; margin:35px auto !important; background-color:white !important;">
      <tr>
        <td style="padding:20px 0; border-right: 1px solid #E0E0E0; border-top: none !important;">Цена са трепавицама</td>
        <td style="padding:20px 0;  border-top: none !important;">Цена без трепавица</td>
      </tr>
      <tr style="marign-top:20px;">
        <td style="padding:20px 0; border-right: 1px solid #E0E0E0;">1000</td>
        <td style="padding:20px 0; ">700</td>
      </tr>
    </table>
  </div>

  <div class="container slideanim" id="guglmapa">
    <h1>Локација</h1>
  <div id="googleMap" style="width: 100%; height: 450px;">
  </div>
  <script>
  				function myMap() {
      var myCenter = new google.maps.LatLng(43.33395, 21.9073);
      var mapCanvas = document.getElementById("googleMap");
      var mapOptions = {
  		center: myCenter,
  		zoom: 16,
  		mapTypeId: google.maps.MapTypeId.HYBRID
  	};
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({
  		position:myCenter,
  		animation: google.maps.Animation.BOUNCE
  	});
      marker.setMap(map);

  	var infowindow = new google.maps.InfoWindow({
      content: "Салон шминкања"
      });
      infowindow.open(map,marker);
  }
  			</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWzngxcS4_reS6OGgrTl_N8p7XMnYSa1Y&callback=myMap"></script>
  </div>

  <div class="container slideanim" id="kontakt">
  	<h1>Закажите шминкање</h1>
  	<hr />
		<form class="form" action="index.php" method="post">
			<input type="text" name="ime" value="<?php if(isset($ime)) {echo $ime;} ?>" placeholder="Унесите име"><br><br>
			<input type="text" name="broj" value="<?php if(isset($broj)) {echo $broj;} ?>" placeholder="Унесите број телефона"><br><br>
			<input type="text" name="termin" value="<?php if(isset($termin)) {echo $termin;} ?>" placeholder="Унесите датум"><br><br>
			<input type="submit" class="submitbtn" value="Пошаљи"><br>
			<h3 class="text-danger"><?php if(isset($empty_message)) {echo $empty_message;} ?></h3>
			<h3 class="text-success"><?php if(isset($message_success)) {echo $message_success;} ?></h3>
			<h3 class="text-danger"><?php if(isset($error_message)) {echo $error_message;} ?></h3>
			<hr>
		</form>
    <a href="https://www.facebook.com/tijana.artist" taregt="_blank"><i class="fa fa-facebook" style="background-color: #3b5998 !important;"></i></a>
  	<a href="https://www.instagram.com/tijana_makeup_artist/" taregt="_blank"><i class="fa fa-instagram" id="instag"></i></a><br><br>
  </div>

  <div class="container-fluid" id="footer">
  <h4>Ауторско право © 2017 Тијана мејк ап Ниш | Сва права задржана</h4>
  <h4>Development & SEO by <a href="https://www.facebook.com/profile.php?id=100010094435844" style="text-decoration: underline; transition: 0.5s;" id="development">Вељко Петковић</a>.</h4>
  </div>

  <a href="#myPage" title="Иди горе" id="totop" style="padding: 0px 15px !important;">
    <span class="fa fa-angle-up" id="angleup"></span>
  </a>

</body>
</html>
