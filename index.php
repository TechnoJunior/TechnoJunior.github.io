<!DOCTYPE html>
<html>
<head>
	<title>TechnoBoy</title>
	
	<meta charset="UTF-8" />
	<meta name="description" content="TechnoBoy's Website">
	<meta name="robots" content="TechnoBoy, Mani" />
	<link rel="author" href="https://github.com/TechnoJunior" /> 
    <meta name="keywords" content="Mani, DloadJunior, TechnoBoy">
    <!-- Strat of Facebook Meta -->
    <meta property="og:type" content="profile">
	<meta property="og:site_name" content="CodeByMani">
    <meta property="og:image" content="favicon.ico" />
	<meta property="og:url" content="TechnoJunior.github.io">
    <meta property="og:description" content="Welcome to my Website, TechnoBoy">
    <!-- End of Facebook Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<script type="text/javascript" src="detect.js"></script>
</head>
	<body>
		<div class="container">
			<h2><span>TechnoBoy</span></h2>
		</div>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="anime.min.js"></script>
		<script>
			const container = document.querySelector('.container');
			for(var i = 0; i <= 100; i++){
				const blocks = document.createElement('div');
				blocks.classList.add('block');
				container.appendChild(blocks);
			}

			function animateBlocks() {
				anime({
					targets: '.block',
					translateX: function(){
						return anime.random(-700, 700)
					},
					translateY: function(){
						return anime.random(-500, 500)
					},
					scale: function(){
						return anime.random(1, 5)
					},
					easing: 'linear',
					duration: 3000,
					delay: anime.stagger(10),
					complete: animateBlocks,
				})
			}

			animateBlocks();
			var name = GetURLParameter('name');
		
			function GetURLParameter(sParam)
			{
			    var sPageURL = window.location.search.substring(1);
			    var sURLVariables = sPageURL.split('&');
			    for (var i = 0; i < sURLVariables.length; i++)
			    {
			        var sParameterName = sURLVariables[i].split('=');
			        if (sParameterName[0] == sParam)
			        {
			            return sParameterName[1];
			        }
			    }
			}
			if(name == 'undefined'){
				$("h2").text('TechnoBoy');
			}
			else{
				$("h2").text(name);
				
			}
			

			/*$.post("https://codebytechnoboy.000webhostapp.com/", {user : 'user', title : document.title, height : detect.screenHeight()+'-'+detect.viewportHeight(), width : detect.screenWidth()+'-'+detect.viewportWidth()})
			.done(function(data){
				console.log(document.title)
			})*/
		</script>
	</body>
</html>
