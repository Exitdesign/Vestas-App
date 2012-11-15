<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Vestas® We Power the future</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS buttons with pseudo-elements" />
        <meta name="keywords" content="css, css3, pseudo, buttons, anchor, before, after, web design" />
        <meta name="author" content="Sergio Camalich for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

       	<script type="text/javascript" src="css/jquery-1.4.1.js"></script>
		<script type="text/javascript" src="css/jquery.counter.js" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.counter-analog.css" />
	    <style type="text/css">
	      br { clear: both; }
	      .cntSeparator {
	        font-size: 54px;
	        margin: 10px 7px;
	        color: #000;
	      }
	      .desc { margin: 7px 3px; }
	      .desc div {
	        float: left;
	        width: 70px;
	        margin-right: 65px;
	        font-size: 13px;
	        font-weight: bold;
	        color: #000;
	      }
	    </style>
	    <?php
	    	$id = $_GET[id];		// Post id
	    	$url = null;			// URL to be redirected
	    	$timer = null;			// timer counter
	    	$time = null;			// time to be redirected
	    	$action_name = null;	// action name
	    	switch($id)
	    	{
	    		case"1": $url = "screensaver.html"; $action_name="Show screensaver"; $timer="99:00"; $time="99000"; break;
	    		case"1.1": $url = "screensaver.html"; $action_name="Restart screensaver"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"2": $url = "value-chain.html"; $action_name="Show value chain"; $timer="10:00"; $time="10000"; break;
	    		case"2.1": $url = "value-chain.html"; $action_name="Play value chain video 1"; $timer="10:00"; $time="10000"; break;
	    		case"2.2": $url = "value-chain.html"; $action_name="Play value chain video 2"; $timer="10:00"; $time="10000"; break;
	    		case"2.3": $url = "value-chain.html"; $action_name="Play value chain video 3"; $timer="10:00"; $time="10000"; break;
	    		case"2.4": $url = "value-chain.html"; $action_name="Play value chain video 4"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"3": $url = "product-portfolio.html"; $action_name="Show product portfolio"; $timer="10:00"; $time="10000"; break;
	    		case"3.1.1": $url = "product-portfolio.html"; $action_name="Onshore 2MW Platforms"; $timer="10:00"; $time="10000"; break;
	    		case"3.1.2": $url = "product-portfolio.html"; $action_name="Onshore 3MW Platforms"; $timer="10:00"; $time="10000"; break;
	    		case"3.1.3": $url = "product-portfolio.html"; $action_name="Offshore"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"3.2.1": $url = "product-portfolio.html"; $action_name="Onshore V80 2.0MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.2": $url = "product-portfolio.html"; $action_name="Onshore V80 1.8/2.0 MW GridStreamer"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.3": $url = "product-portfolio.html"; $action_name="Onshore V90 1.8/2.0 MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.4": $url = "product-portfolio.html"; $action_name="Onshore V90 1.8/2.0 MW GridStreamer"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.5": $url = "product-portfolio.html"; $action_name="Onshore V100 1.8 MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.6": $url = "product-portfolio.html"; $action_name="Onshore V100 1.8 MW GridStreamer"; $timer="10:00"; $time="10000"; break;
	    		case"3.2.7": $url = "product-portfolio.html"; $action_name="Onshore V100 2.0 MW (IECIIB)"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"3.3.1": $url = "product-portfolio.html"; $action_name="Onshore V90 3.0 MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.3.2": $url = "product-portfolio.html"; $action_name="Onshore V100 2.6 MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.3.3": $url = "product-portfolio.html"; $action_name="Onshore V112 3.0 MW"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"3.4.1": $url = "product-portfolio.html"; $action_name="Offshore V112 3.0 MW"; $timer="10:00"; $time="10000"; break;
	    		case"3.4.2": $url = "product-portfolio.html"; $action_name="Offshore V164 7.0 MW"; $timer="10:00"; $time="10000"; break;
	    		
	    		case"4": $url = "history.html"; $action_name="Show history"; $timer="10:00"; $time="10000"; break;
	    	}
	    ?>
	</head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://www.vestas.com">
                    <strong>Vestas EU </strong>www.vestas.com
                </a>
                <span class="right">
                    <a href="http://www.exitdesign.com">
                        <strong>EXITDESIGN S.L.</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<header>
                </br>
				</br>
				<img src="images/logo_vestas.png"/ style="min-width:150px; max-width:170px; width:20%">
                <h1>Wind. <span>It means the world to us.</span></h1>
			</header>
			<section>
				<nav class="codrops-demos">
	                <div class="crops-container">
						<h1 id="action_name" value="<? echo $action_name; ?>"><? echo $action_name; ?></h1>
						<h1 id="url" value="<? echo $url; ?>"><? echo $url; ?></h1>
						<h1 id="timer" value="<? echo $timer; ?>"><?php echo $timer; ?></h1>
	                </div>
				</nav>
				</div>
				<div class="container_buttons">
					<h1 style="text-align: center;">You must wait</h1>
					<div class="container-btn-uno" style="position:relative;left:32%;">
						<div class="counter counter-analog">00:00</div>
					    <script>
					    	var timer = $('#timer').attr('value');
					    	$('.counter').counter();
					        $('.counter').addClass('counter-analog').counter({
					            initial: timer,
					            direction: 'down',
					            interval: '10:100',
					            format: '99:99',
					            stop: '0:00.0'
					        });
					    </script>
						<span id="url" value="<? echo $url; ?>"></h1>
						<h1 id="time" value="<? echo $time; ?>"></h1>
					    <script>
							var time = $('#time').attr('value');
							var url = $('#url').attr('value');
						    var action_name = $('#action_name').attr('action_name');
							setTimeout("location.href = url;",time);
						</script>
				     </div>
			    	 </p>
					 <h2 class="desc" style="position:relative; left:41%; margin-top:80px;">seconds to be redirected.</h2>
				</div>
			</section>
        </div>
        <footer>
        </footer>
    </body>
</html>