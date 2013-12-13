<?

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

$image = rand(1, 11) . '.jpg';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cleanix AB – När du behöver en expert</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="css/cleanix.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<!-- Part 1: Wrap all page content here -->
		
		<div id="super-outer-wrapper" style="display: none;">
		</div>
		
			<div id="wrap">

				<!-- Begin page content -->
				<div class="container">
					<div class="page-header">
						<h1 id="page-header">Cleanix</h1>
					</div>

					<p class="lead">
						Cleanix sanerar, tvättar fasader och rengör det mesta mellan himmel o jord. Vi har mer än 20 års erfarenhet av att sanera bland annat klotter, olja, alger och mögel samt höghöjdsstädning av kylbatterier och balkar, ventilationsrör, armaturer mm. Våra kunder är fastighetsbolag, industri, offentlig sektor och privatpersoner. Pålitlighet och noggrannhet är alltid lika viktigt för oss – oavsett uppdrag. Vi har kompetensen och utrustningen som krävs för att utföra en effektiv sanering.<br /><br />
						Cleanix – När du behöver en expert.<br /><br />

						Telefon 0761-800926<br />
						E-post <a href="mailto:info@cleanix.se">info@cleanix.se</a>

					</p>

				</div>

				<div id="push"></div>
			</div>

			<div id="footer">
				<div class="container">
					<p class="muted credit">Cleanix AB. Aröds industriväg 76, 422 43 Hisings Backa. Org nr: 556836<span>-</span>9689</p>
				</div>
			</div>
			
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>

		<script src="bootstrap/js/bootstrap.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<script>
		
			var url = 'img/<?=$image ?>';
		
			jQuery(document).ready(function(){
				var img = new Image();
				
				img.onload = function(){
					jQuery('#super-outer-wrapper').delay(500).css({
						backgroundImage: 'url('+url+')'
					}).fadeIn(1000);

				}
				img.src = url;

				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-40509819-1', 'cleanix.se');
				ga('send', 'pageview');
			});
		</script>

	</body>
</html>
