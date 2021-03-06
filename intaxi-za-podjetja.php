<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>InTaxi za Podjetja</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>

    </style>
</head>
<body>
	<div class="container-fluid">
		
		<div class="row align-items-center justify-content-md-center content home" id="home" hidden>
            <div class="col-12">
                <div class="row align-items-center justify-content-md-center">
                   <nav class="top" id="nav">
                   		<a href="" class="logo"></a>
						<a href="#home"> BOOK NOW</a>
						<a href="#payments"> PLAČILA</a>
						<a href="#app"> APLIKACIJA</a>
						<a href="#company"> ZA PODJETJA</a>
						<a href="#work"> ZAPOSLITEV</a>
					</nav>
                </div>
            </div>
		</div>
  		<a href="#" class="back"> BACK</a>
        <div class="row align-items-center justify-content-md-center parallax-window content company" id="company" data-parallax="scroll" data-image-src="img/bg/podjetja.jpg">
        	<div class="col-12">
        		<h3 class="vw">Najboljši sodelujejo z najboljšimi</h3>
        	</div>
        	<div class="col-12 col-md-6">
				<div class="row">
					<p> Že več kot 15 podjetij v Ljubljani sodeluje z nami ker nudimo nizke cene in kvalitetne taksi prevoze kot v Ljubljani in tako tudi izven MOL-a. </p>
					<p> Edini smo kdo ponuja tudi fiksno ceno pri <a href="intaxi-aplikacija" >Online naročilih</a>. </p>
					<hr />
					<p>Za sodelovanje prosimo izpolnite obrazec.</p>
					<p>V 24 urah prejmete potrdilo o sodelovanju in ostale informacije.</p>
				</div>		
        	</div>
        	<div class="col-12 col-md-6">
        		<form action="email.php" method="POST">
					<input type="text" name="company_name" placeholder="Ime Podjetja *" required>
					<input type="number" name="company_vat" placeholder="Davčna številka Podjetja*" pattern="[0-9]{1,8}" required >
					<input type="text" name="company_adress" placeholder="Naslov Podjetja*" required>
					<input type="text" name="company_user" placeholder="Ime in priimek kontaktne osebe *" required>
					<input type="email" name="company_user_email" placeholder="Email kontaktne osebe *" required>
					<input type="submit" value="Send">
				</form>
        	</div>
        	<div class="col-12 ">
        		<div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false, "freeScrollFriction": 0.03}'>
				  <div class="gallery-cell"> <img src="img/partners/gdesign.png" class="img-w" alt="Gdesign"></div>
				  <div class="gallery-cell"> <img src="img/partners/zalika.png" class="img-w" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/gkoper.png" class="img-w" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/hopin.png" class="img-w" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/taxiid.png" class="img-w" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/esatim.jpg" class="img-h" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/stil.png" class="img-h" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/crs.png" class="img-h" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/hyundai.png" class="img-h" alt=""></div>
				  <div class="gallery-cell"> <img src="img/partners/toyota.png" class="img-h" alt=""></div>
				</div>
        	</div>
        </div>
    </div>
    <footer hidden>
		<div class="row">
			<div class="col-12"> SOCIAL </div>
		</div>
   		<div class="row">
   			<div class="col-12 col-md-6"> 1 block</div>
   			<div class="col-12 col-md-6"> 2 block</div>
   		</div>
   		<div class="row">
   			<div class="col-12"> COPYRIGHT</div>
   		</div>
    </footer>
    
    
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js"></script>
    <script>
		$(document).ready(function(){
			$('a.back').click(function(){
				parent.history.back();
				return false;
			});
		});
		$(window).on("scroll touchmove", function () {
			"use strict";
			$('#nav').toggleClass('fix-nav', $(document).scrollTop() > 35);
		});
	</script>
</body>
</html>