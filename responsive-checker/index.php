<!doctype html>
<html dir="ltr" lang="en-US" class=" js no-touch csstransitions">
<!-- Head -->
<head>
<!-- Metas -------------------------------------------------------------------------------->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="WolinWeb" />
	<meta name="description" content="Check the best prices for Website Design and Marketing Services. From a 349$ express plan to a top Marketing package, WolinWeb is offering prices for beautiful websites that beat the competition.">
	<meta name="keywords" content="seo, website design and marketing, digital marketing, affordable website, los angeles professional website design, affordable website design, cheap website design." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- End Metas ----------------------------------------------------------------------------->    
    
<!-- Stylesheets ============================================= ------------------------------>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />		
	<link rel="stylesheet" type="text/css" href="css/component1.css" />
	<link rel="stylesheet" type="text/css" href="css/set2.css" />
	
 
<!-- End Stylesheets ============================================= ------------------------------>	
	<link rel="shortcut icon" type="image/png" href="../images/wolin-favicon.png" alt="professional website design"/>
	<title>WolinWeb | Mobile-Design Checker | Check here if your Website is Mobile Friendly</title>
    
</head>

<body class="stretched no-transition">

   <div id="wrapper" class="clearfix">
       
         <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

		<?php include ('../include/header.php');?>

		</header><!-- #header end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title page-title-center page-title-parallax page-title-dark">

			<div class="container clearfix">
				<h1>Mobile-Design Checker</h1>
				<span>Check Here if your Website is Mobile Friendly</span>
				<ol class="breadcrumb">
					<li><a href="../index.php">Home</a></li>
					<li><a href="">Website Design</a></li>
					<li class="active">Mobile Checker</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		
		<div class="container clearfix">
					<div class="row clearfix">
						<div class="col-lg-5">
							<div class="heading-block topmargin" style="padding:70px 0;">
								<h1><em>THE BEST<br> WEBSITE DESIGN<br>PRICES OUT THERE</em></h1>
								<h4 style="color:#143f82">YOU WON'T FIND SOMETHING<br>YOU CAN'T AFFORD</h4>
							</div>
						</div>
						
						<div class="col-lg-7" >

							<div class="ohidden topmargin">
								<!--<p class="lead">When starting a business, no matter what you are doing, you need to be seen. In today’s business world, getting a <a href="https://www.wolinweb.com/professional-website-design" alt="website design">Website Design</a> is the best way to obtain clients and gain exposure online. If you already have a <a href="https://www.wolinweb.com/professional-website-design" alt="website design">Website</a>, you still need to stand out. What will make your potentials clients stay on your <a href="https://www.wolinweb.com/professional-website-design" alt="website design">Website</a> depends on the “experience” they get from it. We can help you to improve that experience!</p>
								<p class="lead">So whether you do or don't have a <a href="https://www.wolinweb.com/professional-website-design" alt="website design">Website Design</a>, we can help you improve your online presence and grow your business. <a href="#">Contact us</a> so we can start your <a href="https://www.wolinweb.com/professional-website-design" alt="website design">Professional Website Design</a> today!</p>-->
							</div>

						</div>

					</div>
				</div>
				

<?php include ('checker.php');?>					
<?php include ('../include/get-started.php');?>       
<?php include ('../include/contactform.php');?>	



<!-- Footer  ============================================= -->
<?php include ('../include/footer.php');?>
<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>-->
	<!-- Footer Scripts
	============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<script type="text/javascript" src="js/responsive.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>

</body>
</html>