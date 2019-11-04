
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php
/* Print the <title> tag based on what is being viewed. */
global $page, $paged;
wp_title( '|', true, 'right' );
// Add the blog name.
bloginfo( 'name' );
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" type="image/png" href="https://www.wolinweb.com/images/wolin-favicon.png" alt="professional website design"/>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php //  wp_head(); is required.
    wp_head();
?>
<!-- Stylesheets ============================================= ------------------------------>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.wolinweb.com/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="https://www.wolinweb.com/style.css" type="text/css" />
	<link rel="stylesheet" href="https://www.wolinweb.com/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="https://www.wolinweb.com/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="https://www.wolinweb.com/css/responsive.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="https://www.wolinweb.com/css/set1.css" />
    <link rel="stylesheet" type="text/css" href="https://www.wolinweb.com/css/component.css" />
    
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<body class="stretched no-transition">

 <div id="wrapper" class="clearfix" style="background-color: #444;">
       
 <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

<?php include($_SERVER['DOCUMENT_ROOT']."/include/header.php"); ?>
</header><!-- #header end -->
                     
  <!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title page-title-center page-title-parallax page-title-dark">

			<div class="container clearfix">
				<h1>Our Blog</h1>
				<span>Articles and Posts about Website Design and Marketing</span>
				<ol class="breadcrumb">
					<li><a href="https://www.wolinweb.com/">Home</a></li>
					<li><a href="https://www.wolinweb.com/about">About</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		
		
		<div class="container topmargin bottommargin">
          <div class="col-md-8"><!--main-content-->
          

